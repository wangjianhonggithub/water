<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/18
 * Time: 10:08
 */

namespace app\index\model;
use think\Model;

class MenuM extends Model
{
    //调取全部
    public function getAll()
    {
        $result = MenuM::where('status','1')
            ->order('display','desc')
            ->select();
        return $result;
    }
}