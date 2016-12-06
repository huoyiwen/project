<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Unfound extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
}