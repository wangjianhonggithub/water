<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/18
 * Time: 10:46
 */

namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\MenuM;
use think\Request;


class Menu extends Base
{
    public function index(){
        $menum = new MenuM();
        $rs = $menum->getAll();
        $this->assign('rs',$rs);
        return $this->fetch('Menu/index');
    }
    /*
     * 暂未开发
     */

    public function add(){
        
        return $this->fetch('Menu/add');
    }
    /**
     * 修改导航信息
     * @param $id   导航id
     * @return mixed
     *
     */
    public function update($id){
        $menum = new MenuM();
        $rs = $menum->getOne($id);
        $this->assign('rs',$rs);
        return $this->fetch('Menu/update');
    }

    public function ajaxUpdate(Request $request){
        $data = $request->post();
        $menum = new MenuM();
        $rs =[];
        if($menum->upDateOne($data['id'],$data) == 1){
            $rs['code'] = '0';
            $rs['msg'] = '修改成功';
        }else{
            $rs['code'] = '1';
            $rs['msg'] = '修改失败';
        }
        echo json_encode($rs);
    }
}