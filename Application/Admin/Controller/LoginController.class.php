<?php
/**
 * Created by PhpStorm.
 * User: phx
 * Date: 2017/6/28
 * Time: 23:01
 */

namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function login()
    {
        $admin = D('Admin');
        if (IS_POST) {
            if ($admin->create($_POST,4)){
                if ($admin->login()) {
                    $this->success('登录成功！',U('Index/Index'));

                }else{
                    $this->error('用户名或者密码错误！',U('Login/login'));
                }

            }else{
                $this->error($admin->getError());
            }
            return;
        }

        $this->display();
    }

    public function verify()
    {
        $config = array(
            'fontSize' => 25,
            'length' => 4,
            'useNoise' => false,
            'bg' => array(92, 189, 170),
            'useCurve' => false,
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }

}