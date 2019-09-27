<?php
namespace app\admin\controller;
use app\admin\controller\Base;
/**
* 登录
*/
use think\Db;
use think\Validate;
use app\admin\model\Aboult as AboultModel;
class Aboult extends Base
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
		$ab = new AboultModel();
		$details = $ab->getOne();
		return $this->fetch("About/details",['details'=>$details]);
	}
	public function edit(){
		$data = $_POST;
		
        $rule = [
            'tel'  =>  'require',     
            'phone'  =>  'require', 
        ];
        $msg = [
            'tel.require'  =>  '电话不能为空',     
            'phone.require'  =>  '座机不能为空', 
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
        $id = $data['id'];
        unset($data['id']);
        $ab = new AboultModel();
		$result = $ab->updataOne($id,$data);
		//return json_encode(['code'=>0,'meg'=>$data['id']]);
        if ($result) {
            return json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>1,'meg'=>'操作失败']);
        }
		
	}
	
}