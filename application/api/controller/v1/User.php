<?php 
namespace app\api\controller\v1;
/**
* 用户接口
*/
use think\Controller;
use app\index\model\User as UserModel;
use think\Db;
use app\api\service\UserToken;
class User extends Controller
{
	/**
	 * 小程序登录接口
	 * @Author   CarLos(翟)
	 * @DateTime 2018-06-01
	 * @Email    carlos0608@163.com
	 * @param    string             $code      [description]
	 * @param    string             $nickName  [description]
	 * @param    string             $avatarUrl [description]
	 */
	public function UserToken($code='',$nickName='',$avatarUrl='')
	{
		$wx = new UserToken($code,$nickName,$avatarUrl);
        $user_id = $wx->get();
        return json_encode($user_id);
	}
}

?>