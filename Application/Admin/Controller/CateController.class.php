<?php
/**
 * Created by PhpStorm.
 * User: phx
 * Date: 2017/7/5
 * Time: 22:22
 */

namespace Admin\Controller;

use Think\Controller;
use Think\Db;

class CateController extends CommonController
{
    public function catelist()
    {
        $cate = D('cate');
        $cateres = $cate->catetree();
        $this->assign('cateres', $cateres);
        $this->display();
    }

//排序
    public function catesort()
    {
        $cate = D('Cate');
        foreach ($_POST as $id => $sort) {
            $cate->where("cate_id=$id")->setfield('cate_sort', $sort);
        }
        $this->success('排序成功！', U('Cate/catelist'));

    }

    public function cateadd()
    {
        $cate = D('Cate');
        if (IS_POST) {
            $data['cate_name'] = I('cate_name');
            $data['cate_keys'] = I('cate_keys');
            $data['cate_describe'] = I('cate_describe');
            $data['cate_parentid'] = I('cate_parentid');
            $data['cate_type'] = I('cate_type');
            $data['cate_type'] = I('cate_type');
            $data['cate_content'] = I('cate_content');
            $data['show'] = I('show');

            if ($_FILES['cate_pic']['tmp_name']) {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath = './Public/Uploads/'; // 设置附件上传根目录
                $upload->rootPath = './'; // 设置附件上传根目录
                $info = $upload->uploadOne($_FILES['cate_pic']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    $data['cate_pic'] = $info['savepath'] . $info['savename'];
                }
            }
            if ($cate->create($data)) {
                if ($cate->add()) {
                    $this->success('添加栏目成功！', U('Cate/catelist'));
                } else {
                    $this->error('添加栏目失败！', U('Cate/cateadd'));
                }
            } else {
                $this->error($cate->getError());
            }
            return;

        }
        $cate = D('cate');
        $cateres = $cate->catetree();
        $this->assign('cateres', $cateres);
        $this->display();
    }

    public function cate_del($cate_id)
    {
        $cate = D('Cate');
        if ($cate->delete($cate_id)) {
            $this->success('删除成功！', U('Cate/catelist'));
        } else {
            $this->error('删除失败！', U('Cate/catelist'));
        }
    }

    public function cateedit($cate_id)
    {
        $cate = D('Cate');
        if (IS_POST) {
            $data['cate_id'] = I('cate_id');
            $data['cate_name'] = I('cate_name');
            $data['cate_keys'] = I('cate_keys');
            $data['cate_describe'] = I('cate_describe');
            $data['cate_parentid'] = I('cate_parentid');
            $data['cate_type'] = I('cate_type');
            $data['cate_type'] = I('cate_type');
            $data['cate_content'] = I('cate_content');
            $data['show'] = I('show');
            if ($_FILES['cate_pic']['tmp_name']) {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath = './Public/Uploads/'; // 设置附件上传根目录
                $upload->rootPath = './'; // 设置附件上传根目录
                $info = $upload->uploadOne($_FILES['cate_pic']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    $data['cate_pic'] = $info['savepath'] . $info['savename'];
                }

            }
            if ($cate->create($data)) {
                if ($cate->save() !== false) {
                    $this->success('修改栏目成功！', U('Cate/catelist'));
                } else {
                    $this->error('修改栏目失败！', U('Cate/cateadd'));
                }
            } else {
                $this->error($cate->getError());
            }
            return;

        }
        $cates = $cate->find($cate_id);
        $this->assign("cate", $cates);
        $cateres = $cate->catetree();
        $this->assign("cateres", $cateres);
        $this->display();

    }
}