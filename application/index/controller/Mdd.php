<?php
/**
 * 这是一个认证控制器
 */

namespace app\index\controller;

use think\Controller;
use think\captcha;
use think\Request;
use app\index\model\Mmdd;

class Mdd extends Controller
{
//    public function logout()
//    {
//        session(null);
//        $this->success('退出成功','http://www.tpa51.cn',5);
//
//    }

    public function place()
    {
        $mdd = new Mmdd();
        $data = $mdd->sel();
        $this->assign('title','囧兔目的地旅游');
        $this->assign('data',$data);
        return $this->fetch();
    }
}
