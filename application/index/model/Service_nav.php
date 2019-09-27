<?php 
namespace app\index\model;
use think\Model;
class Service_nav extends Model
{
	//获取所有数据
	public static function GetAll()
    {
        $list = Service_nav::order('id asc')->where('display','1')->paginate(6);
        return $list;
    }
    
}
 ?>