<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\User;
class User extends Controller
{
	public function index(User $user)
	{
		$info = $user->selInfo();
		$this->assign('info',$info);
		return $this->fetch();
	}
}