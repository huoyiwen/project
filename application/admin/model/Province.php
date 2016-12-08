<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Province extends Model
{
	public function selpro()
	{
		return Db::name('province')->select();
	}
}