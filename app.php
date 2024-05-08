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
<title>APP下载-<?php echo $aik['title'];?></title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/tv.css' type='text/css' media='all' />
<script type='text/javascript' src='//apps.bdimg.com//libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="官方APP下载">
<meta name="description" content="<?php echo $aik['title'];?>-APP下载">
<link rel="shortcut icon" href="favicon.ico" />
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->

</head>

<body>
<?php  include 'header.php';?>


<section class="container">
<center>
<iframe src="app/app.html" width="100%" height="600" marginwidth="0" marginheight="0" border="0" frameborder="0" scrolling="No"></iframe>
</center>
</div>
<style>
    #nr{
        font-size:20px;
        margin: 0;
        background: -webkit-linear-gradient(left,
            #ffffff,
            #ff0000 6.25%,
            #ff7d00 12.5%,
            #ffff00 18.75%,
            #00ff00 25%,
            #00ffff 31.25%,
            #0000ff 37.5%,
            #ff00ff 43.75%,
            #ffff00 50%,
            #ff0000 56.25%,
            #ff7d00 62.5%,
            #ffff00 68.75%,
            #00ff00 75%,
            #00ffff 81.25%,
            #0000ff 87.5%,
            #ff00ff 93.75%,
            #ffff00 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-size: 200% 100%;
        animation: masked-animation 2s infinite linear;
    }
    @keyframes masked-animation {
        0% {
            background-position: 0 0;
        }
        100% {
            background-position: -100%, 0;
        }
    }
</style>
    <div style="background-color:#333;border-radius:25px;box-shadow:0px 0px 5px #f200ff;padding:5px;margin-top:10px;margin-bottom:0px;">
        <marquee>
        <b id="nr"><?php echo $aik['dongman_ad'];?></b> </marquee>
    </div>
</section>
<?php  include 'footer.php';?>
