<?php
namespace Admin\Controller;

use Think\Controller;

class ArticlesController extends CommonController
{
    public function lst()
    {
        $articles = D('Articles');

        //搜索
        $articles_title = I("get.articles_title");
        $where["articles_title"] = array("like", "%{$articles_title}%");

        $count = $articles->where($where)->count();
        $Page = new \Think\Page($count, 20);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $show = $Page->show();
        $field = 'a.*,ty.type_name';
        $list = $articles
            ->alias('a')
            ->join('LEFT JOIN  sc_articles_type ty on a.type_id=ty.type_id')
            ->order('articles_id desc')
            ->field($field)
            ->where($where)
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $this->assign('lists', $list);
        $this->assign('page', $show);

        $this->display();
    }

    public function add()
    {
        if (IS_POST) {
            $articles = D('articles');
            $data['articles_title'] = I('articles_title');
            $data['articles_author'] = I('articles_author');
            $data['articles_keys'] = I('articles_keys');
            $data['articles_desc'] = I('articles_desc');
            $data['articles_reco'] = I('articles_reco');
            $data['articles_content'] = I('articles_content');
            $data['type_id'] = I('type_id');
            $data['articles_time'] = time();

            //处理上传的图片
            if ($_FILES['articles_pic']['tmp_name'] != '') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath = './Public/Uploads/articles/'; // 设置附件上传根目录
                $upload->rootPath = './'; // 设置附件上传根目录
                $info = $upload->uploadOne($_FILES['articles_pic']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {
                    // 上传成功 获取上传文件信息
                    $data['articles_pic'] = $info['savepath'] . $info['savename'];
                }
            }

            if ($articles->create()) {
                if ($articles->add($data)) {
                    $this->success('添加简介成功！', U('articles/lst'));
                } else {
                    $this->error('添加简介失败！', U('articles/lst'));
                }
            } else {
                $this->error($articles->getError());
            }
        }

        //获取文章类型列表
        $typeList = M('articles_type')->select();
        $this->assign('typeList', $typeList);

        $this->display();
    }

    /**
     *
     * 文章修改
     */
    public function edit()
    {
        $articles = D('articles');
        $articles_id = I('articles_id');
        $articlesInfo = $articles->where(array('articles_id' => $articles_id))->find();
        if (IS_POST) {
            $articles = D('articles');
            $data['articles_id'] = I('articles_id');
            $data['articles_title'] = I('articles_title');
            $data['articles_author'] = I('articles_author');
            $data['articles_keys'] = I('articles_keys');
            $data['articles_desc'] = I('articles_desc');
            $data['articles_reco'] = I('articles_reco');
            $data['articles_content'] = I('articles_content');
            $data['type'] = I('type');
            $data['articles_time'] = time();

            //处理上传的图片
            if ($_FILES['articles_pic']['tmp_name'] != '') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath = './Public/Uploads/articles/'; // 设置附件上传根目录
                $upload->rootPath = './'; // 设置附件上传根目录
                $info = $upload->uploadOne($_FILES['articles_pic']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {
                    // 上传成功 获取上传文件信息
                    $data['articles_pic'] = $info['savepath'] . $info['savename'];
                }
            }

            if ($articles->create($data)) {
                if ($articles->save() !== false) {
                    $this->success('修改简介成功！', U('articles/lst'));
                } else {
                    $this->error('修改简介失败！', U('articles/lst'));
                }
            } else {
                $this->error($articles->getError());
            }

            return;
        }

        //获取文章类型列表
        $typeList = M('articles_type')->select();
        $this->assign(array(
            'articlesInfo' => $articlesInfo,
            'typeList' => $typeList,
        ));

        $this->display();
    }

    /**
     * 删除文章
     */
    public function del($articles_id)
    {
        $articles = M('articles');
        if ($articles->delete($articles_id)) {
            $this->success('删除成功！', U('articles/lst'));
        } else {
            $this->error('删除失败！', U('articles/lst'));
        }
    }
}