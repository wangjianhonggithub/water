<?php
namespace app\admin\model;
use think\Model;
use think\Db;
use think\Validate;
class Offer extends Model
{
    //获取所有的数据
    public static function GetAll()
    {
    	$result = db::table('knight_offer')->where('display=1')->paginate(15,false,['query'=>request()->param()]);
    	return $result;
    }
	//删除
	public static function DeleteData($id){
		$data['display'] = 2;
		$offer = new Offer;
		$result = $offer->save($data,['id'=>$id]);
		if ($result) {
            echo json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            echo json_encode(['code'=>1,'meg'=>'操作失败']);
        }
	}
	
	
	
	
	
	
	
	
	
	
	
    
    
    
    
}