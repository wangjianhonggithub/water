<?php 
namespace app\index\model;
use think\Model;
class Project_details extends Model
{
	//调取单个
	public static function GetAll($id,$page,$number){
		if($page == 1){
			$page = 0;
		}else{
			$page = ($page-1)*$number;
		}
		$list = Project_details::where(['pid'=>$id])->limit($page,$number)->select();
		return $list;
	}
	//调取总数
	public static function GetAll_num($id){
		$num = Project_details::where(['pid'=>$id])->count();
		return $num;
	}
}
 ?>