<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/home/wwwroot/default/ankeman/public/../application/index/view/index/problem.html";i:1563871232;}*/ ?>
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
	    <script type="text/javascript" src="static/index/js/problem.js"></script>
	    <link rel="stylesheet" type="text/css" href="static/index/css/header.css"/>
	    <link rel="stylesheet" href="static/index/css/footer.css" />
	    <link rel="stylesheet" type="text/css" href="static/index/css/problem.css"/>
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
				<div class="problem-tab-box">
					<div class="problem-tab">除味不理想，复检不达标?</div>
				</div>
				<div class="problem-tab-box p-l p-r">
					<div class="problem-tab"> 实验显示，室温每上升一摄氏度 木制家具和地板等挥发出的甲醛 会使空气中的甲醛浓度上升0.15至0.37倍</div>
				</div>
				<div class="problem-tab-box">
					<div class="problem-tab">布艺味、地毯味 壁纸味、木头味、皮革味 难以去除!</div>
				</div>	
				<div class="clear"></div>
			</div>
		</div>
		<div class="problem">
			<div class="box">
				<div class="news-title">常见问题</div>
				<div class="news-title-e">Common&nbsp;&nbsp;problem</div>
				<div class="problem-list">
					<!--<div class="problem-item">
						<div class="problem-title">Q：治理完多久可以入住？</div>
						<div class="answer">A：治理完工后，即刻就可以入住。</div>
					</div>-->
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

