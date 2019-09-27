<?php
namespace app\admin\model;
use think\Model;
use think\Db;
use think\Validate;
class Service_nav extends Model
{
    //获取所有的数据
    public static function GetAll()
    {
    	$result = Service_nav::where('display=1')->paginate(15,false,['query'=>request()->param()]);
    	return $result;
    }
	//执行添加
    public static function AddData($data)
    {
		
        $rule = [
            'title'  =>  'require',     

        ];
        $msg = [
            'title.require'  =>  '分类不能为空',     
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
		$Service_nav = New Service_nav;
        $result = $Service_nav->save($data);
		
        if ($result === false) {
            return  json_encode(['code'=>0,'meg'=>$Service_nav->getError()]);
        }else{
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }
    }
	/**
     * 查找用户的单个数据
     */
    public static function GetOne($id)
    {
        $result = Service_nav::find($id);
        return $result;
    }
	//执行修改
    public static function UpdateData($id,$data)
    {
        $Service_nav = New Service_nav;
        $result = $Service_nav->save($data,['id'=>$id]);
        return $result;
    }
	//执行删除
    public static function DeleteData($id)
    {
		$Service_nav = New Service_nav;
		$data['display'] = 2;
        $result = $Service_nav->save($data,['id'=>$id]);
        return $result;
    }

    public function nGetAll(){
        $rs = Service_nav::select();
        return $rs;
    }
	
	
	
	
	
	
	
	
    
    
    
    
}