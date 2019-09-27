<?php 
namespace app\index\model;
use think\Model;
class Aboult extends Model
{
	//获取全部内容
	public static function GetAll()
    {
        $list = Aboult::all();
        return $list;
    }
    
}
 ?>