<?php 
namespace app\admin\model;
use think\Model;
class Help extends Model
{
	//获取全部
	public static function GetAll()
    {
        $list = Help::where('display=1')->paginate(15,false,['query'=>request()->param()]);
        return $list;
    }
	//添加
	public static function DataAdd($data){
		$help = new Help;
		$result = $help->save($data);
		return $result;
	}
	//根据id查找数据
	public static function GetOne($id)
    {
        $list = Help::find($id);
        return $list;
    }
	//修改操作
	public static function DataUpdate($data){
		$help = new Help;
		$result = $help->save($data,['id'=>$data['id']]);
		return $result;
	}
	//删除
	public static function DataDelete($id){
		$data['display'] = 2;
		$help = new Help;
		$result = $help->save($data,['id'=>$id]);
		return $result;
	}
   
}
 ?>