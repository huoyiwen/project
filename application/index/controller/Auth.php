<?php
/**
 * 这是一个认证控制器
 */

namespace app\index\controller;

use think\Controller;
use think\captcha;
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
        $user = new User();
        $username = $_REQUEST['username'];
        $reuser1 = $user->sel1($username);
        if(!$reuser1){
            echo '用户名不存在';die();
        }
        $password = $_REQUEST['password'];
        $reuser = $user->selall($username);
        if($reuser !== md5($password)){
            echo '密码输入错误';die();
        }
        $viy = $_REQUEST['viy'];
        if(!captcha_check($viy)){
            echo '验证码错误';die();
        }
        session('username',$username);
        echo 1;die();
	}

	public function logout()
	{
		session(null);
        $this->success('退出成功','http://www.tpa51.cn',5);

	}

	public function register()
	{
        $this->assign('title','囧兔会员注册');
        return $this->fetch();
	}

	public function doRegister1()
	{
        $user = new User();
        $username = $_REQUEST['username'];
        $reuser = $user->sel1($username);
        $password = $_REQUEST['password'];
        $repassword = $_REQUEST['repassword'];
        $viy = $_REQUEST['viy'];
        if(strlen($_REQUEST['username']) <= 5){
            echo '用户名不能小于6位！！！';die();
        }else if($reuser == $_REQUEST['username']){
            echo '用户名已存在！！！';die();
        }else if(strlen($password) <= 5){
            echo '密码不能小于6位！！！';die();
        } else if($password !== $repassword){
            echo '密码输入不一致！！！';die();
        }else if(captcha_check($viy)){
            $data['username'] = $username;
            $data['password'] = md5($password);
            $data['regtime'] = time();
            $user->inst($data);
            echo 1;die();
        }
        echo '验证码错误';die();

	}
	public function checkLogin()
	{
		return session('username');
	}

}
