<?php
namespace Admin\Model;

use Think\Model\ViewModel;

class ArticleViewModel extends ViewModel
{
    public $viewFields = array(
        'article' => array('article_id', 'article_author', 'article_title', '_type' => 'LEFT'),
        'cate' => array('cate_name', '_on' => 'article.cate_id=cate.cate_id', '_type' => 'RIGHT'),
    );
}