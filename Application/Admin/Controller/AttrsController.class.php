<?php

namespace Admin\Controller;

use Think\Controller;

class AttrsController extends CommonController
{


    /**
     * 属性列表
     *
     */
    public function attrValue()
    {
        $typeattr = M('attrs a');
        $count = $typeattr->count();
        $Page = new \Think\Page($count, 15);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page->show();
        $list = $typeattr->join('sc_typeattr t on a.typeattr_id = t.type_id')->field('a.*,t.*')->order('a.typeattr_id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display('attrValue');
    }

    /**
     * 添加属性
     *
     */
    public function addValue()
    {
        if (IS_POST) {
            $attrs = D('attrs');
            $data['attr_name'] = I('attr_name');
            $data['attr_value'] = str_replace('，', ',', I('attr_value'));
            $data['typeattr_id'] = I('typeattr_id');
            $data['addtime'] = time();
            if (empty($data['attr_name'])) {
                $this->error('属性名称不能为空！');
                die;
            }
            if (empty($data['attr_value'])) {
                $this->error('属性值不能为空！');
                die;
            }
            if ($attrs->create()) {
                if ($attrs->add($data)) {
                    $this->success('添加成功！', U('Attrs/attrValue'));
                    die;
                } else {
                    $this->error('添加失败！', U('Attrs/addValue'));
                }
            } else {
                $this->error('添加失败！', U('Attrs/addValue'));
            }
        }

        $typeattr = D('typeattr')->select();
        $this->assign('typeattr', $typeattr);
        $this->display('addValue');
    }

    /**
     *
     * 类型属性
     */
    public function delAttr($attr_id)
    {
        $typeattr = D('attrs');
        if ($typeattr->delete($attr_id)) {
            $this->success('删除成功！', U('attrValue'));
            die;
        } else {
            $this->error('删除失败!', U('attrValue'));
            die;
        }
    }

    /**
     * 修改属性
     *
     */
    public function editAttr($attr_id)
    {
        $attrs = D('attrs');
        if (IS_POST) {
            $data['attr_id'] = I('attr_id');
            $data['attr_name'] = I('attr_name');
            $data['attr_value'] = str_replace('，', ',', I('attr_value'));
            $data['typeattr_id'] = I('type_id');

            if (empty($data['attr_name'])) {
                $this->error('属性名称不能为空！');
                die;
            }
            if (empty($data['attr_value'])) {
                $this->error('属性值不能为空！');
                die;
            }
            if ($attrs->create($data)) {
                if (($attrs->save()) !== FALSE) {
                    $this->success('修改成功！', U('attrValue'));
                } else {
                    $this->error('修改失败!', U('attrValue'));
                }
            } else {
                $this->error($attrs->getError());
            }
            return;
        }
        $attrress = $attrs->where(array('attr_id' => $attr_id))->find();
        $typeattr = D('typeattr')->select();
        $this->assign(array(
            'typeattr' => $typeattr,
            'attrs' => $attrress,
        ));
        $this->display('editAttr');
    }

}