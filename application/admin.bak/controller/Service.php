<?php
namespace app\admin\controller;
use think\Loader;
use think\Db;
use app\admin\controller\Base;
use app\admin\model\Service as ServiceModel;
use app\admin\model\Service_nav as Service_navModel;
use think\Request;


class Service extends Base
{
	/**
	 * 显示列表页
	 * @Author   CarLos(翟)
	 * @DateTime 2018-06-01
	 * @Email    carlos0608@163.com
	 * @return   [type]             [description]
	 */
    public function index(){		
		parent::CheckAdminLogin();		
		$list = Service_navModel::GetAll();    	
		return $this->fetch('Service/index_nav',['list'=>$list,]);	
	}	
	//添加	
	public function add_nav(){
		return $this->fetch('Service/add_nav');	
	}		
	//添加操作
	public function doaddnav(){
		$data = $_POST;
        $data['addtime'] = time();
        $data['display'] = 1;

        $result = Service_navModel::AddData($data);
		//return  json_encode(['code'=>0,'meg'=>'121']);
        echo $result;
	}
	//修改
	public function Service_nav_update($id){
		$list = Service_navModel::GetOne($id);
		return $this->fetch('Service/Service_nav_update',['list'=>$list]);	
	}
	//修改操作
	public function donavupdate(){
		
		$id = $_POST['id'];

        $data = $_POST;

        $data['addtime'] = time();
		           
        $result = Service_navModel::UpdateData($id,$data);
		
        if ($result) {
            echo json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            echo json_encode(['code'=>0,'meg'=>'操作失败']);
        }
		
	}
	//删除
	public function delete(){
		$id = $_GET['id'];
		$result = Service_navModel::DeleteData($id);
		if ($result) {
            echo json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            echo json_encode(['code'=>1,'meg'=>'操作失败']);
        }
	}
	
	public function index_con($id){
		$list = ServiceModel::GetAll($id);
		return $this->fetch('Service/index',['list'=>$list,]);	
	}
	//添加分类下的内容
	public function add()
    {
		$list = Service_navModel::GetAll();
    	return $this->fetch('Service/add',['list'=>$list]);
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
		if (request()->file('img')) {
            $data['img'] = parent::UploadTirImg('img');
        }
        $data['addtime'] = time();
        $data['display'] = 1;

        $result = ServiceModel::AddData($data);
		
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
        $list = ServiceModel::GetOne($id);
    	return $this->fetch('Service/update',[
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
		if (request()->file('img')) {
            $data['img'] = parent::UploadTirImg('img');
        }
        $data['addtime'] = time();
		
        $result = ServiceModel::UpdateData($id,$data);
		
        if ($result) {
            echo json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            echo json_encode(['code'=>0,'meg'=>'操作失败']);
        }
    }
	//删除
	public function delete_con()
    {
        $id = $_GET['id'];
        $result = ServiceModel::DeleteData($id);
        if ($result) {
            echo json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            echo json_encode(['code'=>1,'meg'=>'操作失败']);
        }
    }

   /**
     * @return mixed
     * 服务项目列表
     *
     */
	public function service_list(){
        $servi = new ServiceModel();
        $rs = $servi->nGetAll();
        $this->assign('rs',$rs);
        return $this->fetch();
    }

    /**
     * @param Request $request
     * @return mixed
     * 单个详情
     */
    public function servicedetails(Request $request){
        $data = $request->get();
        $servi = new ServiceModel();
        $rs = $servi->GetOne($data['id']);
        $this->assign('rs',$rs);
        return $this->fetch();
    }

    /**
     * @return mixed
     * 添加页面
     */
    public function serviceadd(){
        $service_nav = new Service_navModel();
        $rs = $service_nav->nGetAll();
        
        return $this->fetch();
    }

    /**
     * @param Request $request
     * 添加
     */
    public function servicedoadd(Request $request){
        $data = $request->post();
        $data['addtime'] = time();
        $servi = new ServiceModel();
        $rs = $servi->AddData($data);
        echo $rs;
    }

    /**
     * @param Request $request
     * 修改
     */
    public function serviceupdata(Request $request){
        $data = $request->post();
        $where['id'] = $data['id'];
        unset($data['id']);
        $servi = new ServiceModel();
        $rs = $servi->UpdateData($where['id'],$data);
        if ($rs) {
            echo json_encode(['code'=>1,'msg'=>'操作成功']);
        }else{
            echo json_encode(['code'=>0,'msg'=>'操作失败']);
        }
    }



    /**
     * @param Request $request
     * 删除
     */
    public function servicedel(Request $request){
        $data = $request->post();
        $servi = new ServiceModel();
        $rs = $servi->DeleteData($data['id']);
        if ($rs) {
            echo json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            echo json_encode(['code'=>0,'meg'=>'操作失败']);
        }
    }
	
	
	
	
	
	
	
	
    
    
    
    

    
}
