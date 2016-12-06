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
<<<<<<< HEAD
    public function selall($name)
    {
        return Db::name('user')->where('username',$name)->value('password');
    }
=======
>>>>>>> e53c359dbc719b11ecfe44c1263bda5326f6d2af
    public function inst($data)
    {
        return Db::name('user')->insert($data);
    }
}