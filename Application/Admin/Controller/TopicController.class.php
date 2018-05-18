<?php

namespace Admin\Controller;

use Think\Controller;

class TopicController extends CommonController
{
    /**
     * 话题管理列表
     */
    public function topic_lst()
    {
        $topicView = D('TopicView');
        $count = $topicView->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $list = $topicView->order('release_time desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display('topic_lst');
    }

    /**
     * 删除话题
     */
    public function topic_del($topic_id)
    {
        $topic_del = D('topic')->where(array('topic_id' => $topic_id))->find();
        $attachment = $topic_del['attachment'];
        if (D('topic')->delete($topic_id)) {
            $this->success('删除成功！', U('Topic/topic_lst'));
            unlink($attachment);
            die;
        } else {
            $this->error('删除失败！', U('Topic/topic_lst'));
            die;
        }
    }

    /**
     * 话题修改
     */
    public function topicEdit($topic_id)
    {

        $topic = D('Topic');
        if (IS_POST) {
            $data['topic_id'] = I('topic_id');
            $data['topic_title'] = I('topic_title');
            $data['keywords'] = I('keywords');
            $data['cate_id'] = I('cate_id');
            $data['content'] = I('content');
            $data['update_time'] = time();
            if ($_FILES['attachment']['tmp_name']) {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 8145728;
                $upload->rootPath = './';
                $upload->savePath = './Public/Uploads/Attachment/';
                $upload->saveName = array('uniqid', '');
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg', 'doc', 'docx', 'rar', 'zip');
                $upload->autoSub = true;
                $upload->subName = array('date', 'Ymd');
                $info = $upload->uploadOne($_FILES['attachment']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    $data['attachment'] = $info['savepath'] . $info['savename'];
                }

            }
            if ($topic->create($data)) {
                if ($topic->save() !== false) {
                    $this->success('话题修改成功！', U('Topic/topic_lst'));
                } else {
                    $this->error('话题修改失败！', U('Topic/topicEdit'));
                }
            } else {
                $this->error($topic->getError());
            }
            return;
        }
        $topicView = D('TopicView')->where(array('topic_id' => $topic_id))->find();
        $this->assign('topicView', $topicView);
        $cate = D('cate')->where(array('cate_parentid' => 4))->select();
        $this->assign('cateres', $cate);
        $this->display('topic_edit');
    }

    /**
     * 话题添加
    */
    public function topicAdd(){

        $topic = D('Topic');
        if (IS_POST) {
            $data['topic_title'] = I('topic_title');
            $data['keywords'] = I('keywords');
            $data['cate_id'] = I('cate_id');
            $data['content'] = I('content');
            $data['member_id'] = C('RELEASE');//Release
            $data['release_time'] = time();
            if ($_FILES['attachment']['tmp_name']) {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 8145728;
                $upload->rootPath = './';
                $upload->savePath = './Public/Uploads/Attachment/';
                $upload->saveName = array('uniqid', '');
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg', 'doc', 'docx', 'rar', 'zip');
                $upload->autoSub = true;
                $upload->subName = array('date', 'Ymd');
                $info = $upload->uploadOne($_FILES['attachment']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    $data['attachment'] = $info['savepath'] . $info['savename'];
                }
            }
            if ($topic->create($data)) {
                if ($topic->add() !== false) {
                    D('userinfo')->where(array('user_id'=>C('RELEASE')))->setInc('points',C('TOPIC'));
                    $this->success('话题添加成功！', U('Topic/topic_lst'));
                } else {
                    $this->error('话题添加失败！', U('Topic/topicEdit'));
                }
            } else {
                $this->error($topic->getError());
            }
            return;
        }

        $cate = D('cate')->where(array('cate_parentid' => 4))->select();
        $this->assign('cateres', $cate);
        $this->display('topic_add');
    }
}