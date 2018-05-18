<?php

namespace Home\Model;

use Think\Model;

class TopicModel extends Model
{
    /*
     * 获取最新话题的数据处理
     * */
    public function newTopic()
    {
        $newTopic = $this->field('topic_id,topic_title,cate_id,release_time')->order('release_time desc')->limit(10)->select();
        return $newTopic;
    }

    /*
     *获取相关的话题
     * */
    public function Relevant($topic_id)
    {
        $relevant = $this->where(array('topic_id' => $topic_id))->field('keywords')->find();
        $keywords = array_filter(explode(',', $relevant['keywords']));
        $relevantRes3D = array();
        //循环查询相关的话题
        foreach ($keywords as $k => $v) {
            $map['keywords'] = array('LIKE', '%' . $v . '%');
            $relevantRes3D[] = D('topic')->where($map)->field('topic_id')->order('click desc')->select();

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
            $relevantRes1D[] = $v['topic_id'];
        }
        $relevantRes1Ds = array_unique($relevantRes1D);
        //处理相等的话题数据，不显示相等的话题！
        foreach ($relevantRes1Ds as $k => $v) {
            if ($v == $topic_id) {
                unset($relevantRes1Ds[$k]);
            }
        }

        //查询相关的话题
        $relevantRes1s = array();
        foreach ($relevantRes1Ds as $k => $v) {
            $relevantRes1s[] = $this->field('topic_id,topic_title,cate_id,release_time')->find($v);
        }
        return $relevantRes1s;
    }


}