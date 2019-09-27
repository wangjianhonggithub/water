<?php 
namespace app\index\model;
use think\Model;
class Help extends Model
{
	//获取所有
	public static function GetAll()
    {
        $list = Help::where('display=1')->paginate(5);
        return $list;
    }
    
}
 ?>