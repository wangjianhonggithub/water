<?php
/**
 * 路由注册
 *
 * 以下代码为了尽量简单，没有使用路由分组
 * 实际上，使用路由分组可以简化定义
 * 并在一定程度上提高路由匹配的效率
 */

// 写完代码后对着路由表看，能否不看注释就知道这个接口的意义
use think\Route;
/**
 * 接口部分
 */
//获取登录小程序的用户存入数据库
Route::post('api/:version/token/user', 'api/:version.User/UserToken');

Route::get('/Admin/Login','admin/Login/login');
/**
 * 执行登录
 */
Route::post('/Admin/DoLogin','admin/Login/DoLogin');

Route::get('/Admin/DoLogin','admin/Login/DoLogin');


/**
 * 后台页面显示
 */        //模拟路由       控制器
Route::get('/Admin','admin/Index/index');
//栏目管理
Route::get('/Admin/Column','admin/Column/index');
//显示修改
Route::get('/Admin/Column/update/:id','admin/Column/update');
/**
 * 管理员
 */
Route::get('/Admin/Administrator','admin/Administrator/index');
//修改
Route::get('/Admin/Administrator/update/:id','admin/Administrator/update');
//联系我们
Route::get('/Admin/aboult','admin/Aboult/index');
Route::post('/Aboult/DoAdd','admin/Aboult/add');
//关于我们
Route::get('/Admin/Aboutas','admin/Aboutas/index');
//常见问题
Route::get('/Admin/question','admin/Question/index');
Route::get('/Admin/add','admin/Question/add');
Route::post('/Admin/Question/DoAdd','admin/Question/doadd');
Route::get('/Admin/update/:id','admin/Question/update');
Route::post('/Admin/Question/DoUpdate','admin/Question/doupdate');
Route::get('/Admin/Question/delete','admin/Question/delect');
//项目案例
Route::get('/Admin/Project','admin/Project/index');
Route::get('/Admin/Project_add','admin/Project/add');
Route::post('/Admin/Project/DoAdd','admin/Project/Doadd');
Route::get('/Admin/Project_update/:id','admin/Project/update');
Route::post('/Admin/Priject/DoUpdate','admin/Project/doupdate');
Route::get('/Admin/Project/delete','admin/Project/delect');

Route::get('/Admin/Project_details/:id','admin/Project/Project_details');
Route::get('/Admin/Project_details_add','admin/Project/details_add');
Route::post('/Admin/Project/details_DoAdd','admin/Project/details_doadd');
Route::get('/Admin/Project_details_update/:id','admin/Project/details_update');
Route::post('/Admin/Project/details_DoUpdate','admin/Project/details_doupdate');
Route::get('/Admin/Project/details_delete','admin/Project/details_delete');

//最新资讯
Route::get('/Admin/Consultation','admin/Consultation/index');
Route::get('/Admin/Consultation_add','admin/Consultation/add');
Route::post('/Admin/Consultation/DoAdd','admin/Consultation/doadd');
Route::get('/Admin/Consultation_update/:id','admin/Consultation/update');
Route::post('/Admin/consultation/DoUpdate','admin/Consultation/doupdate');
Route::get('/Admin/Consultation/delete','admin/Consultation/delect');

//行业资讯
Route::get('/Admin/Industry','admin/Industry/index');
Route::get('/Admin/Industry_add','admin/Industry/add');
Route::post('/Admin/Industry/DoAdd','admin/Industry/doadd');
Route::get('/Admin/Industry_update/:id','admin/Industry/update');
Route::post('/Admin/Industry/DoUpdate','admin/Industry/DoUpdate');
Route::get('/Admin/Industry/delete','admin/Industry/delete');

//导航栏
Route::get('/Admin/Menu','admin/Menu/index');
//修改电话及二维码
Route::get('/Admin/Phonecode','admin/Phonecode/index');

//服务范围
Route::get('/Admin/Service','admin/Service/index');
Route::get('/Admin/Service_nav_add','admin/Service/add_nav');
Route::post('/Admin/DoAddNav','admin/Service/doaddnav');
Route::get('/Admin/Service_nav_update/:id','admin/Service/Service_nav_update');
Route::post('/Admin/DoNavUpdate','admin/Service/donavupdate');
Route::get('/Admin/Service_nav/delete','admin/Service/delete');

Route::get('/Admin/index_con/:id','admin/Service/index_con');
Route::get('/Admin/Service_add','admin/Service/add');

//服务项目
Route::get('/Admin/Servicex','admin/Servicex/index');
Route::get('/Admin/ServicexAdd','admin/Servicex/add');
Route::get('/Admin/ServicexDetails','admin/Servicex/details');


Route::post('/Admin/Service/DoAdd','admin/Service/doadd');
Route::get('/Admin/Service_update/:id','admin/Service/update');
Route::post('/Admin/Service/DoUpdate','admin/Service/DoUpdate');
Route::get('/Admin/Service/delete','admin/Service/delete_con');








//产品技术
Route::get('/Admin/Product','admin/Product/index');
Route::get('/Admin/Product_add','admin/Product/add');
Route::post('/Admin/Product/DoAdd','admin/Product/doadd');
Route::get('/Admin/Product_update/:id','admin/Product/update');
Route::post('/Admin/Product/DoUpdate','admin/Product/DoUpdate');
Route::get('/Admin/Product/delete','admin/Product/delete');


Route::get('/Admin/Product','admin/Product/index');
//产品优势
Route::get('/Admin/Productadvantage','admin/Product/Productadvantage');
//服务标准
Route::get('/Admin/Servicestandards','admin/Product/Servicestandards');
//服务承诺
Route::get('/Admin/Servicecommitment','admin/Product/Servicecommitment');
//服务流程
Route::get('/Admin/Serviceflow','admin/Product/Serviceflow');


//我们的优势
Route::get('/Admin/Advantage','admin/Advantage/index');
Route::get('/Admin/Advantage/update/:id','admin/Advantage/update');
Route::post('Advantage/DoUpdate','admin/Advantage/DoUpdate');
//报价信息
Route::get('/Admin/Offer','admin/Offer/index');
Route::get('/Admin/Offer/delete','admin/Offer/delete');

//轮播
Route::get('/Admin/Banner','admin/Banner/index');
Route::get('/Admin/Banner/add','admin/Banner/add');
Route::post('/Admin/Banner/DoAdd','admin/Banner/DoAdd');
Route::get('/Admin/Banner/update/:id','admin/Banner/update');
Route::post('/Admin/Banner/DoUpdate','admin/Banner/DoUpdate');
Route::get('/Admin/Banner/delete','admin/Banner/delete');

//帮助中心--改名字
Route::get('/Admin/Help','admin/Help/index');
Route::get('/Admin/Help_add','admin/Help/add');
Route::post('/Admin/Help/DoAdd','admin/Help/doadd');
Route::get('/Admin/Help_update/:id','admin/Help/update');
Route::post('/Admin/Help/DoUpdate','admin/Help/doupdate');
Route::get('/Admin/Help/delete','admin/Help/delete');








/**前台接口文件***/
Route::get('/index/project','index/Index/project');
Route::get('/index/project_con','index/Index/project_con');
Route::get('/index/project_con_con','index/Index/project_con_con');

Route::get('/index/consultation','index/Index/consultation');
Route::get('/index/consultation_con','index/Index/consultation_con');

Route::get('/index/industry','index/Index/industry');
Route::get('/index/industry_con','index/Index/industry_con');


Route::get('/index/banner','index/Index/banner');
Route::get('/index/about','index/Index/about');
Route::get('/index/question','index/Index/question');
Route::get('/index/product','index/Index/product');
Route::get('/index/advantage','index/Index/advantage');
Route::get('/index/service','index/Index/service');
Route::get('/index/service_con','index/Index/service_con');
Route::get('/index/service_con_con','index/Index/service_con_con');

Route::post('/index/offer','index/Index/offer');
Route::get('/index/help','index/Index/help');

//前台方法
Route::get('/','index/Index/index');
Route::get('/about','index/Goods/about');

Route::get('/advantages','index/Goods/advantages');
Route::get('/case','index/Goods/case1');
Route::get('/case-details','index/Goods/details1');
Route::get('/news','index/Goods/news');
Route::get('/news-details','index/Goods/details');
Route::get('/problem','index/Goods/problem');
Route::get('/product','index/Goods/product');
Route::get('/service','index/Goods/service');
Route::get('/service-details','index/Goods/service_details');

//menu接口
Route::get('/index/ajaxMenuList','index/Index/ajaxMenuList');































