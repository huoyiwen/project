<?php
namespace app\index\controller;
use app\index\controller\Auth;
use think\Request;
use app\index\model\Profile;
class User extends Auth
{
	public function profile()
	{
        $this->assign('title','囧兔个人中心');
		return $this->fetch();
	}
    public function proset()
    {
        $this->assign('title','囧兔个人资料设置');
        return $this->fetch();
    }

    public function outlogin()
    {
        session('');
    }
    public function setinfo()
    {
        $data['sex'] = $_POST['sex'] == '1'? '女' :'男';
        $data['phone'] = $_POST['phone'] == ','? '' :$_POST['phone'];
        $data['email'] = $_POST['email'] == ','? '' :$_POST['email'];
        $data['reside'] = $_POST['towhere'] == ','? '' :$_POST['towhere'];
        $data['bth'] = $_POST['bth'] == ','? '' :$_POST['bth'];
        $data['bio'] = $_POST['textarea'] == ','? '' :$_POST['textarea'];
        $data['address'] = $_POST['textarea1'] == ','? '' :$_POST['textarea1'];
        $profile = new Profile();
        $result = $profile->inst($data);
        if($result){
            echo json_encode(['status' => 2, 'msg' => '保存成功']);die();
        }else{
            echo json_encode(['status' => 0, 'msg' => '保存失败']);die();
        }
    }
    public function setpic()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('image');
// 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
            $path = ROOT_PATH . 'public' . DS . 'uploads/'.$info->getSaveName();
            $profile = new Profile();
            $data['userpic'] = $path;
            $result = $profile->inst($data);
            if($result){
                $this->success('上传成功');
            }else{
                $this->success('上传失败','','',3);
            }
        }else{
            echo $file->getError();
        }
    }
    public function setpwd()
    {
        $uname = $_REQUEST['uname'];
        $profile = new Profile();
        $result = $profile->sel($uname);
        if(!$result){
            echo json_encode(['status' => 2, 'msg' => '用户名不存在']);die;
        }
        $upwd = md5($_REQUEST['upwd']);
        $result1 = $profile->sel1($uname);
        if($result1 !== $upwd){
            echo json_encode(['status' => 1, 'msg' => '密码错误']);die;
        }
        echo json_encode(['status' => 0, 'msg' => $result]);die;
    }
    public function dosetinfo()
    {
        echo 11111;
        $pro = new Profile();
        $data['nname'] = $_POST['nname'];
        $data['npwd'] = $_POST['npwd'];
        $result = $pro ->inst1($data);
        if($result){
            echo json_encode(['status' => 2, 'msg' => '修改成功']);die;
        }else{
            echo json_encode(['status' => 1, 'msg' => '修改失败']);die;
        }

    }
}