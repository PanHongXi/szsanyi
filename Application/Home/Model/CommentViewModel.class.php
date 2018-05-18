<?php

namespace Home\Model;

use Think\Model\ViewModel;

class CommentViewModel extends ViewModel
{
    public $viewFields = array(
        'Comment' => array('comment_id', 'content', 'time','member_id','article_id','type','pid','pidsub','tid','tuser','touid'),
        'Userinfo' => array('face50','user_id','nickname', '_on' => 'Comment.member_id=Userinfo.user_id'),
    );
}