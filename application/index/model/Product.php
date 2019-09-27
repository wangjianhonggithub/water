<?php 
namespace app\index\model;
use think\Model;
class Product extends Model
{
	//获取所有数据
	public static function GetAll()
    {
        $list = Product::paginate(5);
        return $list;
    }
    
}
 ?>