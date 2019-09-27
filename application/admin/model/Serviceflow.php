<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/19
 * Time: 15:21
 */

namespace app\admin\model;
use think\Model;

class Serviceflow extends Model
{
    //获取所有的数据
    public static function getAll()
    {
        $result = Serviceflow::select();
        return $result;
    }

    public function updataOne($id,$content)
    {
        $result = Serviceflow::where('id',$id)
            ->update(['content' => $content]);
        return $result;
    }
}