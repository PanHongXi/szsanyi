<?php

namespace Home\Controller;

use Think\Controller;

class MemberController extends CommonController
{
    public function member_info()
    {
        $this->display();
    }
    /**
     * 初始化的构造方法
     * 这样写必须要调用它父类的构造方法
     */
    public function __construct()
    {
        parent::__construct();
        if (!$_SESSION['username']) {
            $this->error('请先登录！', U('Account/login'));
            die;
        }
        $this->memberinfo();

    }
    /**
     * 用户个人中心左侧的资料
     *
     */
    public function memberinfo()
    {

        $member_info = D('userinfo')->where(array('user_id' => session('user_id')))->find();
        $this->assign('memberInfo', $member_info);
    }



}