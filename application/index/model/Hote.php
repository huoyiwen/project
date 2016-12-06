<?php

namespace app\index\model;
use think\Model;
use think\Db;

class Hote extends Model
{
    public function selectall()
    {
        return Db::name('place')->where('p_id >= 0');
    }
//    public function inst($data)
//    {
//        return Db::name('user')->insert($data);
//    }
}