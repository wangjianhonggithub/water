<?php
namespace app\admin\model;
use think\Model;
use think\Db;
use think\Validate;
class Industry extends Model
{
    //获取所有的数据
    public static function GetAll()
    {
    	$result = Industry::where('display=1')->paginate(15,false,['query'=>request()->param()]);
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
		$Industry = New Industry;
        $result = $Industry->save($data);
		
        if ($result === false) {
            return  json_encode(['code'=>0,'meg'=>$Industry->getError()]);
        }else{
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }
    }
	/**
     * 查找用户的单个数据
     */
    public static function GetOne($id)
    {
        $result = Industry::find($id);
        return $result;
    }
	//执行修改
    public static function UpdateData($id,$data)
    {
        $Industry = New Industry;
        $result = $Industry->save($data,['id'=>$id]);
        return $result;
    }
	//执行删除
    public static function DeleteData($id)
    {
		$Industry = New Industry;
		$data['display'] = 2;
        $result = $Industry->save($data,['id'=>$id]);
        return $result;
    }
	
	
	
	
	
	
	
	
	
	
    
    
    
    
}