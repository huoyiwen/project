<?php

namespace app\index\model;
use think\Model;
use think\Db;

class Profile extends Model
{
    public function inst($data)
    {
        $name = session('username');
        return Db::name('user')->where('username',$name)->update($data);
    }
    public function inst1($data)
    {
        $id = $data['nname'];
        return Db::name('user')->where('username',$id)->update($data);
    }
    public function sel($name)
    {
        return Db::name('user')->where('username',$name)->value('id');
    }
    public function sel1($name)
    {
        return Db::name('user')->where('username',$name)->value('password');
    }
}