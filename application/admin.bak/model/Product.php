<?php
namespace app\admin\model;
use think\Model;
use think\Db;
use think\Validate;
class Product extends Model
{
    //获取所有的数据
    public static function GetAll()
    {
    	$result = db::name('product')->where('display=1')->paginate(15,false,['query'=>request()->param()]);
    	return $result;
    }
	//执行添加
    public static function AddData($data)
    {
		
        $rule = [
            'title'  =>  'require',     

        ];
        $msg = [
            'title.require'  =>  '标题不能为空',     
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
		$Product = New Product;
        $result = $Product->save($data);
		
        if ($result === false) {
            return  json_encode(['code'=>0,'meg'=>$Product->getError()]);
        }else{
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }
    }
	/**
     * 查找用户的单个数据
     */
    public static function GetOne($id)
    {
        $result = Product::find($id);
        return $result;
    }
	//执行修改
    public static function UpdateData($id,$data)
    {
        $Product = New Product;
        $result = $Product->save($data,['id'=>$id]);
        return $result;
    }
	//执行删除
    public static function DeleteData($id)
    {
		$Product = New Product;
		$data['display'] = 2;
        $result = $Product->save($data,['id'=>$id]);
        return $result;
    }
	
	
	
	
	
	
	
	
	
	
    
    
    
    
}