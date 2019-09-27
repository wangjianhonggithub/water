<?php
namespace app\admin\controller;
use think\Loader;
use think\Db;
use app\admin\controller\Base;
use app\admin\model\Industry as IndustryModel;
class Industry extends Base
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
        $data = IndustryModel::GetAll();

    	return $this->fetch('Industry/index',[
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
    	return $this->fetch('Industry/add');
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
        $result = IndustryModel::AddData($data);
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
        $list = IndustryModel::GetOne($id);
    	return $this->fetch('Industry/update',[
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
		
        $result = IndustryModel::UpdateData($id,$data);
		
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
        $result = IndustryModel::DeleteData($id);
        if ($result) {
            echo json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            echo json_encode(['code'=>1,'meg'=>'操作失败']);
        }
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
    
    
    
    

    
}
