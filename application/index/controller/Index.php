<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\index\model\Adv;
class Index extends Controller
{
    public function index(Adv $adv)
    {
        $this->assign('title','囧兔网');

        $adv1 = $adv->findadv(1);
        $this->assign('adv1',$adv1);
        $adv2 = $adv->findadv(2);
        $this->assign('adv2',$adv2);

        $scene = Db::name('scene')->where('sid','<>',0)->limit(6)->order('s_createtime','desc')->select();
        $this->assign('scene',$scene);
        return $this->fetch();
    }
}