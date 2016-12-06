<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Indexfixed extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
}