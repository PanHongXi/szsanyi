<?php

namespace Home\Controller;

use Think\Controller;

class CommonController extends Controller
{
    /**
     * 初始化的构造方法
     * 这样写必须要调用它父类的构造方法
     */
    public function __construct()
    {
        parent::__construct();
        $this->nav();
        $this->curr();

        //判断是否存在过登录，如果有就会直接登录
        if (isset($_COOKIE['sucai'])) {
            $value = explode('|', encrypt($_COOKIE['sucai']));
            if ($value[1] == get_client_ip()) {
                session('user_id', $value[0]);
                session('username', $value[2]);
            }
        }
    }

    /**
     * 获取头部的导航信息
     */
    public function nav()
    {
        $cate = D('cate');
        $where = array(
            'cate_parentid' => 0
        );
        $cateRes = $cate->where($where)->order('cate_sort asc')->select();
        $this->assign('cateRes', $cateRes);

    }

    /**
     * 栏目高亮状态
     *
     * 在头部栏目的样式里面做处理
     * 判断是否有栏目id传递过去，判断高亮的样式状态
     */
    public function curr()
    {
        $cate_id = I('cate_id');
        $cates = D('cate')->field('cate_id,cate_parentid')->find($cate_id);
        $topId = $cates['cate_parentid'];
        $this->assign(array(
            'current' => $cate_id,
            'topId' => $topId,
        ));
    }

}