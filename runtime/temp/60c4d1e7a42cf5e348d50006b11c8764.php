<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"E:\PHPTutorial\WWW\ankeman\public/../application/index\view\index\service-details.html";i:1567671864;}*/ ?>
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
	    <script type="text/javascript" src="__STATIC__/index/js/jquery-1.11.0.js" ></script>
	    <script type="text/javascript" src="__STATIC__/index/js/service-details.js" ></script>
	    <link rel="stylesheet" type="text/css" href="__STATIC__/index/css/header.css"/>
	    <link rel="stylesheet" href="__STATIC__/index/css/footer.css" />
	    <link rel="stylesheet" type="text/css" href="__STATIC__/index/css/service-details.css"/>
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
					<img src="__STATIC__/index/img/logo.jpg" />
				</a>
				<div class="nav">
					
				</div>
				<div class="service-number">
					<div class="number"><?php echo \think\Session::get('phone'); ?></div>
					<img src="__STATIC__/index/img/service-number.jpg" />
				</div>
				<div id="aaa"  class="nav-details">
					<img src="__STATIC__/index/img/nav-details.png"/>
				</div>
				<div class="nav-a">
					
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="box">
				<div class="banner-list">
					<!--<div class="banner-item-box">
						<div class="banner-item">室内空气治理</div>
					</div>
					<div class="banner-item-box">
						<div class="banner-item">室内空气污染检测</div>
					</div>
					<div class="banner-item-box">
						<div class="banner-item">车内空气治理</div>
					</div>
					<div class="banner-item-box">
						<div class="banner-item">空调清洗</div>
					</div>																				-->
				</div>				
			</div>
		</div>
		<div class="box">
			<div class="details-box">
				<div class="pic-box">
					
				</div>				
				<div class="details-content">
					<div class="details-title"></div>
					<span class="title-bt"></span>
					<div class="update-title"><div class="a">更新：</div><div class="b">更新：</div><div class="c">更新：</div></span></div>
					<div class="appointment-title">填写信息获取精准报价与方案</div>
					<div class="appointment">
						<div class="appointment-row">
							<input type="text" name="" id="appointment-name" placeholder="您的称呼" value="" />
							<input type="text" name="" id="appointment-mobile" placeholder="您的联系方式" value="" />
						</div>
						<div class="appointment-row">
							<input type="text" name="" id="appointment-area" placeholder="房屋面积㎡" value="" />
							<select name=""  id="s1">
								<option value=""></option>
							</select>
							<select name="" id="s2">
								<option value=""></option>
							</select>
						</div>												
						<a class="sub-appointment" onclick="appointment()">免费获取报价</a>
					</div>						
				</div>
			</div>
		</div>
		<div class="box">
			<div class="details-text">
				<div class="text-title">CMA检测是什么？ </div>
				<div class="">CMA代表权威具备法律效应 中国计量认证简称“CMA”，是China Metrology Accreditation的英文缩写。</div>
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
						<img src="__STATIC__/index/img/erweima.jpg"/>
					</div>
					<div class="clear"></div>
				</div>
				<div class="footer-bot">版权所有<span>北京安柯曼环保科技有限公司 </span>京ICP备xxxxx号</div>
			</div>
		</div>
		<script src="__STATIC__/index/js/city.js" type="text/javascript" charset="utf-8"></script>
		<script src="static/index/js/footer.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			setup();
		</script>
	</body>
</html>

