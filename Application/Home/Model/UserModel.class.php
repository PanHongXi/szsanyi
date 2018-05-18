<?php

namespace Home\Model;

use Think\Model\RelationModel;

class UserModel extends RelationModel
{
    /**
     * userinfo 要关联的表名
     *
    */
    protected $_link = array(
        'userinfo' => array(
            'mapping_type' => self::HAS_ONE,//关联的关系一对一
            'foreign_key' => 'user_id',//关联的外键(userinfo 表)
            'as_fields'=>'points,login_time,login_ip',
        ),
    );
}