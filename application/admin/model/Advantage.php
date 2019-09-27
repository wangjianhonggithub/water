<?php
namespace app\admin\model;
use think\Model;
class Advantage extends Model
{
    //获取所有的数据
    public static function GetAll()
    {
    	$result = Advantage::order('id', 'asc')->select();
    	return $result;
    }
    /**
     * 查找用户的单个数据
     */
    public static function GetOne($id)
    {
        $result = Advantage::find($id);
        return $result;
    }
    
    //执行修改
    public static function UpdateData($data)
    {
        $Advantage = New Advantage;
        $result = $Advantage->save($data,['id'=>$data['id']]);
        if ($result) {
            echo json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            echo json_encode(['code'=>0,'meg'=>'操作失败']);
        }
    }
    
}