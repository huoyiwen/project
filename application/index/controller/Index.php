<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends Controller
{
    public function index()
    {
        $this->assign('title','囧兔网');

        $adv1 = Db::name('adv')->where('aid',1)->find();
        $this->assign('adv1',$adv1);
        $adv2 = Db::name('adv')->where('aid',2)->find();
        $this->assign('adv2',$adv2);

        $scene = Db::name('scene')->where('sid','<>',0)->limit(6)->order('s_createtime','desc')->select();
        $this->assign('scene',$scene);
        return $this->fetch();
    }
}