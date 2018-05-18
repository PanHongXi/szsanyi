<?php

namespace Home\Controller;

use Think\Controller;

class TopicartController extends CommonController
{

    /**
     * 话题的展示内容
     *
     */
    public function topicArt()
    {

        $topicView = D('TopicView');
        $topic_id = I('topic_id');
        $cate_id = I('cate_id');
        $cate = D('cate')->where(array('cate_id'=>$cate_id))->field('cate_parentid')->find();
        $topicRes = $topicView->where(array('topic_id' => $topic_id))->find();
        if (empty($topicRes)) {
            $this->error('非法操作！', U('Topic/index'));
            die;
        }
        $this->topic_page($topic_id, $topicRes['cate_id']);//调用话题的上一篇，下一篇的方法
        $collect = $this->collect(session('user_id'), $topic_id);//调用查询话题是否已收藏的方法
        $this->comment();//获取话题的评论数
        $this->commentSecond();//调用二级评论的方法
        $this->commentRes();//调用多级评论的方法
        if (session('user_id')) {
            $this->user_info();//调用查询用户的方法
        }
        $tages = array_filter(explode(',', $topicRes['keywords'])); //标签的数据处理
        $topic = D('topic');
        $commentnums = $topic->where(array('topic_id'=>$topic_id))->field('comment')->find();//获取话题的评论数

        $newTopic = $topic->newTopic(); //调用最新话题
        $Relevant = $topic->Relevant($topic_id); //调用相关话题的数据
        $topicView->where(array('topic_id' => $topic_id))->setInc('click');//更新话题的浏览量
        //查询推荐标签
        $tags = C('TAGS');
        $tagsRes = array_filter(explode(',', $tags));
        $this->assign(array(
            'topicRes' => $topicRes,
            'collect' => $collect,//收藏
            'current' =>  $cate['cate_parentid'],//处理高亮状态
            'tages' => $tages,// 标签的数据处理
            'newTopic' => $newTopic,// 调用最新话题
            'Relevant' => $Relevant,// 调用相关话题的数据
            'tagsRes' => $tagsRes,
            'commentnums'=>$commentnums,
        ));
        $this->display('topicArt');
    }

    /**
     * 查询评论内容
     */
    public function comment()
    {
        $CommentView = D('CommentView');
        $where = array(
            'Comment.article_id' => I('topic_id'),
            'Comment.type' => 2,
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
            'Comment.article_id' => I('topic_id'),
            'Comment.type' => 2,
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
            'Comment.article_id' => I('topic_id'),
            'Comment.type' => 2,
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
    public function collect($user_id, $topic_id)
    {
        $collect = D('Collect');
        $data['member_id'] = $user_id;
        $data['article_id'] = $topic_id;
        $data['collect_type'] = 2;
        if ($collect->where($data)->find()) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     *
     * 话题的上一篇，下一篇
     */
    public function topic_page($topic_id, $cate_id)
    {
        $topic = D('topic');
        //下一篇
        $where = array(
            'topic_id' => array('gt', $topic_id),
            'cate_id' => array('eq', $cate_id),
        );
        $next = $topic->where($where)->order('topic_id asc')->limit(1)->select();
        if ($next) {
            $next = $next[0];
        } else {
            $next = null;
        }
        //上一篇
        $where1 = array(
            'topic_id' => array('lt', $topic_id),
            'cate_id' => array('eq', $cate_id),
        );
        $prev = $topic->where($where1)->order('topic_id desc')->limit(1)->select();
        if ($prev) {
            $prev = $prev[0];
        } else {
            $prev = null;
        }
        $this->assign('next', $next);
        $this->assign('prev', $prev);
    }

}