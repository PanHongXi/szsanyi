<?php
namespace Admin\Model;

use Think\Model;

class ContactModel extends Model
{
    protected $_validate = array(
        array('people', 'require', '联系人不能为空！', 1, regex, 3),
        array('phone', 'require', '号码不能为空！', 1, regex, 3),
        array('phone','/^1[3|7|5|8][0-9]\d{4,8}$/','手机号码错误！','0','regex',1),
        array('email','email','email格式错误'),
    );
}