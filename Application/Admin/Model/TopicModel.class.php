<?php
namespace Admin\Model;

use Think\Model;

class TopicModel extends Model{
    protected $_validate = array(
        array('topic_title','require','标题不能为空！', 1, regex, 3), //默认情况下用正则进行验证
        array('keywords','require','关键字不能为空！', 1, regex, 3), //默认情况下用正则进行验证
        array('content','require','关键字不能为空！', 1, regex, 3), //默认情况下用正则进行验证

    );
}