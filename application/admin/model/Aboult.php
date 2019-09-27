<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Aboult extends Model
{
    //获取所有的数据
    public static function getOne()
    {
    	$result = Aboult::find();
    	return $result;
    }
	
    //获取所有的数据
    public static function updataOne($id,$data)
    {
    	$result = Aboult::where("id",$id)->update($data);
    	return $result;
    }
}