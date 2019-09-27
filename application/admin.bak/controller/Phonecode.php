<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/18
 * Time: 14:23
 */

namespace app\admin\controller;
use app\admin\controller\Base;
use think\Request;

class Phonecode extends Base
{
    public function index(){
        $rs = [];
        $rs['phone'] = file_get_contents($_SERVER['DOCUMENT_ROOT']."/phone.txt");
        $rs['code'] = file_get_contents($_SERVER['DOCUMENT_ROOT']."/twocode.txt");
        $this->assign('rs',$rs);
        return $this->fetch('Phonecode/index');
    }

    public function ajaxUpdataPhone(Request $request){
        $data = $request->post();
        $phone = $data['phone'];
        $save = file_put_contents($_SERVER['DOCUMENT_ROOT']."/phone.txt", $phone); //如果文件不存在创建文件，并写入内容
        $rs =[];
        if($save){
            $rs['code'] = '0';
            $rs['msg'] = '修改成功';
        }else{
            $rs['code'] = '1';
            $rs['msg'] = '修改失败';
        }
        echo json_encode($rs);
    }

    public function upDataCode(){
        $file = request()->file('code');
        if($file) {
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads');
            if ($info) {
                $save = file_put_contents($_SERVER['DOCUMENT_ROOT']."/twocode.txt", date("Ymd",time())."/".$info->getFilename()); //如果文件不存在创建文件，并写入内容
                // 成功上传后 获取上传信息
                // 输出 jpg
                //echo $info->getExtension();
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                //echo $info->getSaveName();
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
               // echo $info->getFilename();
            } else {
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        return $this->success('修改成功', '/admin/Phonecode');
    }
}