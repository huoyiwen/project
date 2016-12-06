<?php
/**
 * 这是一个认证控制器
 */

namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\model\User;

class Auth extends Controller
{

	public function __construct(Request $request)
	{
		parent::__construct();
		if(!$this->checkLogin() && $request->controller() != 'Auth')
		{
			$this->error('请登录');
		}
	}


	public function login()
	{
        $this->assign('title','囧兔会员登录');
        return $this->fetch();
	}

	public function doLogin()
	{
		session('uid', 1);

		$this->redirect('Index/User/profile');
	}

	public function logout()
	{
		session(null);
	}

	public function register()
	{
        $this->assign('title','囧兔会员注册');
        return $this->fetch();
	}

	public function doRegister1()
	{
        $user = new User();
        if($_REQUEST['username'] == ''){
            echo '用户不能为空！！！';die();
        }
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $repassword = $_REQUEST['repassword'];
        $reuser = $user->sel1($username);
        if($reuser == $_REQUEST['username']){
            echo '用户名已存在';die();
        }
        if($password !== $repassword){
            echo '两次密码输入不一致';die();
        }
	}
    public function doRegister()
    {
        $user = new User();
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        $data['regtime'] = time();
        $reuser = $user->inst($data);
        if($reuser){
            $this->success('注册成功','http://www.tpa51.cn/index/auth/login');
//            $this->assign(['title'=>'囧兔会员登录','msg'=>'注册成功','num'=>3]);
           // $this->assign();
//            return $this->fetch('login');
        }
    }

	public function checkLogin()
	{
		return session('uid');
	}

}
