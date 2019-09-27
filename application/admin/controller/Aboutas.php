<?php
namespace app\admin\controller;
use app\admin\controller\Base;
/**
* 登录
*/

use app\admin\model\Aboutas as AboutasModel;
class Aboutas extends Base
{
	
	public function index()
	{
		$ab = new AboutasModel();
		$rs = $ab->getOne();
		$this->assign('rs',$rs);
		return $this->fetch('Aboutas/index');
	}
	public function edit(){
		$data = $_POST;

        $id = $data['id'];
        $data['content'] = htmlspecialchars_decode($data['content']);
        unset($data['id']);
        $ab = new AboutasModel();
		$result = $ab->updataOne($id,$data);
		//return json_encode(['code'=>0,'meg'=>$data['id']]);
        if ($result) {
            return json_encode(['code'=>0,'meg'=>'操作成功']);
        }else{
            return json_encode(['code'=>1,'meg'=>'操作失败']);
        }
		
	}
	
	public function ajaxAboutas(){
		$ab = new AboutasModel();
		$rs = $ab->getOne();
		echo json_encode($rs);
	}

}