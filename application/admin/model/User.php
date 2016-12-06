<?php
namespace app\admin\model;

use think\Model;
use think\Db;
class User extends Model
{
	public function selInfo()
	{
		return Db::name('user')->where('id','<>',0)->select();
	}
}