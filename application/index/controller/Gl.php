<?php
/**
 * 这是一个认证控制器
 */

namespace app\index\controller;

use think\Controller;
use think\captcha;
use think\Request;
use app\index\model\Glv;

class Gl extends Controller
{
//    public function logout()
//    {
//        session(null);
//        $this->success('退出成功','http://www.tpa51.cn',5);
//
//    }

    public function look()
    {
        $glv = new Glv();
        $data = $glv->selectall();
        $this->assign('title','囧兔旅游攻略');
        $this->assign('data',$data);
        return $this->fetch();
    }
}
