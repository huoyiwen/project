<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Activity extends Model
{
	public static function files()
	{
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('a_pic');
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move(ROOT_PATH . 'public/static/admin/images/upload',true,false);
		if($info){
			// 输出 jpg
			//echo $info->getExtension();
			// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
			//echo $info->getSaveName();
			// 输出 42a79759f284b767dfcb2a0197904287.jpg
			//echo $info->getFilename();
			return STATIC_SITE . 'images/upload/' . $info->getSaveName();
		}else{
			// 上传失败获取错误信息
			echo $file->getError();
		}
	}
}