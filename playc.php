<?php
error_reporting(0);
include ('./inc/aik.config.php');
include ('./inc/cache.php');
$gaoxiao=$_GET['url'];
if (empty($gaoxiao)){$play=$_GET['play'];$player=''.$play;}
else{ $play=base64_decode($gaoxiao);$player=''.$play;}
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
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/play.css' type='text/css' media='all' />
<script type='text/javascript' src='//apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>

<meta name="keywords" content="正在播放-播放页">
<title>正在播放<?php echo $_GET['name'];?>-<?php echo $aik["sitename"];?></title>
<link rel="shortcut icon" href="favicon.ico" />
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>

<style>
  .single-strong {color: #606060;font-size: 14px;font-weight: 700;border-left: 3px #ff5c5c solid;padding-left: 10px;display: block;line-height: 32px;margin: 10px 0;}
.html5play iframe{
	    height: 600px;
}

@media only screen and (max-width:420px){
.html5play iframe{
	    height: 260px;
}
}
.html5play iframe{
	background:url(images/1280jiazai.png) no-repeat;
    background-size: 100%;
}
</style>

<body class="page-template page-template-pages page-template-posts-play page-template-pagesposts-play-php page page-id-16">
<?php
include "header.php";
?><div class="single-post">
<section class="container">
    <div class="content-wrap">
    	<div class="content">
<div class="asst asst-post_header"><?php echo $aik["bofang_ad"];?></div>
<div class="sptitle"><h1>
<?php echo $_GET['name'];?></h1></div>
<div id="bof">
</div>
<div class="am-cf"></div>
<div class="am-panel am-panel-default">
<div class="am-panel-bd">
<div class="html5play">
<iframe src="<?php echo $player;?>" marginwidth="0" marginheight="0" border="0" scrolling="no" frameborder="0" topmargin="0" width="100%" height="600px"></iframe>
<p style="background:#000;margin: 0;"><font color="red"><b><marquee scrolldelay="120">部分视频需要加载等待一会才能播放！若视频播放卡顿或未开播请刷新一下当前页面试试</marquee></b></font></p>
</div><?php echo $aik["tishi_ad"];?><div class="dianshijua" id="dianshijuid">
<h3 class='single-strong'>无需安装任何插件<font color='#ff6651'>【部分视频需缓存加载一会】</font></h3>
<div class="top-list-ji">
    <h2 class="title g-clear"><em class="a-bigsite a-bigsite-leshi"></em></h2>
    <div class="ji-tab-content js-tab-content" style="opacity:1;">
<a href="<?php echo $play;?>" class="am-btn am-btn-default lipbtn">播放中</a>

</div>
</div>          
</div>
<div style="clear: both;"></div> 
<h3 class="single-strong">更多其他资源</h3> 
<a  href="dh.php" class="am-btn am-btn-default lipbtn">点击查看</a>
<div style="clear: both;"></div> 
</div>
</div>
<!--PC和WAP自适应版-->
<div class="article-actions clearfix">
 <div class="shares">
        <strong>分享到：</strong>
        <a href="javascript:;" data-url="<?php echo $aik["pcdomain"];?>" class="share-weixin" title="分享到微信"><i class="fa"></i></a><a etap="share" data-share="qzone" class="share-qzone" title="分享到QQ空间"><i class="fa"></i></a><a etap="share" data-share="weibo" class="share-tsina" title="分享到新浪微博"><i class="fa"></i></a><a etap="share" data-share="tqq" class="share-tqq" title="分享到腾讯微博"><i class="fa"></i></a><a etap="share" data-share="qq" class="share-sqq" title="分享到QQ好友"><i class="fa"></i></a><a etap="share" data-share="renren" class="share-renren" title="分享到人人网"><i class="fa"></i></a><a etap="share" data-share="douban" class="share-douban" title="分享到豆瓣网"><i class="fa"></i></a>
    </div>   
 <a href="javascript:;" class="action-rewards" etap="rewards">打赏</a>
    </div> 
</div>
<script type='text/javascript' src='js/view-history.js'></script>        
<script>
var store = $.AMUI.store;var lishi = $('#xuji1').html();store.set('site','<?php echo $_GET['name'];?>');      	 store.set('siteurl','<?php echo $_SERVER["REQUEST_URI"];?>');store.set('li',viewji)</script>
<script type="text/javascript">
 var temp = {type: "video", name: "<?php echo $_GET['name'];?>",url: "<?php echo $_SERVER["REQUEST_URI"];?>"};			
var histemp = store.get('history')? store.get('history'): [];
       for(var i=0; i<histemp.length; i++) {
            if(histemp[i].type == "video" && histemp[i].url == "<?php echo $_SERVER["REQUEST_URI"];?>") {
                histemp.splice(i, 1); 
                break;
            }
        }
histemp.unshift(temp); 
store.set('history', histemp);
//alert(JSON.stringify(store.get("history")));
var doo = store.get("history");
//$("#sc").html('"+store.get('history')+"');
function qc () {
	store.clear();
		
}
		</script>
    	</div>
<?php
include "sidebar.php";
?></section>
</div>
<?php
include "footer.php";
?></body>
</html>
