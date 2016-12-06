<?php
/**
 * 这是一个认证控制器
 */

namespace app\index\controller;

use think\Controller;
use think\captcha;
use think\Request;
use app\index\model\Grou;

class Gro extends Controller
{
//    public function logout()
//    {
//        session(null);
//        $this->success('退出成功','http://www.tpa51.cn',5);
//
//    }

    public function group()
    {
        $glv = new Grou();
        $data = $glv->selectall();
        $this->assign('title','囧兔酒店大全');
        $this->assign('data',$data);
        return $this->fetch();
    }
}
