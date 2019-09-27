<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"/home/wwwroot/default/ankeman/public/../application/index/view/index/news.html";i:1563865405;}*/ ?>
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
	    <script type="text/javascript" src="static/index/js/news.js" ></script>
	    <link rel="stylesheet" type="text/css" href="static/index/css/header.css"/>
	    <link rel="stylesheet" href="static/index/css/footer.css" />
	    <link rel="stylesheet" type="text/css" href="static/index/css/news.css"/>
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
			<div class="news-tab">
				<a class="tab-item-a ac"  href="javascript:void(null)" onclick="information()">最新资讯</a>
				<a class="tab-item-b"  href="javascript:void(null)" onclick="industry()">行业资讯</a>
			</div>
		</div>
		<div class="news">
			<div class="box">
				<div class="news-title typea">最新资讯</div>
				<div class="news-title-e typea">information</div>
				<div class="news-title typeb">行业资讯</div>
				<div class="news-title-e typeb">INDUSTRY</div>
				<div class="news-list">
					
				</div>
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

