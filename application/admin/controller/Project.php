<?php
namespace app\admin\controller;
use app\admin\controller\Base;
/**
* 登录
*/
use think\Db;
use think\Validate;
class Project extends Base
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
		$list = db::name('project')->order('addtime desc')->where('display=1')->paginate(15,false,['query'=>request()->param()]);
		$page = $list->render();
		//p($list);die();
		return $this->fetch("Project/index",['list'=>$list,'page'=>$page]);
	}
	//添加
	public function add(){
		return $this->fetch("Project/add");
	}
	//添加操作
	public function Doadd(){
		$data = $_POST;
        $rule = [
            'title'  =>  'require',     

        ];
        $msg = [
            'title.require'  =>  '标题不能为空',     
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
		$data['addtime'] = time();
		$data['display'] = 1;
		$result = db::name('project')->insert($data);
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
		
	}
	//修改
	public function update($id){
		$project = db::name('project')->where('id',$id)->find();
		//p($project);die();
		return $this->fetch('Project/update',['project'=>$project]);
	}
	//修改操作
	public function doupdate(){
		$data = $_POST;
        $rule = [
            'title'  =>  'require',     
        ];
        $msg = [
            'title.require'  =>  '标题不能为空',     
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
		$data['addtime'] = time();
		$result = db::name('project')->where('id',$data['id'])->update($data);
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
	}
	//删除
	public function delect($id){
		$data['display'] = 2;
		$result = db::name('project')->where('id',$id)->update($data);
        if ($result) {
            return json_encode(['code'=>10,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
	}
	//详情列表
	public function Project_details($id){
		$details_list = db::name('project')->field('p.title,c.id,c.content,c.title as titlename,c.addtime')
													->join('project_details c','p.id=c.pid')
													->alias('p')
													->where('c.display',1)
													->where('p.id',$id)
													->order('addtime desc')->paginate(20,false,['query'=>request()->param()]);
		$page = $details_list->render();
		return $this->fetch('Project/details_list',['details_list'=>$details_list,'page'=>$page]);
	}
	//详情添加
	public function details_add(){
		$project = db::name('project')->order('addtime desc')->where('display=1')->select();
		//p($project);
		$this->assign('project',$project);  
		return $this->fetch("Project/details_add");
	}
	//详情添加操作
	public function details_doadd(){
		$data = $_POST;
		if (request()->file('img')) {
            $data['img'] = parent::UploadTirImg('img');
        }else{
            echo json_encode(["code"=>2,"meg"=>"请选择要上传的图片"]);   
            die;
        }
        $rule = [
            'title'  =>  'require',     

        ];
        $msg = [
            'title.require'  =>  '标题不能为空',     
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
		$data['addtime'] = time();
		$data['display'] = 1;
		$result = db::name('project_details')->insert($data);
		if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
	}
	//修改详情
	public function details_update($id){
		//获取详情
		$project_con = db::name('project_details')->where('id',$id)->find();
		//获取分类
		$project = db::name('project')->where('id',$project_con['pid'])->find();
		//p($project);die();
		return $this->fetch('Project/details_update',['project'=>$project,'project_con'=>$project_con]);
	}
	//修改详情操作
	public function details_doupdate(){
		$data = $_POST;
		if (request()->file('img')) {
            $data['img'] = parent::UploadTirImg('img');
        }
        $rule = [
            'title'  =>  'require',     

        ];
        $msg = [
            'title.require'  =>  '标题不能为空',     
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
		$data['addtime'] = time();
		$result = db::name('project_details')->where('id',$data['id'])->update($data);
		if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
	}
	//删除详情
	public function details_delete($id){
		$data['display'] = 2;
		$result = db::name('project_details')->where('id',$id)->update($data);
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
	}
	
}