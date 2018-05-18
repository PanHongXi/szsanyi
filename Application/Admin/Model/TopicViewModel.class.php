<?php

namespace Admin\Model;

use Think\Model\ViewModel;

class TopicViewModel extends ViewModel
{
    public $viewFields = array(
        'topic' => array('topic_id', 'topic_title','release_time','attachment','keywords','content'),
        'cate' => array('cate_name','cate_id', '_on' => 'topic.cate_id=cate.cate_id'),
        'user' => array('username', '_on' => 'topic.member_id=user.user_id'),
    );
}