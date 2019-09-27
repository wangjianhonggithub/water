<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/19
 * Time: 15:20
 */

namespace app\admin\model;
use think\Model;

class Servicecommitment extends Model
{
    //获取所有的数据
    public static function getAll()
    {
        $result = Servicecommitment::select();
        return $result;
    }

    public function updataOne($id,$content)
    {
        $result = Servicecommitment::where('id',$id)
            ->update(['content' => $content]);
        return $result;
    }
}