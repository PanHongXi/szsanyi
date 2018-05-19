<?php

namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller
{
    public function __construct()
    {
        parent::__construct();//继承父类
        if (!session('a_id')) {
            $this->error('请先登录系统', U('Login/login'));
        }
    }

    /**
     * 获取当前操作的控制器以及方法
     */
    public function _initialize()
    {
        $con = CONTROLLER_NAME;//获取当前的控制器
        $action = ACTION_NAME;//获取当前的控制器的方法
        $this->assign('con', $con);
        $this->assign('action', $action);
    }

}