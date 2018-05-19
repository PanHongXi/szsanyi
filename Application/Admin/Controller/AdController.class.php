<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/17
 * Time: 10:20
 */

namespace Admin\Controller;

use Think\Controller;

class AdController extends CommonController
{
    public function ad_list(){
        $ad = D('ad a');
        $position_name = I('get.ad_name');
        $where["ad_name"] = array("like", "%{$position_name}%");
        $count = $ad->where($where)->count();
        $Page = new \Think\Page($count, 5);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page->show();
        $this->assign('page',$show);
        $list = $ad->join('sc_ad_position p on a.position_id = p.position_id')->field('a.*,p.*')->order('p.position_id desc')->select();
        $this->assign('list',$list);
        $this->display();
    }

    public function ad_del(){
        $ad = D('ad');
        $data = $ad->where('id = '.$_GET['id'])->delete();
        if($data){
            $this->success('删除广告成功！', U('Ad/ad_list'));
        }else{
            $this->error('删除广告失败！', U('Ad/ad_list'));
        }
    }
    public function ad_add(){
        if($_GET['id']){
            //数据修改
            $ad = D('ad');
            if($_POST){
                $data['ad_name'] = I('ad_name');
                $data['ad_url'] = I('ad_url');
                $data['type_id'] = I('type_id');
                $data['position_id'] = I('position_id');
                $data['ad_desc'] = I('ad_desc');
                $data['ad_time'] = date("Y-m-d h:i:s", time());
                //处理上传的图片
                if ($_FILES['ad_img'] != '') {
                    $upload = new \Think\Upload();// 实例化上传类
                    $upload->maxSize = 3145728;// 设置附件上传大小
                    $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                    $upload->savePath = './Public/Uploads/ad/'; // 设置附件上传根目录
                    $upload->rootPath = './'; // 设置附件上传根目录
                    $info = $upload->uploadOne($_FILES['ad_img']);
                    if (!$info) {// 上传错误提示错误信息
                        $this->error($upload->getError());
                    } else {// 上传成功 获取上传文件信息
                        //生成水印缩略图
                        $imageRes = $info['savepath'] . $info['savename'];
                        $image = new \Think\Image();
                        $image->open($imageRes);
                        $image->thumb(268, 268, 1)->water('./public/Admin/images/11.jpg', 1, 50)->save($imageRes);
                        $data['ad_img'] = $imageRes;
                    }
                }
                if ($ad->create()) {
                    if ($ad->where('id = '.$_GET['id'])->save($data)) {
                        $this->success('修改广告成功！', U('Ad/ad_list'));
                    } else {
                        $this->error('修改广告失败！', U('Ad/ad_add'));
                    }
                } else {
                    $this->error($ad->getError());
                }
            }
            $data = $ad->where('id = '.$_GET['id'])->find();
            $this->assign('edit',$data);
        }else{
            //数据添加
            if (IS_POST) {
                $ad = D('ad');
                $data['ad_name'] = I('ad_name');
                $data['ad_url'] = I('ad_url');
                $data['type_id'] = I('type_id');
                $data['position_id'] = I('position_id');
                $data['ad_desc'] = I('ad_desc');
                $data['ad_time'] = date("Y-m-d h:i:s", time());
                //处理上传的图片
                if ($_FILES['ad_img'] != '') {
                    $upload = new \Think\Upload();// 实例化上传类
                    $upload->maxSize = 3145728;// 设置附件上传大小
                    $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                    $upload->savePath = '/Public/Uploads/ad/'; // 设置附件上传根目录
                    $upload->rootPath = './'; // 设置附件上传根目录
                    $info = $upload->uploadOne($_FILES['ad_img']);
                    if (!$info) {// 上传错误提示错误信息
                        $this->error($upload->getError());
                    } else {// 上传成功 获取上传文件信息
                        //生成水印缩略图
                        $imageRes = $info['savepath'] . $info['savename'];
                        $data['ad_img'] = $imageRes;
                    }
                }
                if ($ad->create()) {
                    if ($ad->add($data)) {
                        $this->success('添加广告成功！', U('Ad/ad_list'));
                    } else {
                        $this->error('添加广告失败！', U('Ad/ad_add'));
                    }
                } else {
                    $this->error($ad->getError());
                }
            }
        }
        $typeattr = D('ad_position')->select();
        $this->assign('position', $typeattr);//属性类型
        $this->display();
    }

    public function ad_position_list(){
        $ad = D('ad_position');
        $position_name = I('get.position_name');
        $where["position_name"] = array("like", "%{$position_name}%");
        $count = $ad->where($where)->count();
        $Page = new \Think\Page($count, 20);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page->show();
        $data = $ad->select();
        $this->assign('page',$show);
        $this->assign('list',$data);
        $this->display();
    }

    public function ad_position_add(){
        if($_GET){
            //数据修改
            $ad = D('ad_position');
            if($_POST){
                $ad = D('ad_position');
                $data['position_name'] = I('position_name');
                $data['ad_width'] = I('ad_width');
                $data['ad_height'] = I('ad_height');
                $data['position_desc'] = I('position_desc');
                if ($ad->create()) {
                    if ($ad->where('position_id = '.$_GET['id'])->save($data)) {
                        $this->success('修改广告位成功！', U('Ad/ad_position_list'));
                    } else {
                        $this->error('修改广告位失败！', U('Ad/ad_position_add'));
                    }
                } else {
                    $this->error($ad->getError());
                }
            }
            $data = $ad->where('position_id = '.$_GET['id'])->find();
            $this->assign('edit',$data);
        }else{
            if($_POST){
                $ad = D('ad_position');
                $data['position_name'] = I('position_name');
                $data['ad_width'] = I('ad_width');
                $data['ad_height'] = I('ad_height');
                $data['position_desc'] = I('position_desc');
                if ($ad->create()) {
                    if ($ad->add($data)) {
                        $this->success('添加广告位成功！', U('Ad/ad_position_list'));
                    } else {
                        $this->error('添加广告位失败！', U('Ad/ad_position_add'));
                    }
                } else {
                    $this->error($ad->getError());
                }
            }
        }

        $this->display();
    }
}