<?php
/**
 * Created by PhpStorm.
 * User: phx
 * Date: 2017/6/29
 * Time: 16:29
 */

namespace Admin\Controller;

use Think\Controller;

class AdminController extends CommonController
{
    public function adminlist()
    {
        $admin = M('admin');
        $count = $admin->count();
        $Page = new \Think\Page($count, 20);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page->show();
        $list = $admin->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function adminadd()
    {

        if (IS_POST) {
            $admin = D('admin');
            $data['a_name'] = I('a_name');
            $data['a_password'] = md5(md5(I('post.a_password')));
            if ($admin->create()) {
                if ($admin->add($data)) {
                    $this->success('添加管理员成功！', U('adminlist'));
                } else {
                    $this->error('添加管理员失败!');
                }
            } else {
                $this->error($admin->getError('添加管理员失败!'));
            }
            return;

        }

        $this->display();
    }

    public function admindel($a_id)
    {
        $admin = D('Admin');
        if ($a_id == 1) {
            $this->error('您无权删除超级管理员！', U('adminlist'));
        } else {
            if ($admin->delete($a_id)) {
                $this->success('删除成功！', U('adminlist'));
            } else {
                $this->error('删除失败!', U('adminlist'));
            }
        }

    }

    public function adminedit($a_id)
    {
        $admin = D('Admin');
        if (IS_POST) {
            $data['a_id'] = I('a_id');
            $data['a_name'] = I('a_name');
            if (I('a_password')) {
                $data['a_password'] = md5(md5(I('a_password')));
            }
            if ($admin->create($data)) {
                if (($admin->save()) !== FALSE) {
                    $this->success('修改成功！', U('adminlist'));
                } else {
                    $this->error('修改失败!', U('adminlist'));
                }
            } else {
                $this->error($admin->getError());
            }
            return;
        }
        $admins = $admin->field('a_id,a_name')->find($a_id);
        $this->assign('admins', $admins);
        $this->display();
    }

    public function loginOut()
    {
        session(null); // 清空当前的session
        $this->success('退出成功！',U('Login/login'));
    }
}