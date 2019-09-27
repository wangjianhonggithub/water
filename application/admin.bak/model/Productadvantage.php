<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/19
 * Time: 15:12
 */

namespace app\admin\model;
use think\Model;

class Productadvantage extends Model
{
    //获取所有的数据
    public static function getAll()
    {
        $result = Productadvantage::select();
        return $result;
    }

    public function updataOne($id,$content)
    {
        $result = Productadvantage::where('id',$id)
            ->update(['content' => $content]);
        return $result;
    }

}