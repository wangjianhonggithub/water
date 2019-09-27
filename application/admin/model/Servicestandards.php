<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/19
 * Time: 15:20
 */

namespace app\admin\model;
use think\Model;

class Servicestandards extends Model
{
    //获取所有的数据
    public static function getAll()
    {
        $result = Servicestandards::select();
        return $result;
    }

    public function updataOne($id,$content)
    {
        $result = Servicestandards::where('id',$id)
            ->update(['content' => $content]);
        return $result;
    }
}