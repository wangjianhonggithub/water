<?php
namespace app\index\controller;
use think\Loader;
use think\Db;
class Base extends \think\Controller
{
     protected function Check()
     {
     	try {
     		if(true){
                throw new \Exception("这是一个演示", 2);
     		}
     	} catch (\Exception $e) {
     		echo $e->getMessage();
     	}
     }	
	 
}
