<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Advantage as AdvantageModel;

/**
* 登录
*/
use think\Db;
use think\Validate;
class Advantage extends Base
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
		$list = AdvantageModel::GetAll();
		return $this->fetch("Advantage/index",['list'=>$list]);
	}
	public function update($id){
		$con = AdvantageModel::GetOne($id);
		//p($con);die();
		return $this->fetch("Advantage/update",['con'=>$con]);
	}
	public function DoUpdate(){
		$data = $_POST;
		$result = AdvantageModel::UpdateData($data);
		echo $result;
	}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function add(){
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
		$result = db::table('Knight_aboult')->where("id",$data['id'])->update($data);
		//return json_encode(['code'=>0,'meg'=>$data['id']]);
        if ($result) {
            return json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>1,'meg'=>'操作失败']);
        }
		
	}
	
}