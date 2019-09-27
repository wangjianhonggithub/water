<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Offer as OfferModel;
/**
* 登录
*/
use think\Db;
use think\Validate;
class Offer extends Base
{
	/**
	 * 显示登录页面
	 * @Author   CarLos(翟)
	 * @DateTime 2018-06-04
	 * @Email    carlos0608@163.com
	 * @return   [type]             [description]
	 */
	public function index()
	{
		$list = OfferModel::GetAll();
		return $this->fetch("Offer/index",['list'=>$list]);
	}
	//删除
	public function delete(){
		$id = $_GET['id'];
		$result = OfferModel::DeleteData($id);
		echo $result;
	}
	
}