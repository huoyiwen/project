<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Table extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
}