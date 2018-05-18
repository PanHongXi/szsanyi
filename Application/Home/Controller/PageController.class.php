<?php
/**
 * Created by PhpStorm.
 * User: HSPHX
 * Date: 2017/8/15
 * Time: 21:28
 */

namespace Home\Controller;
use Think\Controller;
class PageController extends CommonController
{
    /**
     * 帮助中心
     * 获取子栏目
     *
    */
    public function index()
    {
        $cate_id = I('cate_id');//获取父级栏目id
        $this->getchild($cate_id);
        $this->display();
    }
    //获取子栏目id
    public function getchild($cate_id){
        $cate = D('cate');
        $cateRes = $cate->field('cate_parentid,cate_name')->find($cate_id);
        $pid = $cateRes['cate_parentid'];
        if ($pid == 0) {//判断是否是顶级栏目
            //查找子级栏目id
            $where = array('cate_parentid'=>$cate_id);
            $chileId = $cate->where($where)->select();
            $this->assign('topname',$cateRes['cate_name']);//处理当前顶级栏目
            $this->assign('childId',$chileId);
        }else{
            $where = array('cate_parentid'=>$pid);
            $chileId = $cate->where($where)->select();
            $cates = $cate->field('cate_name')->find($pid);
            $this->assign('topname',$cates['cate_name']);//处理当前子级栏目
            $this->assign('childId',$chileId);
        }
        //处理当前的标题以及当前标题的内容
        $cates = $cate->find($cate_id);
        $this->assign('cates',$cates);

    }
}