<?php
namespace app\index\controller;
use think\Controller;
<<<<<<< HEAD
=======
use think\Db;
use app\index\model\Adv;
>>>>>>> e53c359dbc719b11ecfe44c1263bda5326f6d2af
class Index extends Controller
{
    public function index(Adv $adv)
    {
        $this->assign('title','囧兔网');
<<<<<<< HEAD
=======

        $adv1 = $adv->findadv(1);
        $this->assign('adv1',$adv1);
        $adv2 = $adv->findadv(2);
        $this->assign('adv2',$adv2);

        $scene = Db::name('scene')->where('sid','<>',0)->limit(6)->order('s_createtime','desc')->select();
        $this->assign('scene',$scene);
>>>>>>> e53c359dbc719b11ecfe44c1263bda5326f6d2af
        return $this->fetch();
    }
}