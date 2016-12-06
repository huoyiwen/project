<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Gallery extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
}