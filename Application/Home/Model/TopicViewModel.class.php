<?php
namespace Home\Model;
use Think\Model\ViewModel;
class TopicViewModel extends ViewModel {
    public $viewFields = array(
        'Topic'=>array('topic_title','topic_id','content','keywords','release_time','comment','collect','attachment','click','cate_id'),
        'Userinfo'=>array('face50','nickname', '_on'=>'Topic.member_id=Userinfo.user_id'),
//        'Comment'=>array('comment_id','content','time','member_id', 'article_id','type','pid','pidsub','_on'=>'Topic.topic_id=Comment.article_id'),
//      'Comment'=>array('comment_id'=>'ccomment_id','content'=>'ccontent','time'=>'ctime','member_id'=>'cmember_id', 'article_id'=>'carticle_id','type'=>'ctype','pid'=>'cpid','pidsub'=>'cpidsub','_on'=>'Topic.topic_id=Comment.article_id'),

    );
}