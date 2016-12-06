<?php

namespace app\index\model;
use think\Model;
use think\Db;

class Mmdd extends Model
{
    public function sel()
    {
        return Db::name('place')->where('p_id >= 0');
    }
//    public function inst($data)
//    {
//        return Db::name('user')->insert($data);
//    }
}