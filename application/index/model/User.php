<?php 
namespace app\index\model;
use think\Model;
class User extends Model
{
	//根据openid查找数据
	public static function getByOpenID($openid)
    {
        $user = User::where('openid', '=', $openid)
            ->find();
        return $user;
    }
    //获取所有的数据
    public static function GetUserAll(){
    	$GetUser = User::all();
    	return $GetUser;
    }
    /**
     * 查找用户的单个数据
     */
    public static function GetUserOne($id){
        $result = User::find($id);
        return $result;
    }
}
 ?>