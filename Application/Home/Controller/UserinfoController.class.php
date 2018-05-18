<?php

namespace Home\Controller;

use Home\Model\ComModel;
use Think\Controller;
use Think\Model;
use Home\Controller\MbaseController;

class UserinfoController extends CommonController
{
    /**
     * 初始化的构造方法
     * 这样写必须要调用它父类的构造方法
     */
    public function __construct()
    {
        parent::__construct();
        $this->member_inf();

    }
    /**
     * 用户个人中心左侧的资料
     *
     */
    public function member_inf()
    {
        $member_info = D('userinfo')->where(array('user_id' => session('user_id')))->find();
        $this->assign('memberInfo', $member_info);
    }

    /**
     * 获取用户的个人信息
     */
    public function user_info()
    {

        $mbase = new \Home\Controller\MbaseController();
        $userinfo = D('userinfo');
        $where = array(
            'user_id' => session('user_id'),
        );
        $fields = array('sex', 'job', 'intro', 'address', 'nickname');
        $userinfos = $userinfo->where($where)->field($fields)->find();
        $address = explode(',', $userinfos['address']);
        $this->assign('prov', $address[0]);
        $this->assign('city', $address[1]);
        $this->assign('dist', $address[2]);
        $this->assign('userinfos', $userinfos);
        $this->display('user_info');
    }

    /**
     * 修改用户的信息
     */
    public function updateInfo()
    {
        $mbase = new \Home\Controller\MbaseController();
        if (!IS_AJAX) {
            $this->error('非法访问！');
            die;
        }
        if (empty(I('nickname'))) {
            $data['error'] = '昵称不能为空！';
            echo json_encode($data);
            die;
        }
        $userinfo = D('userinfo');
        $data = array(
            'sex' => I('sex'),
            'job' => I('job'),
            'intro' => I('signature'),
            'address' => I('area'),
            'nickname' => I('nickname'),
        );
        $where = array(
            'user_id' => session('user_id'),
        );
        $user = $userinfo->where($where)->find();
        if (!empty($user)) {
            $userinfo->where($where)->save($data);
            $data['error'] = '资料修改成功！';
            echo json_encode($data);
            die;
        } else {
            $data['error'] = '修改失败！';
            echo json_encode($data);
            die;
        }
    }

    /**
     * 用户修改密码
     *
     */
    public function user_pwd()
    {
        $mbase = new \Home\Controller\MbaseController();
        if (IS_POST) {
            if (I('pwd') == I('pwd2')) {

                if (empty(I('pwd'))) {
                    $this->error('密码不能为空！');
                    die;
                }
                if (strlen(I('pwd')) > 16 || strlen(I('pwd')) < 6) {
                    $this->error('密码必须为6-16位！');
                    die;
                }
                if (preg_match("/^\d*$/", I('pwd'))) {
                    $this->error('密码必须包含字母！');//全数字
                    die;
                }
                if (preg_match("/^[a-z]*$/i", I('pwd'))) {

                    $this->error('密码必须包含数字！');//全字母
                    die;
                }
                if (!preg_match("/^[a-z\d]*$/i", I('pwd'))) {
                    $this->error('密码只能包含数字和字母！');//有数字有字母
                    die;
                }

                $user = D('user');
                $where = array(
                    'user_id' => session('user_id'),
                );
                $newPwd = md5(I('pwd'));
                if ($user->where($where)->save(array('password' => $newPwd))) {
                    $this->success('修改成功！');
                    die;
                } else {
                    $this->error('修改失败！');
                    die;
                }

            } else {
                $this->error('两次密码不一致！');
                die;
            }
        }
        $this->display('user_pwd');
    }

    /**
     * 验证新旧密码是否一致
     */
    public function oldPwd()
    {
        $mbase = new \Home\Controller\MbaseController();
        if (!IS_AJAX) {
            $this->error('非法访问！');
            die;
        }
        $user = D('user');
        $where = array(
            'user_id' => session('user_id'),
        );
        $oldPwd = $user->where($where)->getField('password');
        if ($oldPwd == md5(I('pwdOld'))) {
            echo 'true';
            die;
        } else {
            echo 'false';
            die;
        }

    }

    /**
     * 用户邮箱验证
     */
    public function checkEmail()
    {
        $mbase = new \Home\Controller\MbaseController();
        $user_id = session('user_id');
        $userinfo = D('userinfo')->where(array('user_id' => $user_id))->find();
        $this->assign('userinfo', $userinfo);
        $this->display('checkEmail');
    }

    /**
     * 用户头像界面引入
     */
    public function user_face()
    {
        $mbase = new \Home\Controller\MbaseController();
        $userinfo = D('userinfo');
        $user_id = session('user_id');
        $where = array('user_id' => $user_id);
        $oldFace = $userinfo->where($where)->getField('face180');
        $this->assign('face', $oldFace);//展示用户上传的头像
        $this->display('user_face');
    }

    /**
     * 用户头像上传
     */
    public function uploadFace()
    {

        $upload = $this->_upFace('Face');
        echo json_encode($upload);
    }

    /**
     *
     * 头像上传的展示
     */
    public function setFace()
    {
        if (empty(session('username'))) {
            $this->error('请先登录！', U('Account/login'));
            die;
        }
        $userinfo = D('userinfo');
        $user_id = session('user_id');
        $where = array('user_id' => $user_id);
        $filed = array('face50', 'face80', 'face180', 'points');
        $oldFace = $userinfo->where($where)->field($filed)->find();
//        $oldFaces= FACE_IMG.substr($oldFace['face180'],1);
        $this->assign('face', $oldFace['face180']);
        $arr = array(//获取前端传过来的数据
            'face50' => I('small'),
            'face80' => I('mid'),
            'face180' => I('max'),
        );

        if ($userinfo->where($where)->save($arr)) {
            if (!empty($oldFace['face50'])) {
                //删除旧的头像
                unlink($oldFace['face50']);
                unlink($oldFace['face80']);
                unlink($oldFace['face180']);
            } else {
                //初次修改头像增加积分
                $arrs = array(
                    'points' => $oldFace['points'] + C('FACE'),
                );
                $userinfo->where($where)->save($arrs);
            }
            echo 1;

        } else {
            echo 0;
        }

    }

    /**
     * 头像处理
     */
    private function _upFace($path)
    {

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;
        $upload->rootPath = './';
        $upload->savePath = './Public/Uploads/' . $path . '/';
        $upload->saveName = array('uniqid', '');
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->autoSub = true;
        $upload->subName = array('date', 'Ymd');
        $info = $upload->upload();
        if ($info) {
            $origin = $upload->savePath . date('Ymd') . '/' . $info['Filedata']['savename'];//原图路径
            $max = $upload->savePath . date('Ymd') . '/' . 'max_' . $info['Filedata']['savename'];//大图
            $mid = $upload->savePath . date('Ymd') . '/' . 'mid_' . $info['Filedata']['savename'];//中图
            $small = $upload->savePath . date('Ymd') . '/' . 'small_' . $info['Filedata']['savename'];//小图
            //缩略图
            $image = new \Think\Image();
            $image->open($origin);
            $image->thumb(180, 180)->save($max);
            $image->thumb(80, 80)->save($mid);
            $image->thumb(50, 50)->save($small);
            unlink($origin);//删除原图 unlink 原生PHP的删除
            return array(
                'status' => 1,
                'path' => array(
                    'max' => $max,
                    'mid' => $mid,
                    'small' => $small,
                ),
            );
        } else {
            return array('status' => 0, 'msg' => $upload->getError());

        }

    }

    public function ce(){
        $a = "About us";
        $a = substr($a,1);
        echo $a;
    }

}