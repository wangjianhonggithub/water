<?php 
namespace app\index\model;
use think\Model;
class Advantage extends Model
{
	//查询数据
	public static function GetAll()
    {
        $list = Advantage::order('id','asc')->paginate(15);
        return $list;
    }
    
}
 ?>