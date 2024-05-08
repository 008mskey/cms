<?php
include ('./inc/aik.config.php');
include ('./inc/cache.php');
$link=$aik['pcdomain'];
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
<title><?php echo $aik['title'];?></title>
<meta name='referrer' content="never">
<meta name="keywords" content="<?php echo $aik['keywords'];?>">
<meta name="description" content="<?php echo $aik['description'];?>">
<link rel="shortcut icon" href="favicon.ico" />
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/index.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body class="home blog">
<?php  include 'header.php';?>
<div id="homeso">
<form method="get" id="soform" style="text-align: center;float: none" action="seacher.php">
<?php echo $aik['logo_ss'];?><br><br>
<input tabindex="2" class="homesoin" id="sos" name="wd" type="text" placeholder="输入观看的视频名称或关键词" value="">
<input type="hidden" name="" value="1">
<select class="homesobtn"  id="s1" onchange="valuechange()">
  <option value="q">全网搜∨</option>
  <option value="b">资源二搜索</option> 
  <option value="d">资源三搜索</option>
  <option value="m">资源四搜索</option>
</select>
<button id="button" tabindex="3" class="homesobtn" type="submit">搜索</button>
</form>
<script>
 function  valuechange(){
 var qiehuan = document.getElementById('s1').value;
  if(qiehuan=='q'){
  document.getElementById('soform').action = 'seacher.php';
  document.getElementById('imgsrc').src = 'images/sologo.png';
  }else if('b'){
  document.getElementById('soform').action = 'seachera.php';
  document.getElementById('imgsrc').src = 'images/wp.png';
  }else if('c'){
  document.getElementById('soform').action = 'seacherb.php';
  document.getElementById('imgsrc').src = 'images/wp.png';
  }else if('d'){
  document.getElementById('soform').action = 'seacher.php';
  document.getElementById('imgsrc').src = 'images/wp.png';
  }else{
  document.getElementById('soform').action = 'seacherb.php';
  document.getElementById('imgsrc').src = 'images/wp.png';
  }
  }
	var a = document.getElementById('sos');
	var btn = document.getElementById('button');
btn.onclick = function(){
 var reg = /^((https|http|ftp|rtsp|mms)?:\/\/)[^\s]+/;
 if(!reg.test(a.value)){
	 if(!a.value){
		 alert('不能为空');
	 }else{
	 }
 }
 else{
var url = '<?php echo $link;?>playb.php?url='+a.value;
window.location.href=url;
 return false;
 }
}
</script>
</div>
<section class="container">

<div class="single-strong">最近更新<span class="chak"><a href="movie.php?page=1">查看更多</a></span></div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear" id="dycx">
	 <div id="loading">
		<div class="k-ball7a" ></div>
		<div class="k-ball7b" ></div>
		<div class="k-ball7c" ></div>
		<div class="k-ball7d" ></div>
	</div> 
</ul>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){ 
$.ajax({
 type:"POST",
 url:"./inc/zwca.php",
 data:"",
 success:function(data){
  $("#dycx").html(data);
 }
})
});
</script>
</div>
</div>
<div class="single-strong">综合影片推荐<span class="chak"><a href="movie.php?page=1">查看更多</a></span></div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear">
<?php include './inc/zwcb.php';?>
</ul>
</div>
</div>

</section>
<?php  include 'footer.php';?>

</body>
</html>
