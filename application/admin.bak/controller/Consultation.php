<?php
namespace app\admin\controller;
use app\admin\controller\Base;
/**
* 登录
*/
use think\Db;
use think\Validate;
class Consultation extends Base
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
		$list = db::name('Consultation')->order('addtime desc')->where('display=1')->paginate(15,false,['query'=>request()->param()]);
		$page = $list->render();
		//p($list);die();
		return $this->fetch("Consultation/index",['list'=>$list,'page'=>$page]);
	}
	//添加
	public function add(){
		return $this->fetch("Consultation/add");
	}
	//添加操作
	public function doadd(){
		
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
		$result = db::name('consultation')->insert($data);
		if ($result) {
            return json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>1,'meg'=>'操作失败']);
        }
	}
	//修改
	public function update($id){
		$consultation = db::name('consultation')->where('id',$id)->find();
		//p($consultation);die();
		return $this->fetch('Consultation/update',['consultation'=>$consultation]);
	}
	//修改操作
	public function doupdate(){
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
		$result = db::name('consultation')->where('id',$data['id'])->update($data);
		if ($result) {
            return json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>1,'meg'=>'操作失败']);
        }
	}
	//删除
	public function delect($id){
		$data['display'] = 2;
		$result = db::name('consultation')->where('id',$id)->update($data);
        if ($result) {
            return json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>1,'meg'=>'操作失败']);
        }
	}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}