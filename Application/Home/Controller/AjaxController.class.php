<?php

namespace Home\Controller;
class AjaxController extends CommonController
{
    /**
     * Ajax 检查用户名是否已被注册
     */
    public function checkUsername()
    {
        if (!IS_AJAX) {
            $this->error('非法访问！');
        }
        $username = I('username');
        $email = I('email');
        $where = array(
            'username' => $username,
            'email' => $email,
        );
        if (!M('User')->where($where)->getField('user_id')) {
            echo 1;
        } else {
            echo -1;
        }
    }

    /**
     * Ajax 检测邮箱是否已被注册
     */
    public function checkEmail()
    {
        if (!IS_AJAX) {
            $this->error('非法访问！');
        }
        $email = I('email');
        $where = array(
            'email' => $email,
        );
        if (!M('Userinfo')->where($where)->getField('user_id')) {
            echo 1;
        } else {
            echo -1;
        }
    }

    /**
     * 执行注册操作
     */
    public function regsave()
    {

        if (empty(I('username'))) {
            $data['error'] = '用户名不能为空！';
            echo json_encode($data);
            die;
        }
        if (empty(I('pwd'))) {
            $data['error'] = '密码不能为空！';
            echo json_encode($data);
            die;
        }
        if (strlen(I('pwd')) > 16 || strlen(I('pwd')) < 6) {
            $data['error'] = '密码必须为6-16位！';
            echo json_encode($data);
            die;
        }
        if (preg_match("/^\d*$/", I('pwd'))) {
            $data['error'] = '密码必须包含字母！';//全数字
            echo json_encode($data);
            die;
        }
        if (preg_match("/^[a-z]*$/i", I('pwd'))) {
            $data['error'] = '密码必须包含数字！';//全字母
            echo json_encode($data);
            die;
        }
        if (!preg_match("/^[a-z\d]*$/i", I('pwd'))) {
            $data['error'] = '密码只能包含数字和字母！';//有数字有字母
            echo json_encode($data);
            die;
        }

        if (empty(I('email'))) {
            $data['error'] = '邮箱不能为空！';
            echo json_encode($data);
            die;
        }
        if (trim(I('pwd')) !== trim(I('pwd2'))) {
            $data['error'] = '两次密码不一致！';
            echo json_encode($data);
            die;
        }

        $obj = array(
            'username' => I('username'),
            'password' => md5(I('pwd')),
            'reg_time' => date('Y-m-d H:i:s', time()),
            'userinfo' => array(
                'nickname' => I('username'),
                'email' => I('email'),
                'checkcode' => md5(uniqid()),//随机生成邮箱验证码
                'points' => C('REG'),
                'login_time' => date('Y-m-d H:i:s', time()),
                'login_ip' => get_client_ip(),
            ),
        );
        $user_id = D('User')->relation(true)->data($obj)->add($obj);
        if ($user_id) {
            $link = CHECK_CODE . '/Home/Ajax/active/user_id/' . $user_id . '/checkcode/' . $obj['userinfo']['checkcode'];//邮箱激活地址
            sendMail(I('email'), '潘琰网站会员注册邮箱激活！', '点击激活！' . $link);//邮箱信息发送
            session('user_id', $user_id);
            session('username', I('username'));
            $data['error'] = '';
            $data['tip'] = '注册成功，增加' . C('REG') . '积分！';
            $data['avatar'] = 'http://www.sucaihuo.com/Public/images/avatar.jpg';
            echo json_encode($data);
        } else {
            $data['error'] = '注册失败！';
            echo json_encode($data);
        }

    }

    /**
     * 邮箱激活
     */
    public function active()
    {
        $user_id = I('user_id');
        $checkcode = I('checkcode');
        $userinfo = D('userinfo');
        $where = array(
            'checkemail' => 0,
            'user_id' => $user_id,
        );
        $user_info = $userinfo->where($where)->find();
        if (empty($user_info)) {
            $this->error('无此数据！', U('Index/index'));
            die;
        }
        if ($checkcode == $user_info['checkcode']) {
            $arr = array(
                'info_id' => $user_info['info_id'],
                'checkemail' => 1,
                'checkcode' => '已激活',
                'points' => $user_info['points'] + C('CHECK_EMAIL'),
            );
            if ($userinfo->save($arr)) {
                $this->success('激活成功,增加' . C('CHECK_EMAIL'), U('Index/index'));
                die;
            } else {
                $this->error('激活失败！', U('Index/index'));
                die;
            }

        } else {
            $this->error('邮箱已经激活！', U('Index/index'));
            die;
        }

    }

    /**
     * 异步发送邮件
     */
    public function email_check()
    {
        $user_id = session('user_id');
        $userinfo = D('userinfo')->where(array('user_id' => $user_id))->find();
        $link = CHECK_CODE . '/Home/Ajax/active/user_id/' . $user_id . '/checkcode/' . $userinfo['checkcode'];//邮箱激活地址
        $sedEmail = sendMail($userinfo['email'], '潘琰网站会员注册邮箱激活！', '点击激活！' . $link);//邮箱信息发送
        if ($sedEmail) {
            echo 1;
        } else {
            echo 2;
        }

    }


    /**
     * 异步登录的方法
     */
    public function checkLogin()
    {

        if (empty(I('username'))) {
            $data['error'] = '用户名不能为空！';
            echo json_encode($data);
            die;
        }
        if (empty(I('pwd'))) {
            $data['error'] = '密码不能为空！';
            echo json_encode($data);
            die;
        }

        $username = I('username');
        $pwd = md5(I('pwd'));
        $rememberme = I('rememberme');
        $where = array(
            'username' => $username
        );
        $user = D('user')->relation(true)->where($where)->find();
        if (!$user || $user['password'] != $pwd) {
            $data['error'] = '登录失败！';
            echo json_encode($data);
            die;
        }
        if ($user['lolck'] == 1) {
            $data['error'] = '用户已被锁定，无法登录！';
            echo json_encode($data);
            die;
        } else {
            //是否记住密码
            if ($rememberme == 1) {
                $val = $user['user_id'] . '|' . get_client_ip() . '|' . $user['username'];
                //加密函数
                $val_res = encrypt($val, 1);
                setcookie('sucai', $val_res, time() + C('AUTO_LOGIN_TIME'), '/');//存入cookie
            }
            $today = strtotime(date('Y-m-d'));//获取当天0时0分0秒的时间
            if ($today > strtotime($user['login_time'])) {//判断当天是否登录过，如果没有增加登录积分
                $arr = array(
                    'user_id' => $user['user_id'],
                    'userinfo' => array(
                        'points' => intval($user['points']) + C('LOGIN'),
                        'login_time' => date('Y-m-d H:i:s', time()),
                        'login_ip' => get_client_ip(),
                    ),
                );
                D('user')->relation(true)->where(array('user_id' => $user['user_id']))->save($arr);
                session('user_id', $user['user_id']);
                session('username', $user['username']);
                $data['error'] = '';
                $data['tip'] = '登录成功，增加' . C('LOGIN') . '积分！';
                $data['avatar'] = 'http://www.sucaihuo.com/Public/images/avatar.jpg';
                echo json_encode($data);
                die;
            } else {
                $arr = array(
                    'user_id' => $user['user_id'],
                    'userinfo' => array(
                        'login_time' => date('Y-m-d H:i:s', time()),
                        'login_ip' => get_client_ip(),
                    ),
                );
                D('user')->relation(true)->where(array('user_id' => $user['user_id']))->save($arr);
                session('user_id', $user['user_id']);
                session('username', $user['username']);
                $data['error'] = '';
                $data['tip'] = '登录成功！';
                $data['avatar'] = 'http://www.sucaihuo.com/Public/images/avatar.jpg';
                echo json_encode($data);
                die;
            }
        }

    }

    /**
     * 修改用户的介绍
     */
    public function intro()
    {
        if (!IS_AJAX || !$_SESSION['username']) {
            $this->error('非法操作！', U('Account/login'));
            die;
        }
        D('userinfo')->where(array('user_id' => session('user_id')))->save(array('intro' => I('content')));
        die;
    }

    /**
     * 点击收藏
     *
     * 异步收藏
     */
    public function getCollect()
    {
        $collect = D('collect');
        if (!session('user_id')) {
            echo -1;
            die;
        }
        $data['article_id'] = I('id');
        $data['collect_type'] = I('mtype');
        $data['member_id'] = session('user_id');
        $collect_res = $collect->where($data)->find();
        if ($collect_res) {
            //取消收藏
            $collect->where($data)->delete();
            echo -2;
        } else {
            //增加收藏
            $data['time'] = time();
            $collect_id = $collect->add($data);
            echo $collect_id;
        }
    }

    /**
     * 话题--异步评论功能
     */
    public function subcomment()
    {
        //ajax/subcomment

        if (!IS_AJAX || !$_SESSION['username']) {
            $this->error('非法操作！', U('Account/login'));
            die;
        }
        $data['pid'] = I('pid');
        $data['member_id'] = session('user_id');
        $data['content'] = facegif(I('content'));
        $data['article_id'] = I('id');
        $data['type'] = I('mtype');
        $data['time'] = time();

        if (I('pid_sub')) {//多级评论的执行操作
            $data['pidsub'] = I('pid_sub');
            $comms = D('comment')->where(array('comment_id' => $data['pidsub']))->find();//查询评论
            $data['tid'] = $comms['member_id'];
            $users = D('userinfo')->where(array('user_id' => $data['tid']))->find();//查询评论的人
            $data['tuser'] = $users['nickname'];
            $data['touid'] = $this->touid($data['pidsub']);
        }
        $comment = D('comment');
        $oldtime = $comment->where(array('member_id' => $data['member_id']))->order('comment_id desc')->find();

        //判断是话题评论还是文章评论
        if ($data['type'] == 2) {
            D('topic')->where(array('topic_id' => $data['article_id']))->setInc('comment');
        } else {
            D('article')->where(array('article_id' => $data['article_id']))->setInc('comment');
        }

        $time = time() - $oldtime['time'];
        if ($time < 3) {
            $da['code'] = 'fast';
            $da['error'] = '您的评论太快了，请稍后再发表评论！';
            echo json_encode($da);
            die;
        }

        //限定评论字数
        $commentNum = strlen($data['content']);
        if ($commentNum < 10) {
            $da['code'] = 'short than 10';
            $da['error'] = '评论的内容不能少于10个字符！';
            echo json_encode($da);
            die;
        }
        if ($commentNum > 255) {
            $da['code'] = 'title similar';
            $da['error'] = '评论的内容不能大于250个字符！';
            echo json_encode($da);
            die;
        }
        //插入数据
        if ($comment->add($data)) {
            $da['code'] = 200;
            $da['points'] = 0;
            $da['comment'] = I('content');
            echo json_encode($da);
            die;
        } else {
            echo 222;
        }

    }

    /**
     * 多级评论
     * 查找touid
     *
     */
    public function touid($pidsub)
    {
        $commss = D('comment')->where(array('comment_id' => $pidsub))->find();
        if ($commss['pidsub'] == 0) {
            return $commss['comment_id'];
        }
        while ($commss['pidsub']) {
            $commss = D('comment')->where(array('comment_id' => $commss['pidsub']))->find();
            $pidsub = $commss['comment_id'];
        }
        return $pidsub;

    }

}