<?php

namespace Admin\Model;

use Think\Model;

class ArticlesModel extends Model
{
    protected $_validate = array(
        array('articles_title', 'require', '文章标题不能为空！', 1, regex, 3),
        array('articles_title', '', '文章标题不能重复！', 0, 'unique', 1, regex, 3),
        array('articles_keys', 'require', '关键字不能为空！', 1, regex, 3),
        array('articles_content', 'require', '文章内容不能为空！', 1, regex, 3),
    );
}