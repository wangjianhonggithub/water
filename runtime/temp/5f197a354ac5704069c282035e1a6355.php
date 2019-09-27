<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"/home/wwwroot/default/ankeman/public/../application/index/view/index/about.html";i:1563949245;}*/ ?>
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
	    <script type="text/javascript" src="static/index/js/about.js" ></script>
	    <link rel="stylesheet" type="text/css" href="static/index/css/header.css"/>
	    <link rel="stylesheet" href="static/index/css/footer.css" />
	    <link rel="stylesheet" type="text/css" href="static/index/css/about.css"/>
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
			<div class="box">
				<div class="banner-text">
					<div class="text-one"></div>
					<!-- <div class="text-two">对室内游离状态、吸附状态、结合状态的甲醛、苯、TVOC等有毒有害气体起到高效、永久、安全的清除效果。经净化治理后室内空气质量可以达到国家强制性标准B50325-2001或G /T 18883-2002《室内空气质量标准》要求。</div>	 -->			
				</div>
				<div class="banenr-right">
					<div class="banenr-right-text">关于我们<span>ABOUT</span></div>
				</div>
			</div>
			
		</div>
		<div class="team">
			<div class="box">
				<div class="team-title">我们的团队</div>
				<div class="team-banner-box">
					<div class="team-banner">
						<img src=""/>
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
		<div class="contact-big">
			<div class="box">
				<div class="contact-big-title">联系我们</div>
				<div class="contact-big-title-e">CONTACT&nbsp;&nbsp;US</div>
				<div id="dituContent"></div>
				<div class="telephone">座机：<span></span></div>
				<div class="mobile">手机：<span></span></div>
				<div class="mail">邮箱：<span></span></div>
				<div class="address">地址：<span></span></div>
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

