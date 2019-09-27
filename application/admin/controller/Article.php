<?php
namespace app\admin\controller;
use app\admin\controller\Base;
/**
 * 登录
 */
use think\Db;
use think\Validate;
use app\admin\model\Article as ArticleModel;

class Article extends Base
{

    public function index()
    {
        $ab = new ArticleModel();
        $list = $ab->getAll();
        return $this->fetch("Article/index",['list'=>$list]);
    }

    public function add()
    {
        return $this->fetch("Article/add");
    }


    public function store()
    {
        $data = $_POST;
        $rule = [
            'title'  =>  'require',
            'content'  =>  'require',
        ];
        $msg = [
            'title.require'  =>  '标题不能为空',
            'content.require'  =>  '内容不能为空',
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
            return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
        $result = db::name('article')->insert($data);
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
    }

    public function edit($id)
    {
        $data = Db::name('article')->where('id',$id)->find();
        return $this->fetch("Article/update",['data'=>$data]);

    }

    public function update()
    {
        $data = $_POST;
        $rule = [
            'id'    =>  'require',
            'title'  =>  'require',
            'content'  =>  'require',
        ];
        $msg = [
            'id.require'   =>   '数据错误',
            'title.require'  =>  '标题不能为空',
            'content.require'  =>  '内容不能为空',
        ];
        $v = new validate($rule,$msg);
        if(!$v->check($data)){
            return  json_encode(['code'=>0,'meg'=>$v->getError()]);
        }
        $result = db::name('article')->where('id',$data['id'])->update($data);
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
    }

    public function delete($id)
    {
        if (empty($id)) {
            return json_encode(['code'=>0,'meg'=>'数据错误']);
        }
        $data = db::name('article')->find();
        if (!$data) {
            return json_encode(['code'=>0,'meg'=>'数据错误']);
        }
        $result = db::name('article')->where('id',$id)->delete();
        if ($result) {
            return json_encode(['code'=>1,'meg'=>'操作成功']);
        } else {
            return json_encode(['code'=>0,'meg'=>'操作失败']);
        }
    }

}