<?php

namespace Admin\Model;

use Think\Model;

class ArticleModel extends Model
{
    protected $_validate = array(
        array('article_title', 'require', '文章标题不能为空！', 1, regex, 3),
        array('article_title', '', '文章标题不能重复！', 0, 'unique', 1, regex, 3),
        array('article_keys', 'require', '关键字不能为空！', 1, regex, 3),
        array('article_content', 'require', '文章内容不能为空！', 1, regex, 3),
    );

    /**
     * 后置钩子函数，添加文章的同时获取文章的自增ID
     * 将获取到的属性以及相关数据保存到article_attr 表
     */
    public function _after_insert($data, $option)
    {
        $article_attr = M('article_attr');
        $attrAt = I('post.attr_id');
        $article_id = $data['article_id'];
        if ($attrAt) {
            foreach ($attrAt as $k => $v) {
                foreach ($v as $k1 => $v1) {
                    $article_attr->add([
                        'article_id' => $article_id,
                        'attrs_id' => $k,
                        'attrs_value' => $v1,
                    ]);
                }
            }
        }

    }

    /**
     * 文章修改
     * 处理修改属性的数据
     *
     */
    public function _after_update($data, $option)
    {
        $article_attr = M('article_attr');
        $attrAt = I('post.attr_id');
        $article_id = $data['article_id'];
        //删除文章原来的属性
        $article_attr->where(array('article_id' => $article_id))->delete();

        if ($attrAt) {
            foreach ($attrAt as $k => $v) {
                foreach ($v as $k1 => $v1) {
                    $article_attr->add([
                        'article_id' => $article_id,
                        'attrs_id' => $k,
                        'attrs_value' => $v1,
                    ]);
                }
            }
        }
    }
}