<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Adv extends Model
{
	public function findadv($id)
	{
		return Db::name('adv')->where('aid',$id)->find();
	}
}