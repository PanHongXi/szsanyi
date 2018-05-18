<?php

namespace Home\Controller;
use Think\Controller;

class AccountController extends CommonController{
    public function register(){
        $this->display('Account/Register');
    }
    public function login(){

        $this->display('Account/Login');
    }
    //退出登录
    public function loginOut(){
        session(null);
        session('[destroy]'); // 销毁session
        setcookie('sucai','',time()-1,'/');//清楚cookie
        redirect(U('Index/index'));//退出登陆后的跳转
    }
}