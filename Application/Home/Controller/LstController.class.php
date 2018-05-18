<?php

namespace Home\Controller;

use Think\Controller;

class LstController extends CommonController
{
    public function index($cate_id)
    {
        $Article = M('Article');
        $cate = D('cate')->where(array('cate_id' => $cate_id))->field('cate_name')->find();
        $count = $Article->where(array('cate_id' => $cate_id))->count();
        $Page = new \Think\Page($count, 2);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page->show();
        $list = $Article->where(array('cate_id' => $cate_id))->order('article_time desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        //当前页码
        $curPage = I('p');
        if (!$curPage) {
            $curPage = 1;
        }
        //总页码
        $totalPage = $Page->totalPages;

        //上一页连接
        $prevPage = '';
        $nextPage = '';
        $http = CHECK_CODE;
        if ($curPage == 1) {
            $prevPage = 'javascript:void(0);';
        } else {
            $p = $curPage - 1;
            $prevPage = "$http/Home/Lst/index/cate_id/$cate_id/p/$p";
        }
        //下一页连接
        if ($curPage == $totalPage) {
            $nextPage = "javascript:void(0);";
        } else {
            $pp = $curPage + 1;
            $nextPage = "$http/Home/Lst/index/cate_id/$cate_id/p/$pp";
        }
        $this->assign(array(
            'article' => $list,
            'page' => $show,
            'count' => $count,
            'cateName' => $cate,
            'curPage' => $curPage,
            'totalPage' => $totalPage,
            'prevPage' => $prevPage,
            'nextPage' => $nextPage,
            'cate_id' => $cate_id,
        ));
        $this->display();
    }

}