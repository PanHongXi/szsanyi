<?php

namespace Home\Controller;

class TopicController extends CommonController
{
    /**
     * 话题的列表
     */
    public function index()
    {
        $cate_id = I('cate_id');
        $scateid = I('scateid');
        $state = I('state');
        //处理全部评论的高亮状态以及处理全部的话题cate_id
        if (!$scateid) {
            $allcateId = D('cate')->where(array('cate_parentid' => $cate_id))->field('cate_id')->select();//获取所有的话题cata_id
            foreach ($allcateId as $k => $v) {
                $scateid[] = $v['cate_id'];
            }
            $scateid[] = $cate_id;
            $scateid = implode(',', $scateid);
        }
        $scateres = D('cate')->where(array('cate_parentid' => $cate_id))->select();
        //处理评论数最新，最热，等待回复的状态
        if ($state == 'hot') {
            $order = 'click desc';
        } elseif ($state == 'wait') {
            $map['comment'] = array('eq', 0);
        } else {
            $order = 'topic_id desc';
        }
        $map['cate_id'] = array('in', $scateid);
        $topic = D('topic');

        //分页处理
        $topicCount = $topic->where($map)->count();
        $Page = new \Think\Page($topicCount, 15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page->show();// 分页显示输出
        $topicRes = $topic->where($map)->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();


        $userInfo = D('userinfo');
        $comment = D('comment');
        foreach ($topicRes as $k => $v) {
            $topicRes[$k]['userinfo'] = $userInfo->where(array('user_id' => $v['member_id']))->field('user_id,face50,nickname')->find();//获取话题发表的用户信息
            $topicRes[$k]['newcomment'] = $comment->where(array('article_id' => $v['topic_id']))->field('content,member_id,time')->order('time desc')->find();//获取最新的话题评论内容
            $topicRes[$k]['commenter'] = $userInfo->where(array('user_id' => $topicRes[$k]['newcomment']['member_id']))->field('user_id,face50,nickname')->find();//获取最新评论的用户信息
        }

        //一周最新热门话题的数据处理
        $topicWeekres = $topic->field('topic_id,topic_title,cate_id,click,comment,release_time')->order('comment desc')->limit(5)->select();
        $topicWeek = array();
        foreach ($topicWeekres as $k => $v) {
            $timeWeek = (time() - $v['release_time']) < (7 * 24 * 3600);
            if ($timeWeek) {
                $topicWeek[] = $v;
            }
        }
        $this->tags();//调用tags标签的方法
        $this->assign(array(
            'topicRes' => $topicRes,
            'scateres' => $scateres,
            'scateid' => $scateid,
            'state' => $state,
            'current' => $cate_id,//处理高亮状态
            'topicWeek' => $topicWeek,
            'page' => $show,
            'topicCount' => $topicCount,
        ));
        $this->display();
    }


    /**
     *
     * 点击标签搜索
     *
     */
    public function tagsArr()
    {
        $topic = D('topic');
        $tag = I('tags');
        $map['keywords'] = array('LIKE', '%'.$tag.'%');
        $topicRes = $topic->where($map)->order('topic_id desc')->select();
        $userInfo = D('userinfo');
        $comment = D('comment');
        foreach ($topicRes as $k => $v) {
            $topicRes[$k]['userinfo'] = $userInfo->where(array('user_id' => $v['member_id']))->field('user_id,face50,nickname')->find();//获取话题发表的用户信息
            $topicRes[$k]['newcomment'] = $comment->where(array('article_id' => $v['topic_id']))->field('content,member_id,time')->order('time desc')->find();//获取最新的话题评论内容
            $topicRes[$k]['commenter'] = $userInfo->where(array('user_id' => $topicRes[$k]['newcomment']['member_id']))->field('user_id,face50,nickname')->find();//获取最新评论的用户信息
        }
        //一周最新热门话题的数据处理
        $topicWeekres = $topic->field('topic_id,topic_title,cate_id,click,comment,release_time')->order('comment desc')->limit(5)->select();
        $topicWeek = array();
        foreach ($topicWeekres as $k => $v) {
            $timeWeek = (time() - $v['release_time']) < (7 * 24 * 3600);
            if ($timeWeek) {
                $topicWeek[] = $v;
            }
        }
        $this->tags();//调用tags标签的方法
        $this->assign(array(
            'topicRes' => $topicRes,
            'current' => I('cate_id'),//处理高亮状态
            'topicWeek' => $topicWeek,
            'tag' => $tag,
        ));
        $this->display('tagsArr');
    }


    /**
     * 获取推荐的标签
     */
    public function tags()
    {
        $tags = C('TAGS');
        $tagsRes = array_filter(explode(',', $tags));
        $this->assign('tagsRes', $tagsRes);

    }


    public function login()
    {
        if (!$_SESSION['username']) {
            $this->error('请先登录！', U('Account/login'));
            die;
        }
    }

    /**
     * 保存发布话题的数据
     */
    public function topicPost()
    {
        if (!IS_AJAX || !$_SESSION['username']) {
            $this->error('非法操作！', U('Account/login'));
            die;
        }
        if (empty(I('code'))) {
            $da['error'] = '验证码不能为空！';
            echo json_encode($da);
            die;
        }
        $code = $this->check_verify(I('code'));//调用验证码的验证方法
        if (IS_POST) {
            if ($code) {
                $data['cate_id'] = I('cat_id');
                $data['attachment'] = I('file_path');
                $data['topic_title'] = I('title');
                $data['content'] = I('content');
                $data['keywords'] = str_replace('×', '', I('tags'));
                $data['member_id'] = $_SESSION['user_id'];
                $data['release_time'] = time();
                if (D('topic')->add($data)) {
                    $da['error'] = '';
                    D('userinfo')->where(array('user_id' => $_SESSION['user_id']))->setInc('points', C('TOPIC'));
                    echo json_encode($da);

                    die;
                } else {
                    $da['error'] = '话题发布失败';
                    echo json_encode($da);
                    die;
                }
            } else {
                $da['error'] = '验证码错误!';
                echo json_encode($da);
                die;
            }
        } else {
            $this->error('非法操作！', U('Topic/addTopic'));
            die;
        }
    }

    /**
     * 发布话题
     */
    public function addTopic()
    {
        $topiccateRes = D('cate')->where(array('cate_parentid' => I('cate_id')))->select();
        $this->login();
        $this->tags();//调用tags标签的方法
        $topic = D('topic');
        $newTopic = $topic->newTopic(); //调用最新话题
        $this->assign(array(
            'current' => I('cate_id'),
            'topiccateRes' => $topiccateRes,
            'newTopic' => $newTopic,// 调用最新话题
        ));
        $this->display('addTopic');
    }

    /**
     * 生成验证码
     */
    public function checkCode()
    {
        $config = array(
            'fontSize' => 35,    // 验证码字体大小
            'length' => 4,     // 验证码位数
            'useNoise' => false, // 关闭验证码杂点
            'useCurve' => false, // 关闭验证码杂点
            'useImgBg' => true, // 关闭验证码杂点
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }

    /**
     * 验证验证码
     */
    function check_verify($code, $id = '')
    {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

    /**
     * 用户附件上传
     */
    public function uploadFile()
    {

        $upload = $this->_upFile('Attachment');
        echo json_encode($upload);

    }

    /**
     *
     * 附件上传的展示
     *
     * 保存上传附件
     */
    public function setFile()
    {
        $userinfo = D('userinfo');
        $user_id = session('user_id');
        $where = array('user_id' => $user_id);
        $oldFace = $userinfo->where($where)->find();
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
     * 附件上传处理
     */
    private function _upFile($path)
    {

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 8145728;
        $upload->rootPath = './';
        $upload->savePath = './Public/Uploads/' . $path . '/';
        $upload->saveName = array('uniqid', '');
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg', 'doc', 'docx', 'rar', 'zip');
        $upload->autoSub = true;
        $upload->subName = array('date', 'Ymd');
        $info = $upload->upload();
        if ($info) {
            $filePath = $upload->savePath . date('Ymd') . '/' . $info['Filedata']['savename'];//原文件路径
            return array(
                'status' => 1,
                'fileName' => $info['Filedata']['savename'],//文件名称
                'filePath' => $filePath,//文件路径
            );
        } else {
            return array('status' => 0, 'msg' => $upload->getError());

        }

    }

}