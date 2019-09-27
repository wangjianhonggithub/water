<?php 
namespace app\index\model;
use think\Model;
use think\Validate;
class Offer extends Model
{
	//提交数据
	public static function DataAdd($data)
    {
		//验证数据
		$rule = [
            'username'  =>  'require',     
            'tel'  =>  'require|max:11|/^1[3-8]{1}[0-9]{9}$/',
			'area'  =>  'require|number', 
			'province'  =>  'require', 
			'city'  =>  'require', 
        ];
        $msg = [
            'username.require'  =>  '用户名不能为空',     
            'tel.require'  =>  '电话不能为空', 
			'tel.max' => '电话长度必须11位',
			'tel./^1[3-8]{1}[0-9]{9}$/' => '电话不合法',
			'area.require'  =>  '面积不能为空',
			'area.number' =>'面积必须是数字',
			'province.require'  =>  '省份不能为空', 
			'city.require'  =>  '城市不能为空不能为空', 
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return json_encode(['code'=>'100','msg'=>$v->getError()]);
        }
		
		$offer = new Offer;
		$re = $offer->save($data);
		if($re){
			return json_encode(['code'=>'1001','msg'=>'添加成功']);
		}else{
			return json_encode(['code'=>'1002','msg'=>'与服务器失去联系']);
		}
		
    }
    
}
 ?>