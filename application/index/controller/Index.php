<?php

namespace app\index\controller;
use think\Loader;
use think\Db;
use app\index\controller\Base;

use app\index\model\MenuM;
use app\index\model\Project as ProjectModel;
use app\index\model\Consultation as ConsultationModel;
use app\index\model\Industry as IndustryModel;
use app\index\model\Banner as BannerModel;
use app\index\model\Project_details as Project_detailsModel;
use app\index\model\Aboult as AboultModel;
use app\index\model\Question as QuestionMoel;
use app\index\model\Product as ProductModel;
use app\index\model\Advantage as AdvantageModel;
use app\index\model\Service as ServiceModel;
use app\index\model\Service_nav as Service_navModel;
use think\Session;

use app\index\model\Offer as OfferModel;
use app\index\model\Help as HelpModel;

class Index extends Base
{
	//首页
    public function index(){
		//parent::Check();
        $menum = new MenuM();
        
        $rs = [];
        $rs = $menum->getAll();

        $call = [];
        $call['phone'] = file_get_contents($_SERVER['DOCUMENT_ROOT']."/phone.txt");
        $call['code'] = file_get_contents($_SERVER['DOCUMENT_ROOT']."/twocode.txt");

		//由于头部不通用，所以电话不统一，故用session统一
        Session::set('phone',$call['phone']);
        Session::set('code',$call['code']);

        $article = Db::name('article')->select();
        
        $this->assign('call',$call);
        $this->assign('rs',$rs);
        $this->assign('article',$article);
		return $this->fetch();
    }
    
	//项目案例分类
	public function project(){
		$Project_list = ProjectModel::GetAll();
		echo json_encode(['code'=>'1001','list'=>$Project_list]);
    }
	//项目案例二级分类
	public function project_con(){
		$id = $_GET['id'];
		$page = $_GET['page'];//第几页
		$number = $_GET['number'];//当前页码显示数量
		
		$list = Project_detailsModel::GetAll($id,$page,$number);
		
		//总数
		$num = Project_detailsModel::GetAll_num($id);


		if(db::name('project_details')->where('pid',$id)->find()){
			echo json_encode(['code'=>'1001','list'=>$list,'num'=>$num]);
			
		}else{
			echo json_encode(['code'=>'100','list'=>'暂无数据','num'=>0]);
			
		}
		
    }
	//项目案例详情
	public function project_con_con(){
		$id = $_GET['id'];
		$list = db::name('project_details')->where('id',$id)->find();
		if($list){
			echo json_encode(['code'=>'1001','list'=>$list]);
			
		}else{
			echo json_encode(['code'=>'100','list'=>'暂无数据']);
			
		}
		
    }
	
	//新闻资讯
	public function consultation(){

		$consultation_list = ConsultationModel::GetAll();

		echo json_encode(['code'=>'1001','list'=>$consultation_list]);
    }
	//  新闻详情
	public function consultation_con(){
		$id = $_GET['id'];
		$list = db::name('consultation')->where('id',$id)->find();
		if($list){
			echo json_encode(['code'=>'1001','list'=>$list]);
			
		}else{
			echo json_encode(['code'=>'100','list'=>'暂无数据']);
			
		}
    }
	
	
	//行业资讯
	public function industry(){
		
		$industry_list = IndustryModel::GetAll();

		echo json_encode(['code'=>'1001','list'=>$industry_list]);
    }
	public function industry_con(){
		$id = $_GET['id'];
		$list = db::name('industry')->where('id',$id)->find();
		if($list){
			echo json_encode(['code'=>'1001','list'=>$list]);
			
		}else{
			echo json_encode(['code'=>'100','list'=>'暂无数据']);
			
		}
    }
	
	
	
	//轮播图
	public function banner(){
		$list = BannerModel::GetAll();
		echo json_encode(['code'=>'1001','list'=>$list]);
		
	}
	
	
	
	//联系我们
	public function about(){
		$list = AboultModel::GetAll();
		echo json_encode(['code'=>'1001','list'=>$list]);
	}
	//常见问题
	public function question(){
		$list = QuestionMoel::GetAll();
		echo json_encode(['code'=>'1001','list'=>$list]);
	}
	//产品技术
	public function product(){
		$list = ProductModel::GetAll();
		echo json_encode(['code'=>'1001','list'=>$list]);
	}
	//我们的优势、
	public function advantage(){
		$list = AdvantageModel::GetAll();
		echo json_encode(['code'=>'1001','list'=>$list]);
	}
	//服务范围
	public function service(){
		$list = Service_navModel::GetAll();
		echo json_encode(['code'=>'1001','list'=>$list]);
	}
	//服务范围
	public function service_con(){
		$id = $_GET['id'];
		$list = ServiceModel::GetAll($id);
		echo json_encode(['code'=>'1001','list'=>$list]);
	}
	//服务范围
	public function service_con_con(){
		$id = $_GET['id'];
		$list = db::name('service')->where('id',$id)->find();
		echo json_encode(['code'=>'1001','list'=>$list]);
	}
	
	
	//提交报价
	public function offer(){
		$data = $_POST;
		$data['addtime'] = time();
		$re = OfferModel::DataAdd($data);
		
		echo $re;
	}
	//服务范围
	public function help(){
		$list = HelpModel::GetAll();
		echo json_encode(['code'=>'1001','list'=>$list]);
	}
	
	 /**
     *menu列表 接口
     */
	public function ajaxMenuList(){
        $menum = new MenuM();
        $menu = $menum->getAll();
        echo json_encode($menu);
    }
}

