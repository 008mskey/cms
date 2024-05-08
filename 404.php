<?php
error_reporting(0);
include ('./inc/aik.config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<title>404页面-<?php echo $aik['title'];?></title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/tv.css' type='text/css' media='all' />
<script type='text/javascript' src='//apps.bdimg.com//libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="404页面">
<meta name="description" content="<?php echo $aik['title'];?>-404页面">
<link rel="shortcut icon" href="favicon.ico" />
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<style type="text/css">
		.t1 {
			margin: 0 auto;
			width: 100%;
		}
		.t2 {
			padding: 30px 0;
			text-align: center;
			font-size: 14px;
		}
		.t2 p {
			padding-top: 10px;
		}
		.t3 {
			font-size: 16px;
			font-weight: 600;
		}
		.cre {
			color: red;
		}
		.cbl {
			color: blue;
		}
		a {
			text-decoration: none;
			color: inherit;
		}
		.t4 {
			margin: 0 auto;
			width: 120px;
			height: 23px;
			border: 1px solid pink;
			border-radius: 6px;
			font-size: 14px;
			font-weight: 600;
		}
		.t4 a {
			display: block;
		}
		.scline {
			text-decoration: line-through;
		}
	</style>
</head>

<body>
<?php  include 'header.php';?>
<meta http-equiv="refresh" content="0.9;url=<?php echo $aik['pcdomain'];?>">

<section class="container">
<center><strong>

<div class="t1">
		<div class="t2">
			<p class="t3"><img src="http://img.baidu.com/hi/jd/j_0010.gif" height="40" width="40"/>官方提示</p>
			<p>未找到该资源！正在返回首页...</p>
			<p>视频资源已失效或被屏蔽</p>
			<p>或发送邮件到：<span class="cbl"><?php echo $aik['admin_email'];?></span></p>
			<p>本站地址：<span class="cre"><?php echo $_SERVER['HTTP_HOST']?></span></p>
			
			<div class="t4"><a href="javascript:history.back(-1)">已阅，返回上页</a></div>
		</div>
	</div>

</strong></center>
</section>
<?php  include 'footer.php';?>
