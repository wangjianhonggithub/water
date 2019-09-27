<?php
namespace app\admin\model;
use think\Model;
use think\Db;
use think\Validate;
class Banner extends Model
{
    //获取所有的数据
    public static function GetAll()
    {
    	$banner = new Banner;
		$result = $banner->order('display','desc')->SELECT();
    	return $result;
    }
	//添加
	public static function AddData($data){
		$banner = new Banner;
		$result = $banner->save($data);
		//return json_encode(['code'=>0,'meg'=>$data['id']]);
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
	}
	public static function GetOne($id){
		$result = Banner::find($id);
		//p($result);die();
		return $result;
	}
	public static function UpdateData($data){
		$banner = new Banner;
		$count = $banner->where('display',1)
                ->count();
        if($count>=3){
            return json_encode(['code'=>0,'meg'=>'操作失败,展示的图片不能超过3张']);
        }
		$result = $banner->save($data,['id'=>$data['id']]);
		//return json_encode(['code'=>0,'meg'=>$data['id']]);
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
	}
	public static function DeleteData($id){
		//return json_encode(['code'=>1,'meg'=>'操作成功11111111111111']);
		$banner = new Banner;
		$data['display'] = 2;
		$result = $banner->save($data,['id'=>$id]);
		if ($result) {
            return json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>1,'meg'=>'操作失败']);
        }
	}
	
	 
    
}