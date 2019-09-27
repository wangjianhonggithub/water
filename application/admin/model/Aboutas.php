<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Aboutas extends Model
{
    //获取所有的数据
    public static function getOne()
    {
    	$result = Aboutas::where('id',1)->find();
    	return $result;
    }
	
    //获取所有的数据
    public static function updataOne($id,$data)
    {
    	$result = Aboutas::where("id",$id)->update($data);
    	return $result;
    }
}