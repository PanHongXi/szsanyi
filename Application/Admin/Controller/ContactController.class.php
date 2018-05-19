<?php
namespace Admin\Controller;

use Think\Controller;

class ContactController extends CommonController
{
    public function lst()
    {
        $contact = D('Contact');
        $count = $contact->count();
        $Page = new \Think\Page($count, 20);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page->show();
        $list = $contact->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }

    public function add()
    {
        if (IS_POST) {
            $contact = D('Contact');
            $data['phone'] = I('phone');
            $data['qq'] = I('qq');
            $data['wechat'] = I('wechat');
            $data['fax'] = I('fax');
            $data['email'] = I('email');
            $data['address'] = I('address');
            $data['faddress'] = I('faddress');
            $data['people'] = I('people');

            if ($contact->create())
            {
                if ($contact->add($data))
                {
                    $this->success('添加简介成功！', U('Contact/lst'));
                }
                else
                {
                    $this->error('添加简介失败！', U('Contact/lst'));
                }
            }
            else
            {
                $this->error($contact->getError());
            }
        }
        $this->display();
    }

    public function edit()
    {
        $contact = D('Contact');
        if (IS_POST) {
            $data['id'] = I('id');
            $data['phone'] = I('phone');
            $data['qq'] = I('qq');
            $data['wechat'] = I('wechat');
            $data['fax'] = I('fax');
            $data['email'] = I('email');
            $data['address'] = I('address');
            $data['faddress'] = I('faddress');
            $data['people'] = I('people');

            if ($contact->create($data))
            {
                if ($contact->save() !== false)
                {
                    $this->success('修改成功！', U('Contact/lst'));
                } else {
                    $this->error('修改失败！', U('Contact/lst'));
                }
            } else {
                $this->error($contact->getError());
            }
        }

        $id = I('id');
        $info = $contact->where(array('id' => $id))->find();
        $this->assign('info', $info);
        $this->display();
    }

    public function del($id)
    {
        $Contact = M('Contact');
        if ($Contact->delete($id)) {
            $this->success('删除成功！', U('Contact/lst'));
        } else {
            $this->error('删除失败！', U('Contact/lst'));
        }
    }
}