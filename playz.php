<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,minimal-ui">
    <meta name="referrer" content="no-referrer">
    <title>播放器</title>
    <style type="text/css">
      html, body {width:100%;height:100%;margin:auto;overflow: hidden;}
      body {display:flex;}
      #mse {flex:auto;}
    </style>
    <script type="text/javascript">
      window.addEventListener('resize',function(){document.getElementById('mse').style.height=window.innerHeight+'px';});
    </script>
  </head>
  <body>
    <div id="mse"></div>
    <script src="http://unpkg.byted-static.com/xgplayer/2.31.2/browser/index.js" charset="utf-8"></script>
    <script src="http://unpkg.byted-static.com/xgplayer-flv/2.5.1/dist/index.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      let player = new FlvPlayer({
          id: 'mse',
          url: '<?php echo $_GET['url'];?>',
          isLive: true,
          playsinline: true,
          height: window.innerHeight,
          width: window.innerWidth
      });
      player.emit('resourceReady', [{ name: '超清', url: '<?php echo $_GET['url'];?>' }, { name: '高清', url: '<?php echo $_GET['url'];?>' }, { name: '标清', url: '<?php echo $_GET['url'];?>' }]);

    </script>
    </div>
<div style="display: none">
<script type="text/javascript" src="https://js.users.51.la/21354177.js"></script>
    </div>
  </body>
</html>
