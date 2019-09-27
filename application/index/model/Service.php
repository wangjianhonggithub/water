<?php 
namespace app\index\model;
use think\Model;
class Service extends Model
{
	//获取所有数据
	public static function GetAll($id)
    {
        $list = Service::order('addtime desc')->where('display',1)->where('sid',$id)->select();
        return $list;
    }
    
}
 ?>