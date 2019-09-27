<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/home/wwwroot/default/ankeman/public/../application/index/view/index/product.html";i:1563867385;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compitable" content="IE=edge">
		<meta name="renderer" content="webkit">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<title>安柯曼</title>
		<!--[if lt IE 9]>
	    <script src="js/html5shiv.min.js"></script>
	    <script src="js/respond.min.js"></script>
	    <![endif]-->
	    <script type="text/javascript" src="static/index/js/jquery-1.11.0.js" ></script>
	    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=SXzY1LBsv7GTEmQSqcxm4XjzyC609Qxx"></script>
	    <script type="text/javascript" src="static/index/js/product.js" ></script>
	    <link rel="stylesheet" type="text/css" href="static/index/css/header.css"/>
	    <link rel="stylesheet" href="static/index/css/footer.css" />
	    <link rel="stylesheet" type="text/css" href="static/index/css/product.css"/>
	</head>
	<body >
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
				<div id="aaa"  class="nav-details">
					<img src="static/index/img/nav-details.png"/>
				</div>
				<div class="nav-a">
					
				</div>
			</div>
		</div>
		<div class="banner">
			<img src="static/index/img/product-banner.jpg"/>
		</div>
		<div class="technology">
			<div class="box">
				<div class="technology-title" id="a">产品技术</div>
				<div class="technology-title-e">Product<span>technology</span></div>
				<div class="technology-text"></div>
			</div>			
		</div>
		<div class="product-advantage">
			<div class="box">
				<div class="technology-title" id="b">产品优势</div>
				<div class="technology-title-e">Product<span>advantage</span></div>
				<div class="advantage-list">
					<!-- <div class="advantage-box">
						<div class="advantage-item">
							<div class="advantage-text"></div>
							<div class="advantage-bot">
								<div class="advantage-bot-item"></div>
							</div>
						</div>
					</div>	 -->				 										
				</div>
			</div>
		</div>
		<div class="service-standard">
			<div class="box">
				<div class="technology-title" id="c">服务标准</div>
				<div class="technology-title-e">Service<span>standard</span></div>
				<div class="standard-details">
					<img class="standard-pic" src="static/index/img/standard.jpg"/>
					<div class="standard-list">
						<!-- <div class="standard-item standard-item-mar">
							<div class="standard-index">1</div>
							<div class="standard-text">甲醛、苯等挥发性有害物含量低于0.08mg/m3；</div>
						</div>
						<div class="standard-item standard-item-mar">
							<div class="standard-index">2</div>
							<div class="standard-text">空气明显清新，装修异味清除彻底；</div>
						</div>
						<div class="standard-item standard-item-mar">
							<div class="standard-index">3</div>
							<div class="standard-text">有益健康，可抑制流感菌、霉菌、大肠杆菌等细菌、病菌滋生；</div>
						</div>
						<div class="standard-item standard-item-mar">
							<div class="standard-index">4</div>
							<div class="standard-text">1潮湿气候可防止家具、墙壁发霉，消除霉菌异味；</div>
						</div>
						<div class="standard-item">
							<div class="standard-index">5</div>
							<div class="standard-text">负离子达标，含量接近大自然，长期保持除醛除味不反弹，除味没有百分比，只有彻底不彻底</div>
						</div> -->
					</div>
					<div class="clear"></div>
				</div>				
			</div>
		</div>
		<div class="service-promise">
			<div class="box">
				<div class="promise-title" id="d">服务承诺</div>
				<div class="promise-title-e">Service<span>promise</span></div>
				<div class="promise">
					<div class="promise-item-a">
						<div class="promise-text-a">1年责任期 </div>
						<div class="promise-text-b">1年内添置新家具<span>免费</span>安排处理</div>
					</div>
					<div class="promise-item-b">
						<div class="promise-text-c">5年质保，5年内<span>免费</span>上门检测</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="service-process">
			<div class="technology-title" id="e">服务流程</div>
			<div class="technology-title-e">Service<span>process</span></div>
			<div class="process-list">				
				<!-- <div class="process-item-a">
					<div class="process-index-a">1</div>
					<div class="process-text">详细沟通，充分了解环境状况及空气需求；</div>
				</div>
				<div class="process-item-b">
					<div class="process-index-b">2</div>
					<div class="process-text">制定方案：充分沟通及汇总现场情况后，制定方案以及风预案；</div>
				</div>
				<div class="process-item-a">
					<div class="process-index-a">3</div>
					<div class="process-text">现场勘查：团队施工：专业团队现场施工；</div>
				</div>
				<div class="process-item-b">
					<div class="process-index-b">4</div>
					<div class="process-text">设置敏感点：设置敏感点，现场检测，取得一手数据；</div>
				</div>
				<div class="process-item-c">
					<div class="process-index-a">5</div>
					<div class="process-text">定期回访：质保期内定期回访；</div>
				</div> -->
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
						<img src="static/uploads/<?php echo \think\Session::get('code'); ?>"/>
					</div>
					<div class="clear"></div>
				</div>
				<div class="footer-bot">版权所有<span>北京安柯曼环保科技有限公司 </span>京ICP备xxxxx号</div>
			</div>
		</div>	
		<script src="static/index/js/footer.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>

