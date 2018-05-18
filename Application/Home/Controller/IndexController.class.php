<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends CommonController
{
    public function index()
    {
        $this->assign('curr',true);//首页高亮的处理，没有栏目id
        $this->display();
    }

}