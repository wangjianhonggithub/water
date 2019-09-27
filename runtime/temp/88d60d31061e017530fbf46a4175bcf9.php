<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\PHPTutorial\WWW\ankeman\public/../application/index\view\index\index.html";i:1567759176;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compitable" content="IE=edge">
		<meta name="renderer" content="webkit">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>安柯曼</title>
		<!--[if lt IE 9]>
	    <script src="js/html5shiv.min.js"></script>
	    <script src="js/respond.min.js"></script>
	    <![endif]-->
		<script type="text/javascript" src="static/index/js/jquery-1.11.0.js"></script>
		<script src="static/index/js/jquery.carousel.js"></script>
		<script type="text/javascript" src="static/index/js/index.js"></script>
		<link rel="stylesheet" href="static/index/css/carousel.css" />
		<link rel="stylesheet" type="text/css" href="static/index/css/header.css" />
		<link rel="stylesheet" href="static/index/css/footer.css" />
		<link rel="stylesheet" type="text/css" href="static/index/css/index.css" />
	</head>

	<body>
		<div id="top">
			<div class="box">
				<div class="top-mobile">联系电话：<span></span></div>
				<div class="top-email">举报邮箱:<span></span></div>
			</div>
		</div>
		<div id="header">
			<div class="box">
				<a class="logo" href="index.html">
					<img src="static/index/img/logo.jpg" />
				</a>
				<div class="nav">
		
				</div>
				<div class="service-number">
					<div class="number"><?php echo \think\Session::get('phone'); ?></div>
					<img src="static/index/img/service-number.jpg" />
				</div>
				<div id="aaa" class="nav-details">
					<img src="static/index/img/nav-details.png" />
				</div>
				<div class="nav-a">
		
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="banner-box">
				<!-- <img class="banner-item" src="static/index/img/banner1.jpg">
				<img class="banner-item" src="static/index/img/banner2.jpg"> -->
			</div>		
			<div class="pos">
				<div class="box">
					<div class="recommend">
						<div class="recommend-box">
							<div class="recommend-item">
								<div class="recommend-left">
									<img src="static/index/img/recommend-item1.png" />
								</div>
								<div class="recommend-right">
									<div class="recommend-name">除甲醛</div>
									<div class="recommend-text">纯进口产品13年高品质除甲醛服务</div>
								</div>
							</div>
							<div class="recommend-item">
								<div class="recommend-left">
									<img src="static/index/img/recommend-item2.png" />
								</div>
								<div class="recommend-right">
									<div class="recommend-name">除TVOC</div>
									<div class="recommend-text">减少室内有害化学物质</div>
								</div>
							</div>
							<div class="recommend-item">
								<div class="recommend-left">
									<img src="static/index/img/recommend-item3.png" />
								</div>
								<div class="recommend-right">
									<div class="recommend-name">杀菌</div>
									<div class="recommend-text">3分钟告别霉菌</div>
								</div>
							</div>
							<div class="recommend-item">
								<div class="recommend-left">
									<img src="static/index/img/recommend-item4.png" />
								</div>
								<div class="recommend-right">
									<div class="recommend-name">消臭分解</div>
									<div class="recommend-text">专业消臭，值得信赖</div>
								</div>
							</div>
							<div class="recommend-item">
								<div class="recommend-left">
									<img src="static/index/img/recommend-item5.png" />
								</div>
								<div class="recommend-right">
									<div class="recommend-name">抗氧化</div>
									<div class="recommend-text">消除有害的活性氧和自由基，还可以防止材料变质，并具有抗衰老作用</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			
		</div>
		<div class="service">
			<div class="box">
				<div class="service-top">
					<div class="service-box">
						<div class="service-top-item-a p-r">
							<div class="top-item-name"><?php echo (isset($article[0]['title']) && ($article[0]['title'] !== '')?$article[0]['title']:"暂无"); ?></div>
							<div class="top-item-text"><?php echo (isset($article[0]['content']) && ($article[0]['content'] !== '')?$article[0]['content']:"暂无"); ?></div>

						</div>
					</div>
					<div class="service-box">
						<div class="service-top-item-b p-r p-l">
							<div class="top-item-name"><?php echo (isset($article[1]['title']) && ($article[1]['title'] !== '')?$article[1]['title']:"暂无"); ?></div>
							<div class="top-item-text"><?php echo (isset($article[1]['content']) && ($article[1]['content'] !== '')?$article[1]['content']:"暂无"); ?></div>
						</div>
					</div>
					<div class="service-box">
						<div class="service-top-item-c p-r p-l">
							<div class="top-item-name"><?php echo (isset($article[2]['title']) && ($article[2]['title'] !== '')?$article[2]['title']:"暂无"); ?></div>
							<div class="top-item-text"><?php echo (isset($article[2]['content']) && ($article[2]['content'] !== '')?$article[2]['content']:"暂无"); ?></div>
						</div>
					</div>
					<div class="service-box">
						<div class="service-top-item-d p-l">

								<div class="top-item-name"><?php echo (isset($article[3]['title']) && ($article[3]['title'] !== '')?$article[3]['title']:"暂无"); ?></div>
								<div class="top-item-text"><?php echo (isset($article[3]['content']) && ($article[3]['content'] !== '')?$article[3]['content']:"暂无"); ?></div>

						</div>
					</div>
				</div>
				<div class="appointment-title">免费获取报价/甲醛、除味（中央空调清洗）</div>
				<div class="appointment">
					<input type="text" name="" id="appointment-name" placeholder="您的称呼" value="" />
					<input type="text" name="" id="appointment-mobile" placeholder="您的联系方式" value="" />
					<input type="text" name="" id="appointment-area" placeholder="房屋面积㎡" value="" />
					<select name="China_sf" id="s1">
						<option value=""></option>
					</select>
					<select name="China_sx" id="s2">
						<option value=""></option>
					</select>
					<a class="sub-appointment" onclick="appointment()">免费获取报价</a>
				</div>
				<div class="service-bot">
					<div class="service-box">
						<div class="service-bot-item p-r">
							<div class="service-bot-left">
									<div class="bot-item-name"><?php echo (isset($article[4]['title']) && ($article[4]['title'] !== '')?$article[4]['title']:"暂无"); ?></div>
									<div class="bot-item-text"><?php echo (isset($article[4]['content']) && ($article[4]['content'] !== '')?$article[4]['content']:"暂无"); ?></div>
							</div>
							<img src="static/index/img/service-bot-item1.png" />
						</div>
					</div>
					<div class="service-box">
						<div class="service-bot-item p-r p-l">
							<div class="service-bot-left">
									<div class="bot-item-name"><?php echo (isset($article[5]['title']) && ($article[5]['title'] !== '')?$article[5]['title']:"暂无"); ?></div>
									<div class="bot-item-text"><?php echo (isset($article[5]['content']) && ($article[5]['content'] !== '')?$article[5]['content']:"暂无"); ?></div>
							</div>
							<img src="static/index/img/service-bot-item2.png" />
						</div>
					</div>
					<div class="service-box">
						<div class="service-bot-item p-r p-l">
							<div class="service-bot-left">
									<div class="bot-item-name"><?php echo (isset($article[6]['title']) && ($article[6]['title'] !== '')?$article[6]['title']:"暂无"); ?></div>
									<div class="bot-item-text"><?php echo (isset($article[6]['content']) && ($article[6]['content'] !== '')?$article[6]['content']:"暂无"); ?></div>
							</div>
							<img src="static/index/img/service-bot-item3.png" />
						</div>
					</div>
					<div class="service-box">
						<div class="service-bot-item p-l">
							<div class="service-bot-left">
									<div class="bot-item-name"><?php echo (isset($article[7]['title']) && ($article[7]['title'] !== '')?$article[7]['title']:"暂无"); ?></div>
									<div class="bot-item-text"><?php echo (isset($article[7]['content']) && ($article[7]['content'] !== '')?$article[7]['content']:"暂无"); ?></div>
							</div>
							<img src="static/index/img/service-bot-item4.png" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about">
			<div class="box">
				<div class="about-left">
					<div class="about-title">关于我们<span>ABOUT&nbsp;&nbsp;US</span></div>
					<div class="about-text"> </div>
					<a class="about-more" href="about.html">MORE<span>+</span></a>
				</div>
				<div class="about-right">
					<div class="hot-service">24小时客服在线<span>010-0000000</span></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="advantages">
			<div class="box">
				<div class="advantages-title">我们的优势</div>
				<div class="advantages-title-e">OUR&nbsp;&nbsp;ADVANTAGES</div>
				<div class="advantages-top">
					<!-- <div class="advantages-top-item">
						<div class="item-top">
							<div class="index">
								<div class="num-bg">
									<div class="num">1</div>
								</div>
							</div>
							<div class="advantages-text">进口技术 植物提取液除醛除味为本体</div>
						</div>
						<div class="xian">
							<div class="dian "></div>
						</div>
						<div class="heng"></div>
					</div>
					<div class="advantages-top-item">
						<div class="item-top">
							<div class="index">
								<div class="num-bg">
									<div class="num">2</div>
								</div>
							</div>
							<div class="advantages-text">除醛、除味 长期质保不反弹</div>
						</div>
						<div class="xian">
							<div class="dian "></div>
						</div>
					</div>
					<div class="advantages-top-item">
						<div class="item-top">
							<div class="index">
								<div class="num-bg">
									<div class="num">3</div>
								</div>
							</div>
							<div class="advantages-text">不断释放负氧离子 保持良好的生活空间</div>
						</div>
						<div class="xian">
							<div class="dian "></div>
						</div>
						<div class="heng-a"></div>
					</div>
					<div class="advantages-top-item">
						<div class="item-top">
							<div class="index">
								<div class="num-bg">
									<div class="num">4</div>
								</div>
							</div>
							<div class="advantages-text">消除霉菌、病毒、细菌的 滋生环境，长期保持室内空气质量</div>
						</div>
						<div class="xian">
							<div class="dian "></div>
						</div>
					</div> -->
				</div>
				<div class="advantages-bot">
					<!-- <div class="advantages-bot-l"></div>
					<div class="advantages-bot-item">
						<div class="bot-xian">
							<div class="bot-dian"></div>
						</div>
						<div class="item-top">
							<div class="index">
								<div class="num-bg">
									<div class="num">5</div>
								</div>
							</div>
							<div class="advantages-text">10年经验治理工程师 持证上岗</div>
						</div>
					</div>
					<div class="advantages-bot-item">
						<div class="bot-xian">
							<div class="bot-dian"></div>
						</div>
						<div class="item-top">
							<div class="index">
								<div class="num-bg">
									<div class="num">6</div>
								</div>
							</div>
							<div class="advantages-text">治理后室内空气质量 控制在欧盟标准</div>
						</div>
					</div>
					<div class="advantages-bot-item">
						<div class="bot-xian">
							<div class="bot-dian"></div>
						</div>
						<div class="item-top">
							<div class="index">
								<div class="num-bg">
									<div class="num">7</div>
								</div>
							</div>
							<div class="advantages-text">24小时响应服务</div>
						</div>
					</div>
					<div class="advantages-bot-r"></div> -->
				</div>
			</div>
		</div>
		<div class="team">
			<div class="box">
				<div class="team-title">我们的团队</div>
				<div class="team-banner-box">
					<div class="team-banner">
						<img src="" />
					</div>
					<div class="team-btn">TEAM</div>
				</div>
				<div class="team-right">
					<div class="team-btn-num">
						<div class="btn-num">1</div>
						<div class="btn-num">2</div>
						<div class="btn-num">3</div>
					</div>
					<div class="team-more">MAJOR</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="choice-us">
			<div class="box">
				<div class="choice-title">为什么选择我们</div>
				<div class="choice-title-e">Why&nbsp;&nbsp;did&nbsp;&nbsp;you&nbsp;&nbsp;choose&nbsp;&nbsp;us?</div>
				<div class="choice-text">进口产品，专业的服务，为您提供专业的定制解决方案</div>
				<article class="jq22-container">
					<div class="caroursel poster-main" data-setting='{
				        "width":1200,
				        "height":320,
				        "posterWidth":500,
				        "posterHeight":320,
				        "scale":0.8,
				        "dealy":"2000",
				        "algin":"middle"
				    }'>
						<ul class="poster-list">
							<li class="poster-item"><img src="static/index/img/choice-banner1.jpg" width="100%" height="100%" /></li>
							<li class="poster-item"><img src="static/index/img/choice-banner2.jpg" width="100%" height="100%" /></li>
							<li class="poster-item"><img src="static/index/img/choice-banner3.jpg" width="100%" height="100%" /></li>
						</ul>
						<div class="poster-btn poster-prev-btn"></div>
						<div class="poster-btn poster-next-btn"></div>
					</div>
				</article>
			</div>
		</div>
		<div class="case">
			<div class="box">
				<div class="case-header">
					<div class="case-title">项目案例<span>CASE</span></div>
					<a class="case-more" href="case.html">查看更多</a>
				</div>
				<div class="case-left">
					<div class="case-left-top">
						<img src="static/index/img/case-left-top.jpg" />
						<div class="top-title-box">
							<div class="case-left-top-title">客户案例分类</div>
							<div class="case-left-top-title-e">customer&nbsp;&nbsp;case</div>
						</div>
					</div>
					<div class="case-tab"></div>
				</div>
				<div class="tab-view"></div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="news">
			<div class="box">
				<div class="information">
					<div class="information-header">
						<div class="information-title">最新资讯<span class="information-title-e">INFORMATION</span><span class="sanjiao"></span></div>
						<a class="information-more" href="javascript:void(null)" onclick="information()">更多&nbsp;&nbsp;></a>
					</div>
					<div class="information-list"></div>
				</div>
				<div class="industry">
					<div class="industry-header">
						<div class="industry-title">行业资讯<span class="industry-title-e">INDUSTRY</span><span class="sanjiao"></span></div>
						<a class="industry-more" href="javascript:void(null)" onclick="industry()">更多&nbsp;&nbsp;></a>
					</div>
					<ul class="industry-list">
						<li class="clear"></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="footer">
			<div class="box">
				<div class="footer-box">
					<div class="scope-box">
						<div class="scope-title">服务范围</div>
					</div>
					<div class="footer-service-box">
						<div class="footer-service-title">服务项目</div>
					</div>
					<div class="why-us">
						<div class="why-us-title">为什么选择我们</div>
						<a class="why-us-item" href="product.html?#a">产品技术</a>
						<a class="why-us-item" href="product.html?#b">产品优势</a>
						<a class="why-us-item" href="product.html?#c">服务标准</a>
						<a class="why-us-item" href="product.html?#e">服务流程</a>
						<a class="why-us-item" href="product.html?#d">服务承诺</a>
					</div>
					<div class="contact-us">
						<div class="contact-us-title">联系我们</div>
						<div class="contact-us-tel">座机：<span></span></div>
						<div class="contact-us-mobile">手机：<span></span></div>
						<div class="contact-us-email">邮箱：<span></span></div>
						<div class="contact-us-address">地址：<span></span></div>
					</div>
					<div class="focus-us">
						<div class="focus-us-title">关注我们</div>
						<img src="static/uploads/<?php echo \think\Session::get('code'); ?>" />
					</div>
					<div class="clear"></div>
				</div>
				<div class="footer-bot">版权所有<span>北京安柯曼环保科技有限公司 </span>京ICP备xxxxx号</div>
			</div>
		</div>
		<script src="static/index/js/city.js" type="text/javascript" charset="utf-8"></script>
		<script src="static/index/js/footer.js" type="text/javascript" charset="utf-8"></script>
		<script>
			Caroursel.init($('.caroursel'));
			setup();
		</script>
	</body>

</html>