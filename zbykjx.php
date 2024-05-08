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
<title>正在播放-<?php echo $aik['title'];?></title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/tv.css' type='text/css' media='all' />
<script type='text/javascript' src='//apps.bdimg.com//libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="正在播放，正在直播中">
<meta name="description" content="<?php echo $aik['title'];?>-播放页">
<link rel="shortcut icon" href="favicon.ico" />
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<link href="https://web.sdk.qcloud.com/player/tcplayer/release/v4.7.2/tcplayer.min.css" rel="stylesheet"/>
<script src="https://web.sdk.qcloud.com/player/tcplayer/release/v4.7.2/libs/TXLivePlayer-1.2.3.min.js"></script>
<script src="https://web.sdk.qcloud.com/player/tcplayer/release/v4.7.2/libs/hls.min.1.1.6.js"></script>
<script src="https://web.sdk.qcloud.com/player/tcplayer/release/v4.7.2/libs/flv.min.1.6.3.js"></script>
<script src="https://web.sdk.qcloud.com/player/tcplayer/release/v4.7.2/libs/dash.all.min.4.5.2.js"></script>
<script src="https://web.sdk.qcloud.com/player/tcplayer/release/v4.7.2/tcplayer.v4.7.2.min.js"></script>
</head>

<body>
<?php  include 'header.php';?>


<section class="container">
</div>
<div style="clear: both;"></div>
</div></div>
<center>
<body bgcolor="black" style="margin:0">
<video id="player-container-id" style="width:100%;height:360" preload="auto" playsinline webkit-playsinline></video>

<script>
playurl = location.href.split('?vurl=')[1];
var player = TCPlayer('player-container-id', {});
player.src(playurl);
player.autoplay(1);
</script>
</div></div>
<br>
<p style="background:#000;margin: 0;"><font color="red"><b><marquee scrolldelay="120">若未能播放，请返回重新访问该资源列表！或者点击 更换下一组，手机端若无法正常播放请更换浏览器,例如使用；手机内置浏览器或x浏览器,谷歌浏览器等！将地址复制粘贴到需要更换的浏览器打开访问！！</marquee></b></font></p>
</div></div>
</center>
</section>
</div></div>
</div></div></div>
<div class="paging">


<a href="zbyk.php">更换下一组</a>

</div>
<?php  include 'footer.php';?>
