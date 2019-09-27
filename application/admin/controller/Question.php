<?php
namespace app\admin\controller;
use app\admin\controller\Base;
/**
* 登录
*/
use think\Db;
use think\Validate;
class Question extends Base
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
		$list = db::name('question')->order('id desc')->where("display=1")->paginate(15,false,['query'=>request()->param()]);
		$page = $list->render();
//		p($list);die();
		return $this->fetch("Question/index",['list'=>$list,'page'=>$page]);
	}
	//添加
	public function add(){
		return $this->fetch("Question/add");
	}
	//添加操作
	public function Doadd(){
		$data = $_POST;
        $rule = [
            'title'  =>  'require',     
            'content'  =>  'require', 
        ];
        $msg = [
            'title.require'  =>  '标题不能为空',     
            'content.require'  =>  '回答不能为空', 
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
		$data['addtime'] = time();
		$result = db::name('question')->insert($data);
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
		
	}
	//修改
	public function update($id){
		$quest = db::name('question')->where('id',$id)->find();
		return $this->fetch('Question/update',['quest'=>$quest]);
	}
	//修改操作
	public function doupdate(){
		$data = $_POST;
        $rule = [
            'title'  =>  'require',     
            'content'  =>  'require', 
        ];
        $msg = [
            'title.require'  =>  '标题不能为空',     
            'content.require'  =>  '回答不能为空', 
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
			return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
		$data['addtime'] = time();
		$result = db::name('question')->where('id',$data['id'])->update($data);
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
	}
	//删除
	public function delect($id){
		$data['display'] = 2;
		$result = db::table('knight_question')->where('id',$id)->update($data);
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
	}

	public function banner()
    {
        $list = Db::name('questionbanner')->order('id','desc')->select();
        return $this->fetch("Question/banner",['list'=>$list]);
    }

    public function addbanner()
    {
        return $this->fetch("Question/addbanner");
    }

    public function banneradd()
    {
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
        $data['created_at'] = time();
        $data['updated_at'] = time();
        $result = db::name('questionbanner')->insert($data);
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
    }

    public function banneredit($id)
    {
        $data = Db::name('questionbanner')->where('id',$id)->find();
        return $this->fetch('Question/editbanner',['data'=>$data]);

    }

    public function bannerupdate(){
        $data = $_POST;
        $rule = [
            'id'    =>  'require',
            'title'  =>  'require',
        ];
        $msg = [
            'title.require'  =>  '标题不能为空',
            'id.require'  =>  '数据错误',
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
            return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
        $data['updated_at'] = time();
        $result = db::name('questionbanner')->where('id',$data['id'])->update($data);
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
    }

    public function bannerdelete($id)
    {
        $result = db::name('questionbanner')->where('id',$id)->delete();
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
    }
	
}