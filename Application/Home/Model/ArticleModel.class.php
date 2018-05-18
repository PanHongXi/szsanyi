<?php

namespace Home\Model;

use Think\Model;

class ArticleModel extends Model
{
    /*
     * 获取最新文章的数据处理
     * */
    public function newArticle()
    {
        $newArticle = $this->order('article_time desc')->limit(10)->select();


        return $newArticle;
    }

    /*
     *获取相关的文章
     * */
    public function Relevant($article_id)
    {
        $relevant = $this->where(array('article_id' => $article_id))->field('article_keys')->find();
        $keywords = array_filter(explode(',', $relevant['article_keys']));
        $relevantRes3D = array();
        //循环查询相关的话题
        foreach ($keywords as $k => $v) {
            $map['article_keys'] = array('LIKE', '%' . $v . '%');
            $relevantRes3D[] = D('article')->where($map)->field('article_id')->order('click desc')->select();

        }
        //处理多维数组，降为二维数组
        $relevantRes2D = array();
        foreach ($relevantRes3D as $k => $v) {
            foreach ($v as $k1 => $v1) {
                $relevantRes2D[] = $v1;
            }
        }
        //处理二维数组并且去掉重复的数据
        $relevantRes1D = array();
        foreach ($relevantRes2D as $k => $v) {
            $relevantRes1D[] = $v['article_id'];
        }
        $relevantRes1Ds = array_unique($relevantRes1D);
        //处理相等的话题数据，不显示相等的话题！
        foreach ($relevantRes1Ds as $k => $v) {
            if ($v == $article_id) {
                unset($relevantRes1Ds[$k]);
            }
        }

        //查询相关的话题
        $relevantRes1s = array();
        foreach ($relevantRes1Ds as $k => $v) {
            $relevantRes1s[] = $this->find($v);
        }
        return $relevantRes1s;
    }

    //查询推荐的文章
    public function recommend()
    {
         $recommend = $this->where(array('article_reco'=>1))->field('article_id,article_title,article_time')->order('article_id desc')->limit(10)->select();
         return $recommend;
    }


}