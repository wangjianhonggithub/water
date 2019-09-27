<?php 
namespace app\index\model;
use think\Model;
class Question extends Model
{
	//获取所有数据
	public static function GetAll()
    {
        $list = Question::where("display=1")->order('id asc')->paginate(15,false,['query'=>request()->param()]);
        return $list;
    }
    
}
 ?>