<?php 
namespace app\index\model;
use think\Model;
class Banner extends Model
{
	//根据openid查找数据
	public static function GetAll()
    {
        $list = Banner::where('display=1')->paginate(6);
        return $list;
    }
    
}
 ?>