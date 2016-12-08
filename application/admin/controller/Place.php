<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Request;
use app\admin\model\Place;
use app\admin\model\Province;
class Place extends Controller
{
	public function index()
	{
		dump(Request::instance()->provinceid);
		$province = new Province();
		$pro = $province->selpro();
		$this->assign('pro',$pro);
		$place = new Place();
		$a = $place->selplace(Request::instance()->provinceid);
		$this->assign('a',$a);
		
		return $this->fetch();
	}
	public function sel()
	{
		Request::instance()->bind('provinceid',$_REQUEST['provinceid']);
	}
}