<?php
namespace app\admin\model;
use think\Model;
use think\Db;

class Article extends Model
{
    //获取所有的数据
    public static function getAll()
    {
    	$result = Article::All();
    	return $result;
    }

}