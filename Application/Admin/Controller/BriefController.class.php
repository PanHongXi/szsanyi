<?php

namespace Admin\Controller;

use think\Controller;

class BriefController extends CommonController
{
    public function lst()
    {
        $brief = D('Brief');

        //搜索
        $brief_title = I("get.brief_title");
        $where["brief_title"] = array("like", "%{$brief_title}%");

        $count = $brief->where($where)->count();
        $Page = new \Think\Page($count, 20);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page->show();
        $list = $brief
            ->order('brief_id desc')
            ->where($where)
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $this->assign('lists', $list);
        $this->assign('page', $show);

        $this->display();
    }

    public function add()
    {
        if (IS_POST) {
            $brief = D('Brief');
            $data['brief_title'] = I('brief_title');
            $data['brief_author'] = I('brief_author');
            $data['brief_keys'] = I('brief_keys');
            $data['brief_desc'] = I('brief_desc');
            $data['brief_reco'] = I('brief_reco');
            $data['brief_content'] = I('brief_content');
            $data['type'] = I('type');
            $data['brief_time'] = time();

            //处理上传的图片
            if ($_FILES['brief_pic']['tmp_name'] != '') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath = './Public/Uploads/brief/'; // 设置附件上传根目录
                $upload->rootPath = './'; // 设置附件上传根目录
                $info = $upload->uploadOne($_FILES['brief_pic']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {
                    // 上传成功 获取上传文件信息
                    $data['brief_pic'] = $info['savepath'] . $info['savename'];
                }
            }

            if ($brief->create()) {
                if ($brief->add($data)) {
                    $this->success('添加简介成功！', U('Brief/lst'));
                } else {
                    $this->error('添加简介失败！', U('Brief/lst'));
                }
            } else {
                $this->error($brief->getError());
            }
        }
        $this->display();
    }

    /**
     *
     * 文章修改
     */
    public function edit()
    {
        $brief = D('Brief');
        $brief_id = I('brief_id');
        $briefInfo = $brief->where(array('brief_id' => $brief_id))->find();
        if (IS_POST) {
            $brief = D('Brief');
            $data['brief_id'] = I('brief_id');
            $data['brief_title'] = I('brief_title');
            $data['brief_author'] = I('brief_author');
            $data['brief_keys'] = I('brief_keys');
            $data['brief_desc'] = I('brief_desc');
            $data['brief_reco'] = I('brief_reco');
            $data['brief_content'] = I('brief_content');
            $data['type'] = I('type');
            $data['brief_time'] = time();

            //处理上传的图片
            if ($_FILES['brief_pic']['tmp_name'] != '') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath = './Public/Uploads/brief/'; // 设置附件上传根目录
                $upload->rootPath = './'; // 设置附件上传根目录
                $info = $upload->uploadOne($_FILES['brief_pic']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {
                    // 上传成功 获取上传文件信息
                    $data['brief_pic'] = $info['savepath'] . $info['savename'];
                }
            }

            if ($brief->create($data)) {
                if ($brief->save() !== false) {
                    $this->success('修改简介成功！', U('Brief/lst'));
                } else {
                    $this->error('修改简介失败！', U('Brief/lst'));
                }
            } else {
                $this->error($brief->getError());
            }

            return;
        }

        $this->assign(array(
            'briefInfo' => $briefInfo,
        ));

        $this->display();
    }

    /**
     * 删除文章
     */
    public function del($brief_id)
    {
        $brief = M('Brief');
        if ($brief->delete($brief_id)) {
            $this->success('删除成功！', U('Brief/lst'));
        } else {
            $this->error('删除失败！', U('Brief/lst'));
        }
    }
}