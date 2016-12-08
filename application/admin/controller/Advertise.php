<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Advertise;

class Advertise extends Controller
{
	public function index()
	{
		$advertise = new Advertise();
		$adv = $advertise->selAdv();
		$this->assign('adv',$adv);
		return $this->fetch();
	}
	public function edit()
	{
		$data = request()->post();
		if(!empty(request()->file('a_pic'))){
			$image = Advertise::files();
			$data['a_pic'] = $image;
		}
		$update = Db::name('adv')->where('aid',$data['aid'])->update($data);
		if($update){
			echo '修改成功';
		}
	}
}