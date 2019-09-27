<?php 
namespace app\index\controller;
use think\Loader;
use think\Db;
use app\index\controller\Base;
class Goods extends Base
{
	//
	public function about()
    {
        return $this->fetch('index/about');
    }
	
	public function advantages()
    {
        return $this->fetch('index/advantages');
    }
	public function case1()
    {
        return $this->fetch('index/case');
    }
	public function details1()
    {
        return $this->fetch('index/case-details');
    }
	public function news()
    {
        return $this->fetch('index/news');
    }
	public function details()
    {
        return $this->fetch('index/news-details');
    }
	public function problem()
    {
        $data = Db::name('questionbanner')->order('id','desc')->limit('3')->select();
        return $this->fetch('index/problem',['data'=>$data]);
    }
	public function product()
    {
        $data = Db::name('servicecommitment')->select();
        return $this->fetch('index/product',['data'=>$data]);
    }
	public function service()
    {
        return $this->fetch('index/service');
    }
	public function service_details()
    {
        return $this->fetch('index/service-details');
    }
    
}
 ?>