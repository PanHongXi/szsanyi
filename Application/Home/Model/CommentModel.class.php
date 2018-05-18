<?php

namespace Home\Model;

use Think\Model;

class CommentModel extends Model
{
    public function commtree()
    {
        $data = $this->order('time desc')->select();
        return $this->resort($data);
    }

    public function resort($data, $parentid = 0)
    {
        static $ret = array();
        foreach ($data as $k => $v) {
            if ($v['pid'] == $parentid) {
                $ret[] = $v;
                $this->resort($data, $v['comment_id']);
            }
        }

    }

}