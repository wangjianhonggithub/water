<?php
namespace app\admin\controller;

use app\admin\model\Productadvantage;
use app\admin\model\Servicestandards;
use app\admin\model\Serviceflow;
use think\Loader;
use think\Db;
use app\admin\controller\Base;
use app\admin\model\Product as ProductModel;
use think\Request;
class Product extends Base
{
	/**
	 * 显示列表页
	 * @Author   CarLos(翟)
	 * @DateTime 2018-06-01
	 * @Email    carlos0608@163.com
	 * @return   [type]             [description]
	 */
    public function index()
    {
        parent::CheckAdminLogin();
        $data = ProductModel::GetAll();

    	return $this->fetch('Product/index',[
            'list'=>$data,
        ]);
    }
	/**
     * 显示添加也页面
     * @Author   CarLos(翟)
     * @DateTime 2018-06-01
     * @Email    carlos0608@163.com
     */
    public function add()
    {
    	return $this->fetch('Product/add');
    }
	/**
     * 执行添加
     * @Author   CarLos(翟)
     * @DateTime 2018-06-01
     * @Email    carlos0608@163.com
     */
    public function doadd()
    {
		
        $data = $_POST;
        $data['addtime'] = time();
        $data['display'] = 1;

        $result = ProductModel::AddData($data);
		//return  json_encode(['code'=>0,'meg'=>'121']);
        echo $result;
    }
	/**
     * 显示修改页面
     * @Author   CarLos(翟)
     * @DateTime 2018-06-01
     * @Email    carlos0608@163.com
     * @return   [type]             [description]
     */
    public function update($id)
    {
        $list = ProductModel::GetOne($id);
    	return $this->fetch('Product/update',[
            'list'=>$list,
        ]);
    }
	/**
     * 执行修改
     * @Author   CarLos(翟)
     * @DateTime 2018-06-01
     * @Email    carlos0608@163.com
     */
    public function DoUpdate()
    {
		//return json_encode(['code'=>0,'meg'=>'操作成功123']);
        $id = $_POST['id'];
		//return json_encode(['code'=>0,'meg'=>'操作成功123']);
        $data = $_POST;
        $data['addtime'] = time();
		
        $result = ProductModel::UpdateData($id,$data);
		
        if ($result) {
            echo json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            echo json_encode(['code'=>1,'meg'=>'操作失败']);
        }
    }
	//删除
	public function delete()
    {
        $id = $_GET['id'];
        $result = ProductModel::DeleteData($id);
        if ($result) {
            echo json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            echo json_encode(['code'=>1,'meg'=>'操作失败']);
        }
    }
	
	
    //产品优势
    public function Productadvantage(){
        $productadvantage = new Productadvantage();
        $rs = $productadvantage->getAll();
        $this->assign('rs',$rs);
        return $this->fetch('Product/Productadvantage');
    }

    //服务标准
    public function Servicestandards(){
        $servicestandards = new Servicestandards();
        $rs = $servicestandards->getAll();
        $this->assign('rs',$rs);
        return $this->fetch('Product/Servicestandards');
    }

    //服务承诺


    //服务流程
    public function Serviceflow(){
        $serviceflow = new Serviceflow();
        $rs = $serviceflow->getAll();
        $this->assign('rs',$rs);
        return $this->fetch('Product/Serviceflow');
    }
    
        public function ajaxProductupdata(Request $request){
        
        $data = $request->post();
        dump($data);die;
        $rs =[];
        switch ($data['type']) {
            case "ys":
                $db = new Productadvantage();
                break;
            case "bz":
                $db = new Servicestandards();
                break;
            case "lc":
                $db = new Serviceflow();
                break;
            default:
                $rs['code'] = '1';
                $rs['msg'] = '修改失败';
                echo json_encode($rs);
        }
        unset($data['type']);
        //转二维数组
        $arr = [];
        foreach($data as $j=>$k){

            $arr[$j]['id'] = $j;
            $arr[$j]['content'] = $k;
        }

        //循环修改
        foreach($arr as $j){
            $db->updataOne($j['id'],$j['content']);
        }
        
        $rs['code'] = '0';
        $rs['meg'] = '修改成功';

        
        echo json_encode($rs);
    }
	
	//产品技术说明
    public function ajaxProductList(Request $request){
        $data = $request->get();

        $rs =[];
        switch ($data['type']) {
            case "ys":
                $db = new Productadvantage();
                break;
            case "bz":
                $db = new Servicestandards();
                break;
            case "lc":
                $db = new Serviceflow();
                break;
            default:
                $rs['code'] = '1';
                $rs['msg'] = '获取失败';
                echo json_encode($rs);
        }

        $list = $db->getAll();
        echo json_encode($list);
    }
	
	
	
	
	
	
	
	
	
    
    
    
    

    
}
