<?php 
namespace app\index\model;
use think\Model;
class Consultation extends Model
{
	//根据openid查找数据
	public static function GetAll()
    {
        $list = Consultation::where('display=1')->order('id', 'desc')->paginate(5);
        return $list;
    }
    
}
 ?>