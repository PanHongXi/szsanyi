<?php
/**
 * Created by PhpStorm.
 * User: phx
 * Date: 2017/6/29
 * Time: 18:29
 */

namespace Admin\Model;

use Think\Model;

class AdminModel extends Model
{
    //新增管理员验证
    protected $_validate = array(
        array('a_name', 'require', '管理员名称不能为空！',1,regex,1),
        array('a_name', 'require', '管理员名称不能为空！',1,regex,4),
        array('a_password', 'require', '管理员密码不能为空！',1,regex,1),
        array('a_password', 'require', '管理员密码不能为空！',1,regex,4),
        array('verify', 'verify', '验证码不正确！',1,callback,4),
        array('a_name', '', '管理员名称已经存在！', 0, 'unique', 1,regex,1),
    );
    //登录验证
    public function login(){
        $password = $this->a_password;
        $a_name = $this->a_name;
        if ($info=$this->where("a_name='$a_name'")->find()) {
           if ($info) {
             if ($info['a_password'] == md5(md5($password))) {
                 session('a_id',$info['a_id']);
                 session('a_name',$info['a_name']);
                  return true;
             }else{
                 return false;
             }
           }else{
               return false;
           }
        }else{
            return false;
        }

    }
    //验证码验证
    public function verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }


}