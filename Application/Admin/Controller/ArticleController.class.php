<?php

namespace Admin\Controller;

use think\Controller;

class ArticleController extends CommonController
{
    public function article_list()
    {
        $article = D('Article');

        //搜索
        $article_title = I("get.article_title");
        $where["article_title"] = array("like", "%{$article_title}%");

        $count = $article->where($where)->count();
        $Page = new \Think\Page($count, 20);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page->show();
        $field = 'a.article_title,a.article_author,a.article_id,a.article_pic,a.article_time,a.article_reco,c.cate_name';
        $list = $article
            ->alias('a')
            ->join('LEFT JOIN  sc_cate c on a.cate_id=c.cate_id')
            ->order('article_id desc')
            ->field($field)
            ->where($where)
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $this->assign('lists', $list);
        $this->assign('page', $show);

        //搜索 下拉列表
        $cate = D('cate');
        $cateres = $cate->catetree();
        $this->assign('cateres', $cateres);
        $this->display();
    }

    public function article_add()
    {
        if (IS_POST) {
            $article = D('Article');
            $data['article_title'] = I('article_title');
            $data['article_author'] = I('article_author');
            $data['article_keys'] = I('article_keys');
            $data['article_desc'] = I('article_desc');
            $data['article_reco'] = I('article_reco');
            $data['attrtype_id'] = I('type_id');
            $data['cate_id'] = I('cate_id');
            $data['article_content'] = I('article_content');
            $data['jieya'] = I('jieya');
            $data['points'] = I('points');
            $data['article_time'] = time();
            //处理上传的图片
            if ($_FILES['article_pic']['tmp_name'] != '') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath = './Public/Uploads/article/'; // 设置附件上传根目录
                $upload->rootPath = './'; // 设置附件上传根目录
                $info = $upload->uploadOne($_FILES['article_pic']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息

                    //生成水印缩略图
                    $imageRes = $info['savepath'] . $info['savename'];
                    $image = new \Think\Image();
                    $image->open($imageRes);
                    $image->thumb(268, 268, 1)->water('./public/Admin/images/11.jpg', 1, 50)->save($imageRes);
                    $data['article_pic'] = $imageRes;
                }
            }

            //处理上传的压缩包
            if($_FILES['resources']['tmp_name'] != ''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('zip');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/resources_zip/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['resources']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{
                    // 上传成功 获取上传文件信息  ./public/uploads/.....
                    $sourceSrc=$info['savepath'].$info['savename'];

                    //解压
                    if($data['jieya']){
                        $zip=new \ZipArchive();
                        $date=date("Y-m-d");
                        $_savename=str_replace('.zip', '', $info['savename']);
                        $savename=$date.'/'.$_savename;
                        $extractSrc='./Public/Uploads/resources/'.$savename.'/';//解压资源存放路径
                        if($zip->open($sourceSrc) == true){
                            $zip->extractTo($extractSrc);
                            $zip->close();
                            $yssrc= FACE_IMG.'/'.'Public/Uploads/resources/'.$savename.'/'.I('demosrc');
                            $data['demosrc']=$yssrc;//演示路径
                        }else{
                            $this->error('解压失败！');
                        }
                    }
                    //解压结束
                    $data['resources']=$sourceSrc;
                }
            }

            if ($article->create()) {
                if ($article->add($data)) {
                    $this->success('添加文章成功！', U('Article/article_list'));
                } else {
                    $this->error('添加文章失败！', U('Article/article_list'));
                }
            } else {
                $this->error($article->getError());
            }
        }
        $cate = D('cate');
        $typeattr = D('typeattr')->select();
        $cateres = $cate->catetree();
        $this->assign('cateres', $cateres);//栏目类型
        $this->assign('typeattr', $typeattr);//属性类型
        $this->display();
    }

    /**
     *
     * 获取属性值
     *
     */
    public function ajaxGetAttr($type_id)
    {
        $attrRes = D('attrs')->where(array('typeattr_id' => $type_id))->select();
        echo json_encode($attrRes);
    }


    /**
     *
     * 文章修改
     */
    public function article_edit()
    {
        $article = D('Article');
        $article_id = I('article_id');
        $articles = $article->where(array('article_id' => $article_id))->find();
        if (IS_POST) {
            $data['attrtype_id'] = I('type_id');
            $data['article_id'] = I('article_id');
            $data['article_title'] = I('article_title');
            $data['article_author'] = I('article_author');
            $data['article_keys'] = I('article_keys');
            $data['article_desc'] = I('article_desc');
            $data['article_reco'] = I('article_reco');
            $data['cate_id'] = I('cate_id');
            $data['article_content'] = I('article_content');

            if ($_FILES['article_pic']['tmp_name'] != '') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath = './Public/Uploads/article/'; // 设置附件上传根目录
                $upload->rootPath = './'; // 设置附件上传根目录
                $info = $upload->uploadOne($_FILES['article_pic']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
//                    $data['article_pic'] = $info['savepath'] . $info['savename'];
                    //删除原来的图片
                    if (!empty($articles['article_pic'])) {
                        @unlink($articles['article_pic']);
                    }
                    $imageRes = $info['savepath'] . $info['savename'];
                    $image = new \Think\Image();
                    $image->open($imageRes);
                    $image->thumb(268, 268, 1)->water('./public/Admin/images/11.jpg', 1, 80)->save($imageRes);
                    $data['article_pic'] = $imageRes;
                }
            }
            if ($article->create($data)) {
                if ($article->save() !== false) {
                    $this->success('修改文章成功！', U('Article/article_list'));
                } else {
                    $this->error('修改文章失败！', U('Article/article_list'));
                }
            } else {
                $this->error($article->getError());
            }
            return;
        }
        $cate = D('cate');
        $cateres = $cate->catetree();
        $typeattr = D('typeattr')->select();//属性类型
        //查询当文章所属的类型
        $typeAttrRes = D('typeattr')->where(array('typa_id' => $articles['attrtype_id']))->find();
        //获取所有属性
        $attrsRes = D('attrs')->where(array('typeattr_id' => $articles['attrtype_id']))->select();
        //获取当前文章的属性
        $article_attr = D('article_attr')->where(array('article_id' => $article_id))->select();
        $article_attrRes = array();
        foreach ($article_attr as $k => $v) {
            $article_attrRes[$v['attrs_id']][] = $v;
        }
        $this->assign(array(
            'list' => $cateres,
            'typeattr' => $typeattr,//属性类型
            "articles" => $articles,//文章类型
            'attrsRes' => $attrsRes,//获取当前文章所属的所有属性
            'article_attrRes' => $article_attrRes,
            'typeAttrRes' => $typeAttrRes,
        ));

        $this->display();
    }

    /**
     *
     * 删除文章
     * 同时会删除相关的属性
     *
     */
    public function article_del($article_id)
    {
        $article = M('Article');
        if ($article->delete($article_id)) {
            D('article_attr')->where(array('article_id' => $article_id))->delete();//同时会删除相关的属性
            $this->success('删除成功！', U('Article/article_list'));
        } else {
            $this->error('删除失败！', U('Article/article_list'));
        }
    }
}