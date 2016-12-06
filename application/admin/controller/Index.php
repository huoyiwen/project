<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
	public function form()
	{
		return $this->fetch();
	}
	public function gallery()
	{
		return $this->fetch();
	}
	public function indexfixed()
	{
		return $this->fetch();
	}
	public function log()
	{
		return $this->fetch();
	}
	public function table()
	{
		return $this->fetch();
	}

	public function admin404()
	{
		return $this->fetch();
	}
	
	
}