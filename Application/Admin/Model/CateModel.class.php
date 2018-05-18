<?php
/**
 * Created by PhpStorm.
 * User: phx
 * Date: 2017/7/6
 * Time: 21:42
 */

namespace Admin\Model;

use Think\Model;

class CateModel extends Model
{
    protected $_validate = array(
        array('cate_name', 'require', '栏目名称不能为空！', 1, regex, 3),
        array('cate_name', '', '栏目名称不能重复！', 'unique', 1, regex, 3),
        array('cate_keys', 'require', '关键字不能为空！', 1, regex, 3),
        array('cate_describe', 'require', '栏目描述不能为空！', 1, regex, 3),
        array('cate_content', 'require', '栏目内容不能为空！', 1, regex, 3),
    );

    public function catetree()
    {
        $data = $this->order("cate_sort asc")->select();
        return $this->resort($data);
    }

    public function resort($data, $cate_parentid = 0, $level = 0)
    {
        //无限极分类 递归
        static $ret = array();
        foreach ($data as $k => $v) {
            if ($v["cate_parentid"] == $cate_parentid) {
                $v["level"] = $level;
                $ret[] = $v;
                $this->resort($data, $v["cate_id"], $level + 1);
            }
        }
        return $ret;

    }

    public function childid($cate_id)
    {
        $data = $this->select();
        return $this->getchildid($data, $cate_id);
    }

    public function getchildid($data, $parentid)
    {
        static $ret = array();
        foreach ($data as $k => $v) {
            if ($v['cate_parentid'] == $parentid) {
                $ret[] = $v['cate_id'];
                $this->getchildid($data, $v['cate_id']);
            }
        }
        return $ret;
    }

    //钩子函数，删除栏目以及栏目下面的子栏目
    public function _before_delete($opitions)
    {
        $childids = $this->childid($opitions['where']['cate_id']);
        $childids = implode(',', $childids);
        if ($childids) {
            $this->execute("delete from sc_cate where cate_id in($childids)");
        }
    }
}