<?php require 'php/Regist.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	
	<title>纳新快速报名结果</title>

	<link rel="shortcut icon" href="../assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://7xng41.com1.z0.glb.clouddn.com/assets/css/Opensans.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="../index.html"><img src="../assets/images/logo.png" alt="Association of Network and Technology"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="../index.html">主页</a></li>
					<li><a href="http://blog.xiyounet.org">专栏</a></li>
					<li><a href="http://lib.xiyounet.org">网协图书馆</a></li>
					<li><a href="../about.html">关于</a></li>
					<li><a href="../contact.html">联系我们</a></li>
					<li class="active"><a class="btn" href="#">2015 纳新快速报名通道</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="../index.html">主页</a></li>
			<li class="active">纳新报名结果</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h2 class="page-title">报名结果:<span><?php echo $regist_status?></span></h2>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">报名信息如下</h3>
							<p class="text-center text-danger"><?php echo $regist_info; ?></p>
							<hr>

								<div class="top-margin">
									<label>姓名: <?php echo $name ?><span class="text-danger"></span></label>
								</div>
								<div class="top-margin">
									<label>性别: <?php echo $gender ?></label>
								</div>
								<div class="top-margin">
									<label>学号: <?php echo $sno ?></label>
								</div>
								<div class="top-margin">
									<!-- <div class="col-sm-6"> -->
									<label>专业: <?php echo $major ?></label>
								</div>
								<div class="top-margin">
									<label>年级: <?php echo $grade ?></label>
								</div>								
								<div class="top-margin">
									<!-- <div class="col-sm-6"> -->
									<label>预期方向:<?php echo $direction ?></label>
								</div>								
								<div class="top-margin">
									<label>联系方式: <?php echo $phone_number?></label>
								</div>
							</div>
							<!-- End of pannel body -->
					</div>
					<!-- /panel panel-default -->
					<hr>
													<div class="row">									
										<div class="col-xs-12 col-md-12 col-lg-12 text-center">
										<a class="btn btn-success" href="http://7xo5sd.dl1.z0.glb.clouddn.com/questions(20151110).pdf">试题下载</a>
										<button class="btn btn-action"onclick="goBack()">返回</button>
										<script>function goBack() { window.history.back() }</script>
									</div>
								</div>
				</div>			

			</article>
			<!-- /Article -->
		</div>
		 <!-- /row -->
	</div>
		<!-- /container -->
	


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">联系我们</h3>
						<div class="widget-body">
							<address>陕西省西安市长安区西安邮电大学 东区 FZ130	</address>
								<p><b>邮箱:</b><a href="mailto:#">admin@xiyouant.org</a><br></p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow Us</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a class="social-btn bspopover" data-toggle="popover" data-placement="top" data-trigger="hover" data-html="true"data-content="<img src=../assets/images/wechat.jpg style='width: 140px; height: 140px;'>" data-original-title="" title="">
      							<i class="fa fa-weixin fa-2"></i>
    							</a>
								<a href="https://github.com/xiyouant" target="_blank"><i class="fa fa-github fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">内容许可</h3>
						<div class="widget-body">
							<p>本站由 <a href="https://www.digitalocean.com/?refcode=3c8422b30f9d">DigitalOcean</a> 提供服务器支持 七牛 提供 CDN 存储服务</p>
							<p>除特别说明外，用户内容均采用
							<a rel="license" target="_blank" href="http://creativecommons.org/licenses/by-sa/3.0/cn/">知识共享署名-相同方式共享 3.0 中国大陆许可协议</a>进行许可</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="../index.html">主页</a> | 
								<a href="../blog/">专栏</a> |
								<a href="">网协图书馆</a> |
								<a href="../contact.html">联系我们</a> 
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-center">Copyright &copy; 2010-2015 西安邮电大学网络科技协会. 当前呈现版本 15.10.09</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
			




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../assets/js/headroom.min.js"></script>
	<script src="../assets/js/jQuery.headroom.min.js"></script>
	<script src="../assets/js/template.js"></script>
	<!--  popover initialization -->
	<script>$(function () {$('[data-toggle="popover"]').popover()})</script>
</body>
</html>