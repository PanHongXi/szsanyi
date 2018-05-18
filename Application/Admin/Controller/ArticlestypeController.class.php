<?php
namespace Admin\Controller;

use Think\Controller;

class ArticlestypeController extends CommonController
{
    //文章类型列表
    public function lstType()
    {
        $typeattr = M('articles_type');
        $count = $typeattr->count();
        $Page = new \Think\Page($count, 15);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page->show();
        $list = $typeattr->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
        $this->display();
    }

    //文章类型添加
    public function addType()
    {
        if (IS_POST) {
            $typeattr = D('articles_type');
            $data['type_name'] = I('type_name');
            $data['time'] = time();

            if ($typeattr->create()) {
                if ($typeattr->add($data)) {
                    $this->success('添加成功！', U('Articlestype/lstType'));
                    die;
                } else {
                    $this->error('添加失败！', U('Articlestype/lstType'));
                }
            } else {
                $this->error('添加失败！', U('Articlestype/lstType'));
            }
        }
        $this->display('addType');
    }

    //文章类型修改
    public function editType($type_id)
    {
        $typeInfo = D('articles_type');
        if (IS_POST) {
            $data['type_id'] = I('type_id');
            $data['type_name'] = I('type_name');

            if ($typeInfo->create($data)) {
                if (($typeInfo->save()) !== FALSE) {
                    $this->success('修改成功！', U('lstType'));
                } else {
                    $this->error('修改失败!', U('lstType'));
                }
            } else {
                $this->error($typeInfo->getError());
            }
            return;
        }
        $info = $typeInfo->field('type_id,type_name')->find($type_id);
        $this->assign('info', $info);
        $this->display('editType');
    }

    //文章类型删除
    public function delType($type_id)
    {
        $typelist = D('articles_type');

        if ($typelist->delete($type_id)) {
            $this->success('删除成功！', U('lstType'));
        } else {
            $this->error('删除失败!', U('lstType'));
        }
    }

}