<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Banner as BannerModel;
/**
* 登录
*/
use think\Db;
use think\Validate;
class Banner extends Base
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
		$list = BannerModel::GetAll();
		return $this->fetch("Banner/index",['list'=>$list]);
	}
	public function add(){
		return $this->fetch('Banner/add');
	}
	public function DoAdd(){
		$data = $_POST;
		
        $rule = [
            'banner_name'  =>  'require',      
        ];
        $msg = [
            'banner_name.require'  =>  '标题不能为空',     
        ];
		
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
		
		if (request()->file('img')) {
            $data['banner_img'] = parent::UploadTirImg('img');
        }else{
            echo json_encode(["code"=>2,"meg"=>"请选择要上传的图片"]);   
            die;
        } 
		$data['addtime'] = time();  
		$result = BannerModel::AddData($data);
		echo $result;
	}
	public function update($id){
		$con = BannerModel::GetOne($id);
		return $this->fetch('Banner/update',['con'=>$con]);
	}
	public function DoUpdate(){
		$data = $_POST;
		
        $rule = [
            'banner_name'  =>  'require',      
        ];
        $msg = [
            'banner_name.require'  =>  '标题不能为空',     
        ];
		
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
		
		if (request()->file('img')) {
            $data['banner_img'] = parent::UploadTirImg('img');
        }
		
		$data['addtime'] = time();  
		$result = BannerModel::UpdateData($data);
		echo $result;
	}
	public function delete(){
		 
		$id = $_GET['id'];
		//return json_encode(['code'=>1,'meg'=>$id]);
		$result = BannerModel::DeleteData($id);
		echo $result ;
	}
	
}