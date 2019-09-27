<?php 
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Help as HelpModel;
use think\Validate;

class Help extends Base

{
	//列表数据
	public function index()
    {
		$list = HelpModel::GetAll();
		return $this->fetch('Help/index',['list'=>$list]);
    }
	//添加模板
	public function add(){
		return $this->fetch("Help/add");
	}
	//添加操作
	public function doadd(){
		$data = $_POST;
		
        $rule = [
            'problem'  =>  'require',     
            'answer'  =>  'require', 
        ];
        $msg = [
            'problem.require'  =>  '标题不能为空',     
            'answer.require'  =>  '回答不能为空', 
        ];
		
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
		$data['create_time'] = time();
		$data['update_time'] = time();
		$result = HelpModel::DataAdd($data);
		if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
	}
	//修改
	public function update($id){
		$con = HelpModel::GetOne($id);
		return $this->fetch('Help/update',['con'=>$con]);
	}
	public function doupdate(){
		$data = $_POST;
        $rule = [
            'problem'  =>  'require',     
            'answer'  =>  'require', 
        ];
        $msg = [
            'problem.require'  =>  '标题不能为空',     
            'answer.require'  =>  '回答不能为空', 
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
		$data['update_time'] = time();
		$result = HelpModel::DataUpdate($data);
		if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
	}
	//删除
	public function delete(){
		$id = $_GET['id'];
		$result = HelpModel::DataDelete($id);
		if ($result) {
            return json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>1,'meg'=>'操作失败']);
        }
	}
    
}
 ?>