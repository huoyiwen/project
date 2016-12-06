<?php

namespace app\index\model;
use think\Model;
use think\Db;

class User extends Model
{
	public function sel1($name)
    {
        return Db::name('user')->where('username',$name)->value('username');
    }
    public function inst($data)
    {
        return Db::name('user')->insert($data);
    }
}