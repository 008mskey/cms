<?php
include ('./inc/aik.config.php');
include ('./inc/cache.php');
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
<title>资源列表大全-<?php echo $aik["title"];?></title>
<meta name="keywords" content="<?php echo $aik["keywords"];?>，导航大全，娱乐频道，在线导航网">
<meta name="description" content="<?php echo $aik["description"];?>">
<link rel="shortcut icon" href="favicon.ico" />
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/seacher.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/movie.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>

<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<style>.dw-box {
    background: #FFEA97;
    border: 1px solid #E1B400;
    color: #3A87AD;
    border-radius: 5px;
	padding:5px 0px;
}</style>
</head>
<?php
include "header.php";
?>
<base target='_blank'>
<section class="container">
<div class="am-container main" style="padding:0">       
<strong class="single-strong">资源列表大全</strong><ul class="mvul">
<?php
include "./data/cxdy.php";
?>
</div>
</ul>
</div></div></div>
<div class="paging">

<a href="javascript:history.back(-1)">返回上页</a>

</div>
<div style="clear: both;"></div>
</div></div>
<div class="asst asst-list-footer"><?php echo $aik["movie_ad"];?></div></section>
<?php
include "footer.php";
?></body></html>
