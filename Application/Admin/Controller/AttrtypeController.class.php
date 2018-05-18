<?php

namespace Admin\Controller;

use Think\Controller;

class AttrtypeController extends CommonController
{
    /**
     * 属性类型列表
     *
     */
    public function typeList()
    {
        $typeattr = M('typeattr');
        $count = $typeattr->count();
        $Page = new \Think\Page($count, 15);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page->show();
        $list = $typeattr->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
        $this->display('typelist');
    }

    /**
     * 添加类型
     */
    public function addType()
    {
        if (IS_POST) {
            $typeattr = D('typeattr');
            $data['type_name'] = I('type_name');
            $data['addtime'] = time();
            if (empty($data['type_name'])) {
                $this->error('类型名称不能为空！');
                die;
            }
            if ($typeattr->create()) {
                if ($typeattr->add($data)) {
                    $this->success('添加成功！', U('Attrtype/typelist'));
                    die;
                } else {
                    $this->error('添加失败！', U('Attrtype/addType'));
                }
            } else {
                $this->error('添加失败！', U('Attrtype/addType'));
            }
        }
        $this->display('addType');
    }

    /**
     *
     * 类型删除
     * 同时会删除相关的属性数据
     */
    public function delType($type_id)
    {
        $typeattr = D('typeattr');
        $_attrs = D('attrs')->where(['typeattr_id' => $type_id])->field('attr_id')->select();
        $attrsIds = array();
        foreach ($_attrs as $k => $v) {
            $attrsIds[] = $v['attr_id'];
        }
        $attrsIds = implode(',', $attrsIds);
        if ($typeattr->delete($type_id)) {
            D('attrs')->delete($attrsIds);
            $this->success('删除成功！', U('typelist'));
        } else {
            $this->error('删除失败!', U('typelist'));
        }
    }

    /**
     * 修改类型
     *
     */
    public function editType($type_id)
    {
        $typeattr = D('typeattr');
        if (IS_POST) {
            $data['type_id'] = I('type_id');
            $data['type_name'] = I('type_name');
            if (empty($data['type_name'])) {
                $this->error('类型名称不能为空！');
                die;
            }
            if ($typeattr->create($data)) {
                if (($typeattr->save()) !== FALSE) {
                    $this->success('修改成功！', U('typelist'));
                } else {
                    $this->error('修改失败!', U('typelist'));
                }
            } else {
                $this->error($typeattr->getError());
            }
            return;
        }
        $typeattrs = $typeattr->field('type_id,type_name')->find($type_id);
        $this->assign('typeattrs', $typeattrs);
        $this->display('editType');
    }

    /**
     * 属性列表
     *
     */
    public function attrValue()
    {
        $this->display('attrValue');
    }

    /**
     * 添加属性
     *
     */
    public function addValue()
    {
        $this->display('addValue');
    }


}