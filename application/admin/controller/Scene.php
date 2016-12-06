<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Scene;
use app\admin\model\Place;
class Scene extends Controller
{
	public function index()
	{
		
		$scene=Db::table(['t_scene,t_place'])->where('t_scene.placeid=t_place.pid')->paginate(1);
		$this->assign('scene',$scene);
		return $this->fetch();
	}
}