<?php
namespace Admin\Controller;

use Think\Controller;

class LinkController extends CommonController
{
    public function linkList()
    {
        $link = D('Link');

        $count = $link->count();
        $Page = new \Think\Page($count, 20);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page->show();
        $list = $link
            ->order('id desc')
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $this->assign('lists', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function linkAdd()
    {
        if (IS_POST) {
            $link = D('Link');
            $data['link_title'] = I('link_title');
            $data['link_desc'] = I('link_desc');
            $data['link_status'] = I('link_status');
            $data['link_content'] = I('link_content');
            $data['addtime'] = time();

            //链接处理
            if (false !== stripos(I('link_url'), 'http://')) {
                $data['link_url'] = I('link_url');
            } else {
                $data['link_url'] = 'http://' . I('link_url');
            }

            //处理上传的图片
            if ($_FILES['link_pic']['tmp_name'] != '') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath = './Public/Uploads/link/'; // 设置附件上传根目录
                $upload->rootPath = './'; // 设置附件上传根目录
                $info = $upload->uploadOne($_FILES['link_pic']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {
                    // 上传成功 获取上传文件信息
                    $data['Link_pic'] = $info['savepath'] . $info['savename'];
                }
            }

            if ($link->create()) {
                if ($link->add($data)) {
                    $this->success('添加链接成功！', U('Link/linkList'));
                } else {
                    $this->error('添加链接失败！', U('Link/linkList'));
                }
            } else {
                $this->error($link->getError());
            }
        }
        $this->display();
    }

    public function linkEdit()
    {
        $link = D('Link');
        $id = I('id');
        if (IS_POST) {
            $data['id'] = I('id');
            $data['link_title'] = I('link_title');
            $data['link_desc'] = I('link_desc');
            $data['link_status'] = I('link_status');
            $data['link_content'] = I('link_content');
            $data['addtime'] = time();

            //链接处理
            if (false !== stripos(I('link_url'), 'http://')) {
                $data['link_url'] = I('link_url');
            } else {
                $data['link_url'] = 'http://' . I('link_url');
            }

            //处理上传的图片
            if ($_FILES['link_pic']['tmp_name'] != '') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath = './Public/Uploads/link/'; // 设置附件上传根目录
                $upload->rootPath = './'; // 设置附件上传根目录
                $info = $upload->uploadOne($_FILES['link_pic']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {
                    // 上传成功 获取上传文件信息
                    $data['Link_pic'] = $info['savepath'] . $info['savename'];
                }
            }

            if ($link->create($data)) {
                if ($link->save() !== false) {
                    $this->success('修改链接成功！', U('Link/linkList'));
                } else {
                    $this->error('修改链接失败！', U('Link/linkList'));
                }
            } else {
                $this->error($link->getError());
            }

        }

        $info = $link->where(array('id' => $id))->find();
        $this->assign('info', $info);
        $this->display();
    }

    public function linkDel($id)
    {
        $brief = M('Link');
        if ($brief->delete($id)) {
            $this->success('删除成功！', U('Link/linkList'));
        } else {
            $this->error('删除失败！', U('Link/linkList'));
        }
    }
}