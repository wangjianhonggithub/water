<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/18
 * Time: 10:20
 */

namespace app\admin\model;

use think\Model;

class MenuM extends Model
{
    //调取全部
    public function getAll()
    {
        $result = MenuM::order('display','desc')
            ->select();
        return $result;
    }

    public function getOne($id){
        $result = MenuM::where('id',$id)
            ->find();
        return $result;
    }

    public function upDateOne($id,$arr){
        $result = MenuM::where('id',$id)
            ->update($arr);
            return $result;
    }



}