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
<link rel='stylesheet' id='main-css'  href='css/gaoxiao.css' type='text/css' media='all' />
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
<center><strong>
<li><a target="_blank" href="yy.php">舞曲视频</a></li>
<li><a target="_blank" href="bb.php?page=1">哔哩视频</a></li>
<li><a target="_blank" href="ym.php?page=1">六间房视频</a></li>
 <li><a target="_blank" href="yt.php">天气预报</a></li>
<li><a target="_blank" href="top.php">视频热搜</a></li>
<li><a target="_blank" href="cxdy.php">精选合集推荐</a></li>
<li><a target="_blank" href="dym.php">最新影片资讯</a></li>
<li><a target="_blank" href="zbtv.php">卫视TV电视直播</a></li>
<li><a target="_blank" href="zbyk.php">随机映客娱乐直播</a></li>
<li><a target="_blank" href="zbhy.php?page=1">虎牙综合娱乐直播</a></li>
<li><a target="_blank" href="zbyya.php">YY娱乐直播</a></li>

</strong></center>
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
