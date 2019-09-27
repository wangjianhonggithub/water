<?php 
namespace app\index\model;
use think\Model;
class Industry extends Model
{
	//根据openid查找数据
	public static function GetAll()
    {
        $list = Industry::where('display=1')->paginate(5);
        return $list;
    }
    
}
 ?>