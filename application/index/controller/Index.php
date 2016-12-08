<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $this->assign('title','囧兔网');
        return $this->fetch();
    }
}
