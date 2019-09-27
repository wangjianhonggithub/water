<?php
namespace app\admin\controller;
use think\Loader;
use think\Db;
use app\admin\controller\Base;
use app\admin\model\Service as ServiceModel;
use app\admin\model\Service_nav as Service_navModel;
use think\Request;


class Servicex extends Base
{
	
    /**
     * @return mixed
     * 服务项目列表
     *
     */
	public function index(){
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
    public function details(Request $request){
        $data = $request->get();
        $servi = new ServiceModel();
        $rs = $servi->GetOne($data['id']);

        $service_nav = new Service_navModel();
        $rsa = $service_nav->GetOne($rs['sid']);

        $rsv = $service_nav->nGetAll();

        $this->assign('rs',$rs);
        $this->assign('rsa',$rsa);
        $this->assign('rsv',$rsv);
        return $this->fetch();
    }

     /**
     * @return mixed
     * 添加页面
     */
    public function add(){
        $service_nav = new Service_navModel();
        $rs = $service_nav->nGetAll();
        $this->assign('rs',$rs);
        return $this->fetch();
    }


     /**
     * @param Request $request
     * 添加
     */
    public function doadd(Request $request){
        $data = $request->post();
        $data['img'] = parent::UploadTirImg('img');
        $data['addtime'] = time();
        $data['display'] = 1;
        $servi = new ServiceModel();
        $rs = $servi->nAdd($data);
        if ($rs) {
            echo json_encode(['code'=>1,'msg'=>'操作成功']);
        }else{
            echo json_encode(['code'=>0,'msg'=>'操作失败']);
        }
    }

    /**
     * @param Request $request
     * 修改
     */
    public function updata(Request $request){
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
    public function del(Request $request){
        $data = $request->post();
        $servi = new ServiceModel();
        $rs = $servi->DeleteData($data['id']);
        if ($rs) {
            echo json_encode(['code'=>1,'meg'=>'操作成功']);
        }else{
            echo json_encode(['code'=>0,'meg'=>'操作失败']);
        }
    }
	
	
	   
    public function ajaxServicex(){
        $servi = new ServiceModel();
        $rs = $servi->lastService(5);
        echo json_encode($rs);
    }
	
	
	
	
	
    
    
    
    

    
}
