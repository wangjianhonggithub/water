<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"/home/wwwroot/default/ankeman/public/../application/admin/view/Login/login.html";i:1567671007;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台管理系统</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="__STATIC__/layui/css/layui.css">

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="__STATIC__/admin/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="__STATIC__/admin/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="__STATIC__/admin/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


        
    <!--Demo [ DEMONSTRATION ]-->
    <link href="__STATIC__/admin/css/demo/nifty-demo.min.css" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="__STATIC__/admin/plugins/magic-check/css/magic-check.min.css" rel="stylesheet">

    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="__STATIC__/admin/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="__STATIC__/admin/plugins/pace/pace.min.js"></script>
    <script src="__STATIC__/layui/layui.all.js"></script>
    <!--jQuery [ REQUIRED ]-->
    <script src="__STATIC__/admin/js/jquery-2.2.4.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="__STATIC__/admin/js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="__STATIC__/admin/js/nifty.min.js"></script>






    <!--=================================================-->
    
    <!--Background Image [ DEMONSTRATION ]-->
    <script src="__STATIC__/admin/js/demo/bg-images.js"></script>




    
    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->
        

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="cls-container">
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div></div>
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h3 class="h4 mar-no">后台管理系统</h3>
		                <p class="text-muted"></p>
		            </div>
		            <form action="" method="post">
		                <div class="form-group">
		                    <input type="text" class="form-control" name="username" placeholder="用户名" autofocus>
		                </div>
		                <div class="form-group">
		                    <input type="password" name="password" class="form-control" placeholder="密码">
		                </div>
		                <button class="btn btn-primary btn-lg btn-block" id="LoginSubmit" type="button">登录</button>
		            </form>
		        </div>
		    </div>
		</div>
		<!--===================================================-->
		
		
		<!-- DEMO PURPOSE ONLY -->
		<!--===================================================-->
		<div class="demo-bg">
		    <div id="demo-bg-list">
		        <div class="demo-loading"><i class="psi-repeat-2"></i></div>
		        <img class="demo-chg-bg bg-trans active" src="__STATIC__/admin/img/bg-img/thumbs/bg-trns.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="__STATIC__/admin/img/bg-img/thumbs/bg-img-1.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="__STATIC__/admin/img/bg-img/thumbs/bg-img-2.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="__STATIC__/admin/img/bg-img/thumbs/bg-img-3.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="__STATIC__/admin/img/bg-img/thumbs/bg-img-4.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="__STATIC__/admin/img/bg-img/thumbs/bg-img-5.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="__STATIC__/admin/img/bg-img/thumbs/bg-img-6.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="__STATIC__/admin/img/bg-img/thumbs/bg-img-7.jpg" alt="Background Image">
		    </div>
		</div>
		<!--===================================================-->
		
		
		
	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->


</body>
<script>
  $(function(){
      $('#LoginSubmit').click(function(){
        var username = $("input[name='username']").val();
        var password = $("input[name='password']").val();
        $.ajax({
          type: 'POST',
          url: "<?php echo url('/Admin/DoLogin'); ?>",
          data: {
            username:username,
            password:password,
          },
          success: function(data){
              var data= eval('('+data+')');
              if (data.code == 0) {
                  layer.msg(data.meg, function(){
                    //关闭后的操作
                  });
                  setTimeout(function(){
                  	//window.location.href="/Admin";
					window.location.href="<?php echo url('/Admin'); ?>";
                    // window.location.href=document.referrer;
                  },1500);
              }else{
                  layer.msg(data.meg, function(){
                    //关闭后的操作
                  });
                  return false;
              }
          },
		  error:function(){
			layer.msg('与服务器失去连接', function(){
                    //关闭后的操作
            });
		  }
        });
      })
  });
</script>
</html>
