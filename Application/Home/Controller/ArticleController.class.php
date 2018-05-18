<?php

namespace Home\Controller;

use Think\Controller;

class ArticleController extends CommonController
{
    public function article()
    {
        $article = D('article');
        $article_id = I('article_id');
        $cate_id = I('cate_id');
        $cate = D('cate')->where(array('cate_id' => $cate_id))->field('cate_parentid')->find();
        $articleRes = $article->where(array('article_id' => $article_id))->find();
        if (empty($articleRes)) {
            $this->error('非法操作！', U('Topic/index'));
            die;
        }
//        $Page->setConfig('prev','上一页');$Page->setConfig('next','下一页');
        $this->topic_page($article_id, $articleRes['cate_id']);//调用文章的上一篇，下一篇的方法
        $collect = $this->collect(session('user_id'), $article_id);//调用查询文章是否已收藏的方法
        $this->comment();//获取文章的评论数
        $this->commentSecond();//调用二级评论的方法
        $this->commentRes();//调用多级评论的方法
        if (session('user_id')) {
            $this->user_info();//调用查询用户的方法
        }
        $tages = array_filter(explode(',', $articleRes['article_keys'])); //标签的数据处理
//        $topic = D('topic');
        $commentnums = $article->where(array('article_id' => $article_id))->field('comment')->find();//获取文章的评论数

        $newArticle = $article->newArticle(); //调用最新文章
        $Relevant = $article->Relevant($article_id); //调用相关文章的数据
        $recommend = $article->recommend();//调用推荐的文章数据
        $article->where(array('article_id' => $article_id))->setInc('click');//更新文章的浏览量
        //查询推荐标签
        $tags = C('BQY');
        $tagsRes = array_filter(explode(',', $tags));
        //指定文章管理员的id
        $admin_id = C('ADMIN_ID');
        $admin_info = D('userinfo')->where(array('user_id' => $admin_id))->find();
        $this->assign(array(
            'articleRes' => $articleRes,
            'collect' => $collect,//收藏
            'current' => $cate['cate_parentid'],//处理高亮状态
            'tages' => $tages,// 标签的数据处理
            'newArticle' => $newArticle,// 调用最新文章
            'Relevant' => $Relevant,// 调用相关文章的数据
            'tagsRes' => $tagsRes,
            'commentnums' => $commentnums,
            'cate_id' => $cate_id,
            'admin_info' => $admin_info,
            'recommend' => $recommend,
        ));
        $this->display();
    }

    /**
     * 文章内容页标签搜索
     *
     */
    public function tagesArticle()
    {


        $article = D('article');
        $tag = I('tags');
        $map['article_keys'] = array('LIKE', '%' . $tag . '%');
        $articleRes = $article->where($map)->order('article_id desc')->select();
        $articleRescount = $article->where($map)->count();
        $this->assign(array(
            'articleRes' => $articleRes,
            'count' => $articleRescount,
            'tag' => $tag,
        ));
        $this->display('tagesArticle');
    }

    /**
     * 查询评论内容
     */
    public function comment()
    {
        $CommentView = D('CommentView');
        $where = array(
            'Comment.article_id' => I('article_id'),
            'Comment.type' => 1,
            'Comment.pid' => 0,
            'Comment.pidsub' => 0,
        );
        $comment = $CommentView->where($where)->order('time desc')->select();
        $commentnum = $CommentView->where($where)->count();
        $this->assign('comment', $comment);//评论内容
        $this->assign('commentnum', $commentnum);//评论总数
    }

    /**
     * 二级评论的数据查询
     */
    public function commentSecond()
    {
        $CommentView = D('CommentView');
        $where = array(
            'Comment.article_id' => I('article_id'),
            'Comment.type' => 1,
            'Comment.pid' => array('gt', 0),
            'Comment.pidsub' => 0,
        );
        $commentSecond = $CommentView->where($where)->order('Comment.time asc')->select();
        $this->assign('commentSecond', $commentSecond);

    }

    /**
     * 多级评论的数据查询
     */
    public function commentRes()
    {
        $CommentView = D('CommentView');
        $where = array(
            'Comment.article_id' => I('article_id'),
            'Comment.type' => 1,
            'Comment.pid' => array('gt', 0),
            'Comment.pidsub' => array('gt', 0),
        );
        $commentRes = $CommentView->where($where)->order('Comment.time asc')->select();
        $this->assign('commentRes', $commentRes);

    }

    /**
     * 查询用户的信息
     */
    public function user_info()
    {
        $userinfo = D('userinfo')->where(array('user_id' => session('user_id')))->find();//查询评论的用户
        $this->assign('userinfo', $userinfo);//查询评论的用户
    }

    /**
     *
     * 查询是否已收藏
     *
     * 点击收藏，取消收藏 Ajax/collect方法
     */
    public function collect($user_id, $article_id)
    {
        $collect = D('Collect');
        $data['member_id'] = $user_id;
        $data['article_id'] = $article_id;
        $data['collect_type'] = 1;
        if ($collect->where($data)->find()) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     *
     * 文章的上一篇，下一篇
     */
    public function topic_page($article_id, $cate_id)
    {
        $article = D('article');
        //下一篇
        $where = array(
            'article_id' => array('gt', $article_id),
            'cate_id' => array('eq', $cate_id),
        );
        $next = $article->where($where)->order('article_id asc')->limit(1)->select();
        if ($next) {
            $next = $next[0];
        } else {
            $next = null;
        }
        //上一篇
        $where1 = array(
            'article_id' => array('lt', $article_id),
            'cate_id' => array('eq', $cate_id),
        );
        $prev = $article->where($where1)->order('article_id desc')->limit(1)->select();
        if ($prev) {
            $prev = $prev[0];
        } else {
            $prev = null;
        }
        $this->assign('next', $next);
        $this->assign('prev', $prev);
    }


    //下载前验证条件
    public function checkdown()
    {
        $artid = I('article_id');
        $type = I('type');
        $uid = session('user_id');
        if ($uid) {
            $arts = D('article')->field('points')->find($artid);
            $needPoints = $arts['points'];
            $userinfo = D('userinfo')->field('points')->where(array('user_id' => $uid))->find();
            $myPoints = $userinfo['points'];
            if ($myPoints < $needPoints) {
                echo 1;//积分不足，无法下载
            }
        } else {
            echo -1;//用户未登录，不能下载
        }
    }

    //下载文件资源
    public function downloadZip()
    {
        $user_id = session('user_id');
        if (IS_POST && $user_id) {
            $article_id = I('article_id');
            $type = I('type');
            $article = D('article')->where(array('article_id' => $article_id))->field('resources')->find();
            $fileName = $article['resources'];
            //判断文件是否存在
            if (file_exists($fileName)) {
                $file = fopen($fileName, 'r');
                Header("Content-type:  application/octet-stream ");
                Header("Accept-Ranges:  bytes ");
                Header('Content-Disposition:  attachment;  filename=' . basename($fileName));
                $content = '';
                while (!feof($file)) {
                    $content .= fread($file, 4000);//fread（，字节）
                }
                echo $content;
                //扣除下载积分
                $arts = D('article')->field('points')->find($article_id);
                $needPoints = $arts['points'];
                D('userinfo')->where(array('user_id' => $user_id))->setDec('points', $needPoints);
                //增加下载次数
                D('article')->where(array('article_id' => $article_id))->setInc('download');//更新文件的下载次数
                fclose($file);
            } else {
                echo '文件不存在！';
                die;
            }
        } else {
            $this->redirect('Account/login');
        }
    }

}