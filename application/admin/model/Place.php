<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Place extends Model
{
	public function selplace($provinceid = null)
	{
		if(is_null($provinceid)){
			return Db::name('place')->select();
		} else{
			return Db::name('place')->where('provinceid',$provinceid)->select();
		}
		
	}
	
}