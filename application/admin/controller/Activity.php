<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Place;
use app\admin\model\Activity;

class Activity extends Controller
{
	public function index(Place $place)
	{	
		$activity = Db::name('activity')->paginate(1);
		$this->assign('activity',$activity);
		$pla = $place->selplace();
		$this->assign('place',$pla);
		return $this->fetch();
	}
	public function active()
	{
		$data = request()->post();
		if(!empty(request()->file('a_pic'))){
			$image = Activity::files();
			$data['a_pic'] = $image;
		}
		$data['a_updatetime'] = time();
		$update = Db::name('activity')->where('aid',$data['aid'])->update($data);
		if($update){
			echo '修改成功';
		}
	}
}