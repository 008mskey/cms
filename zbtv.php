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
<title>直播频道列表-<?php echo $aik["title"];?></title>
<meta name="keywords" content="<?php echo $aik["keywords"];?>，卫视直播，娱乐频道，在线直播频道">
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
<strong class="single-strong">直播列表</strong><ul class="mvul">
<center><strong>

<li><a target="_blank" href="player.php?url=http://glive.grtn.cn/live/jilupian.m3u8">GRTN纪录片频道</a></li>
<li><a target="_blank" href="player.php?url=http://glive.grtn.cn/live/wenhua_test0203.m3u8">GRTN文化频道</a></li>
<li><a target="_blank" href="player.php?url=http://glive.grtn.cn/live/life.m3u8">GRTN生活频道</a></li>
<li><a target="_blank" href="player.php?url=http://glive.grtn.cn/live/health.m3u8">GRTN健康频道</a></li>
<li><a target="_blank" href="player.php?url=http://glive.grtn.cn/live/lizhi.m3u8">荔枝台TV频道</a></li>
<li><a target="_blank" href="player.php?url=http://live.hznet.tv:1935/live/live3/500K/tzwj_video.m3u8">菏泽影视频道</a></li>
<li><a target="_blank" href="player.php?url=http://snapshot-live-ht.ahtv.cn/atvrtmp/143_q_live161829369249612.m3u8">安徽影视频道</a></li>
<li><a target="_blank" href="player.php?url=http://stream.hrbtv.net/yspd/sd/live.m3u8">哈尔滨影视频道</a></li>
<li><a target="_blank" href="player.php?url=http://traffic.jbh.tjbh.com/live/bhtv3/playlist.m3u8">滨海影视频道</a></li>
<li><a target="_blank" href="player.php?url=http://live.xtgdw.cn:1935/live/xtys/playlist.m3u8">泰安新泰影视频道</a></li>
<li><a target="_blank" href="player.php?url=http://stream.hrbtv.net/yspd/sd/live.m3u8">哈尔滨影视频道</a></li>
<li><a target="_blank" href="player.php?url=https://klmyzb.rcsxzx.com/hls/klmy3.m3u8">新疆克拉玛依影视</a></li>
<li><a target="_blank" href="player.php?url=http://live.lsrmw.cn/ysyl/sd/live.m3u8">溧水影视娱乐</a></li>
<li><a target="_blank" href="zbtvhu.php?id=hnjs">湖南经视频道</a></li>
<li><a target="_blank" href="zbtvhu.php?id=hnyl">湖南娱乐频道</a></li>
<li><a target="_blank" href="zbtvhu.php?id=hnds">湖南都市频道</a></li>
<li><a target="_blank" href="zbtvhu.php?id=hndsj">湖南电视剧频道</a></li>
<li><a target="_blank" href="zbtvhu.php?id=hngg">湖南公共频道</a></li>
<li><a target="_blank" href="zbtvhu.php?id=hngj">湖南国际频道</a></li>
<li><a target="_blank" href="zbtvhu.php?id=jyjs">金鹰纪实频道</a></li>
<li><a target="_blank" href="zbtvhu.php?id=jykt">金鹰卡通频道</a></li>
<li><a target="_blank" href="zbtvhu.php?id=klg">快乐购频道</a></li>
<li><a target="_blank" href="zbtvsx.php?id=sxws">陕西卫视频道</a></li>
<li><a target="_blank" href="zbtvsx.php?id=sxxwzx">陕西资讯频道</a></li>
<li><a target="_blank" href="zbtvsx.php?id=sxdsqc">陕西都市频道</a></li>
<li><a target="_blank" href="zbtvsx.php?id=sxsh">陕西生活频道</a></li>
<li><a target="_blank" href="zbtvsx.php?id=sxgg">陕西公共频道</a></li>
<li><a target="_blank" href="zbtvsx.php?id=sxtyxx">陕西休闲频道</a></li>
<li><a target="_blank" href="zbtvsx.php?id=nlws">陕西农林频道</a></li>
<li><a target="_blank" href="player.php?url=https://live-play.cctvnews.cctv.com/cctv/merge_cctv13.m3u8">CCTV-13频道</a></li>
<li><a target="_blank" href="player.php?url=http://zhibo.hkstv.tv/livestream/mutfysrq/playlist.m3u8">香港卫视频道</a></li>
<li><a target="_blank" href="player.php?url=https://livedoc.cgtn.com/500d/prog_index.m3u8">CGTN纪录频道</a></li>
<li><a target="_blank" href="player.php?url=http://stream.qhbtv.com/qhsh/sd/live.m3u8?_upt=da5c1be11702978122">青海经视频道</a></li>
<li><a target="_blank" href="player.php?url=http://stream.qhbtv.com/qhds/sd/live.m3u8?_upt=77ea47b11702979545">青海都市频道</a></li>
<li><a target="_blank" href="player.php?url=http://pluslive.zunyifb.com/xwpd/playlist.m3u8?_upt=deb034ed1702986222">遵义综合频道</a></li>
<li><a target="_blank" href="player.php?url=http://pluslive.zunyifb.com/ggpd/playlist.m3u8?_upt=caec41881702986236">遵义公共频道</a></li>
<li><a target="_blank" href="player.php?url=http://pluslive.zunyifb.com/dspd/playlist.m3u8?_upt=b69c58fc1702986229">遵义都市频道</a></li>
<li><a target="_blank" href="player.php?url=https://liveout.xntv.tv/a65jur/96iln2.m3u8">西宁综合频道</a></li>
<li><a target="_blank" href="player.php?url=https://liveout.xntv.tv/a65jur/90p2i1.m3u8">西宁生活频道</a></li>
<li><a target="_blank" href="player.php?url=http://hplayer1.juyun.tv/camera/133635181.m3u8">安顺一套综合频道</a></li>
<li><a target="_blank" href="player.php?url=http://hplayer1.juyun.tv/camera/116587130.m3u8">安顺二套公共频道</a></li>
<li><a target="_blank" href="player.php?url=http://stream.qhbtv.com/adws/sd/live.m3u8">安多卫视频道</a></li>
<li><a target="_blank" href="player.php?url=http://stream1.jlntv.cn/jygw/playlist.m3u8">贵州家有购物频道</a></li>
<li><a target="_blank" href="player.php?url=http://lglivepull.sznews.com/showto_live/2646.m3u8">深圳东部频道</a></li>
<li><a target="_blank" href="player.php?url=http://livepull-tcyzb.sztv.com.cn/live/dushi01.m3u8">深圳都市频道</a></li>
<li><a target="_blank" href="player.php?url=http://lglivepull.sznews.com/showto_live/2645.m3u8">深圳众创频道</a></li>
<li><a target="_blank" href="player.php?url=http://lives.jnnews.tv/video/s10001-JNTV-1/index.m3u8">济宁综合频道</a></li>
<li><a target="_blank" href="player.php?url=http://lives.jnnews.tv/video/s10001-SDTV/index.m3u8">济宁图文频道</a></li>
<li><a target="_blank" href="player.php?url=http://lives.jnnews.tv/video/s10001-JNTV3/index.m3u8">济宁公共频道</a></li>
<li><a target="_blank" href="player.php?url=http://lives.jnnews.tv/video/s10001-SDTV/index.m3u8">济宁教育频道</a></li>
<li><a target="_blank" href="player.php?url=http://stream.hrbtv.net/xwzh/sd/live.m3u8">哈尔滨综合频道</a></li>
<li><a target="_blank" href="player.php?url=http://stream.hrbtv.net/shpd/sd/live.m3u8">哈尔滨生活频道</a></li>
<li><a target="_blank" href="player.php?url=http://stream.hrbtv.net/ylpd/sd/live.m3u8">哈尔滨娱乐频道</a></li>
<li><a target="_blank" href="player.php?url=http://stream.hrbtv.net/yspd/sd/live.m3u8">哈尔滨影视频道</a></li>
<li><a target="_blank" href="player.php?url=http://live.hznet.tv:1935/live/live1/500K/tzwj_video.m3u8">菏泽一套综合</a></li>
<li><a target="_blank" href="player.php?url=http://live.hznet.tv:1935/live/live3/500K/tzwj_video.m3u8">菏泽三套影视</a></li>
<li><a target="_blank" href="player.php?url=http://live.hznet.tv:1935/live/live2/500K/tzwj_video.m3u8">菏泽二套生活</a></li>
<li><a target="_blank" href="player.php?url=http://hls.nntv.cn/nnlive/LATV_A.m3u8">隆安电视台</a></li>
<li><a target="_blank" href="player.php?url=http://stream.zztvzd.com/3/sd/live.m3u8">枣庄公共频道</a></li>
<li><a target="_blank" href="player.php?url=http://czlive.czgd.tv:85/live/xnyt.m3u8">沧州电视台一套</a></li>
<li><a target="_blank" href="player.php?url=http://czlive.czgd.tv:85/live/xnet.m3u8">沧州电视台二套</a></li>
<li><a target="_blank" href="player.php?url=http://czlive.czgd.tv:85/live/xnst.m3u8">沧州电视台三套</a></li>
<li><a target="_blank" href="player.php?url=https://jwliveqxzb.hebyun.com.cn/hdgg/hdgg.m3u8">邯郸公共频道</a></li>
<li><a target="_blank" href="player.php?url=https://jwliveqxzb.hebyun.com.cn/hdkj/hdkj.m3u8">邯郸科教频道</a></li>
<li><a target="_blank" href="player.php?url=http://hw-m-l.cztv.com/channels/lantian/channel02/1080p.m3u8">浙江都市频道</a></li>
<li><a target="_blank" href="player.php?url=http://hw-m-l.cztv.com/channels/lantian/channel05/1080p.m3u8">浙江影视娱乐频道</a></li>
<li><a target="_blank" href="player.php?url=http://hw-m-l.cztv.com/channels/lantian/channel04/1080p.m3u8">浙江教育科技频道</a></li>
<li><a target="_blank" href="player.php?url=http://hw-m-l.cztv.com/channels/lantian/channel03/1080p.m3u8">浙江经视频道</a></li>
<li><a target="_blank" href="player.php?url=http://hw-m-l.cztv.com/channels/lantian/channel06/1080p.m3u8">浙江民生休闲频道</a></li>
<li><a target="_blank" href="player.php?url=http://hw-m-l.cztv.com/channels/lantian/channel07/1080p.m3u8">浙江综合频道</a></li>
<li><a target="_blank" href="player.php?url=http://hw-m-l.cztv.com/channels/lantian/channel08/1080p.m3u8">浙江少儿频道</a></li>
<li><a target="_blank" href="player.php?url=http://hw-m-l.cztv.com/channels/lantian/channel10/1080p.m3u8">浙江国际频道</a></li>
<li><a target="_blank" href="player.php?url=http://hw-m-l.cztv.com/channels/lantian/channel09/1080p.m3u8">留学世界频道</a></li>
<li><a target="_blank" href="player.php?url=https://live.yjtvw.com:8081/live/smil:yjtv1.smil/playlist.m3u8">阳江综合频道</a></li>
<li><a target="_blank" href="player.php?url=https://live.yjtvw.com:8081/live/smil:yjtv2.smil/playlist.m3u8">阳江公共频道</a></li>
<li><a target="_blank" href="player.php?url=http://tmpstream.hyrtv.cn/xwzh/sd/live.m3u8">河源综合频道</a></li>
<li><a target="_blank" href="player.php?url=http://tmpstream.hyrtv.cn/hygg/sd/live.m3u8">河源公共频道</a></li>
<li><a target="_blank" href="player.php?url=https://hls.ningxiahuangheyun.com/live/nxws1M.m3u8">宁夏卫视频道</a></li>
<li><a target="_blank" href="player.php?url=https://hls.ningxiahuangheyun.com/live/nxgg1M.m3u8">宁夏公共频道</a></li>
<li><a target="_blank" href="player.php?url=https://hls.ningxiahuangheyun.com/live/nxse1M.m3u8">宁夏少儿频道</a></li>
<li><a target="_blank" href="player.php?url=https://tv.lanjingfm.com/cctbn/hainan.m3u8">中国交通频道</a></li>
<li><a target="_blank" href="player.php?url=http://live.wzqmt.com/wztv1/sd/live.m3u8">温州综合频道</a></li>
<li><a target="_blank" href="player.php?url=http://live.lyg1.com/zhpd/sd/live.m3u8">连云港综合频道</a></li>
<li><a target="_blank" href="player.php?url=http://live.lyg1.com/ggpd/sd/live.m3u8">连云港公共频道</a></li>
<li><a target="_blank" href="player.php?url=https://qxlmlive9.cbg.cn/applive/kzpd01/chunklist.m3u8">开州综合频道</a></li>
<li><a target="_blank" href="player.php?url=http://hls.nntv.cn/nnlive/NNTV_NEWS_A.m3u8">南宁综合频道</a></li>
<li><a target="_blank" href="player.php?url=http://hls.nntv.cn/nnlive/NNTV_METRO_A.m3u8">南宁都市频道</a></li>
<li><a target="_blank" href="player.php?url=http://hls.nntv.cn/nnlive/NNTV_VOD_A.m3u8">南宁影视频道</a></li>
<li><a target="_blank" href="player.php?url=http://hls.nntv.cn/nnlive/NNTV_PUB_A.m3u8">南宁公共频道</a></li>
<li><a target="_blank" href="player.php?url=https://qxlmlive9.cbg.cn/applive/zxtv2/chunklist.m3u8">忠县综合频道</a></li>
<li><a target="_blank" href="player.php?url=https://qxlmlive9.cbg.cn/applive/zxtv2/chunklist.m3u8">忠县文旅频道</a></li>
<li><a target="_blank" href="player.php?url=https://tvlive.ugoshop.com/ugotvlive/ssgotv.m3u8?auth_key=2312509421-0-0-6642ec3645caa943da6855a9ef7e2129">重庆时尚购物</a></li>
<li><a target="_blank" href="player.php?url=http://live.shaoxing.com.cn/video/s10001-sxtv3/index.m3u8">绍兴文化影视频道</a></li>
<li><a target="_blank" href="player.php?url=http://live.shaoxing.com.cn/video/s10001-sxtv2/index.m3u8">绍兴公共频道</a></li>
<li><a target="_blank" href="player.php?url=http://live.shaoxing.com.cn/video/s10001-sxtv1/index.m3u8">绍兴综合频道</a></li>
<li><a target="_blank" href="player.php?url=http://cm-wshls.homecdn.com/live/8bb.m3u8">扬州新闻频道</a></li>
<li><a target="_blank" href="player.php?url=http://cm-wshls.homecdn.com/live/8bd.m3u8">扬州城市频道</a></li>
<li><a target="_blank" href="player.php?url=http://cm-wshls.homecdn.com/live/8bf.m3u8">扬州生活频道</a></li>
<li><a target="_blank" href="player.php?url=http://cm-wshls.homecdn.com/live/8c3.m3u8">扬州邗江频道</a></li>
<li><a target="_blank" href="player.php?url=http://www.dalitv.com.tw:4568/live/dali/index.m3u8">大立電视频道</a></li>
<li><a target="_blank" href="player.php?url=http://lb.streaming.sk/fashiontv/stream/chunklist.m3u8">時尚台FTV频道</a></li>
<li><a target="_blank" href="player.php?url=https://live.mastvnet.com/lsdream/lY44pmm/2000/live.m3u8">澳亚卫视</a></li>
<li><a target="_blank" href="player.php?url=http://61.216.67.119:1935/TWHG/E1/chunklist_w705811302.m3u8">台湾番薯台</a></li>
<li><a target="_blank" href="player.php?url=https://live-350k.streamingfast.net/hls-live/goodtv/_definst_/liveevent/live-ch6-2.m3u8">GoodTV 经典音乐</a></li>
<li><a target="_blank" href="player.php?url=https://cdn.deepcore.online/hlsme/ctv_hk.m3u8">创世电视</a></li>
<li><a target="_blank" href="player.php?url=http://moneytoday1.ktcdn.co.kr:1935/mtnlive/720/playlist.m3u8">韓國新聞</a></li>
<li><a target="_blank" href="player.php?url=http://mgugaklive.nowcdn.co.kr/gugakvideo/gugakvideo.stream/playlist.m3u8">Gugak TV频道</a></li>
<li><a target="_blank" href="player.php?url=http://119.77.96.184:1935/chn05/chn05/chunklist_w1306745753.m3u8">韩国-KCTV</a></li>
<li><a target="_blank" href="player.php?url=http://moneytoday1.ktcdn.co.kr:1935/mtnlive/720/playlist.m3u8">CJB TV频道</a></li>
<li><a target="_blank" href="player.php?url=https://gstv-gsshop.gsshop.com/gsshop_hd/gsshop_hd.stream/playlist.m3u8">GS Shop频道</a></li>
<li><a target="_blank" href="player.php?url=http://1.222.207.80:1935/live/cjbtv/playlist.m3u8">韩国-EBS1</a></li>
<li><a target="_blank" href="player.php?url=http://119.200.131.11:1935/KBCTV/tv/playlist.m3u8">KBC 광주방송</a></li>
<li><a target="_blank" href="player.php?url=http://ebsonairios.ebs.co.kr/groundwavefamilypc/familypc1m/playlist.m3u8">韩国阿里郎</a></li>
<li><a target="_blank" href="player.php?url=https://hlive.ktv.go.kr/live/klive_h.stream/playlist.m3u8">Korea TV频道</a></li>
<li><a target="_blank" href="player.php?url=http://amdlive.ctnd.com.edgesuite.net/arirang_1ch/smil:arirang_1ch.smil/playlist.m3u8">韩国EBS少儿频道</a></li>
<li><a target="_blank" href="player.php?url=http://cdn-live1.qvc.jp/iPhone/800/800.m3u8">日本QVC Japan</a></li>
<li><a target="_blank" href="player.php?url=http://brics.bonus-tv.ru/cdn/brics/chinese/tracks-v1a1/index.m3u8">俄罗斯BRICS 中文</a></li>
<li><a target="_blank" href="player.php?url=http://online.video.rbc.ru/online/rbctv_480p/index.m3u8">RBK TV 俄语</a></li>
<li><a target="_blank" href="player.php?url=https://rt-glb.rttv.com/live/rtnews/playlist.m3u8">RT英语新闻</a></li>
<li><a target="_blank" href="player.php?url=http://de1se01.v2beat.live/chunks.m3u8">Vibee音乐频道</a></li>
<li><a target="_blank" href="player.php?url=http://live.m2.tv/hls3/stream.m3u8">乌克兰M2-音乐</a></li>
<li><a target="_blank" href="player.php?url=http://livestreamcdn.net:1935/ExtremaTV/ExtremaTV/playlist.m3u8">西班牙Extrema</a></li>
<li><a target="_blank" href="player.php?url=https://streaming01.divercom.be/notele_live/_definst_/direct.stream/chunklist.m3u8">法国notélé频道</a></li>
<li><a target="_blank" href="player.php?url=http://lb.streaming.sk/fashiontv/stream/playlist.m3u8">FTV-捷克&斯洛伐克</a></li>
<li><a target="_blank" href="player.php?url=http://tstv-stream.tsm.utexas.edu/hls/livestream_hi/index.m3u8">德克萨斯大学奥斯汀分校TSTV</a></li>
<li><a target="_blank" href="player.php?url=http://video.oct.dc.gov/out/u/DCN.m3u8">哥伦比亚特区电视</a></li>
<li><a target="_blank" href="player.php?url=http://streaming.astrakhan.ru/astrakhan24/index.m3u8">俄罗斯Astrakhan 24 </a></li>
<li><a target="_blank" href="player.php?url=http://s1.media-planet.sk:80/live/novezamky/BratuMarian.m3u8">斯洛伐克TVNZ</a></li>
<li><a target="_blank" href="player.php?url=https://stream.krgv.com/krgv-english/krgv-somos.smil/playlist.m3u8">KRGV-DT2</a></li>
<li><a target="_blank" href="player.php?url=https://stream.swagit.com/live-edge/houstontx/smil:hd-16x9-2-a/playlist.m3u8">HTV 1 Houston Television</a></li>
<li><a target="_blank" href="player.php?url=https://cdn.jaybirdtv.com/wfmz/channel/1/master.m3u8">WFMZ-DT1</a></li>
<li><a target="_blank" href="player.php?url=https://castus-vod-dev.s3.amazonaws.com/vod_clients/kvcr/live/ch1/video.m3u8">KVCR-DT2</a></li>
<li><a target="_blank" href="player.php?url=https://streamer1.connectto.com/AABC_WEB_1201/index.m3u8">KIIO-LD4</a></li>
<li><a target="_blank" href="player.php?url=https://edge1.lifestreamcdn.com/live/geb/playlist.m3u8">KBPX-LD5</a></li>
<li><a target="_blank" href="player.php?url=https://reflect-stream6-capsmedia.cablecast.tv/live/live.m3u8">CAPS Channel</a></li>
<li><a target="_blank" href="player.php?url=https://livecdn.live247stream.com/eternallife/tv/playlist.m3u8">Eternal Life TV Network</a></li>
<li><a target="_blank" href="player.php?url=https://cdn3.wowza.com/5/cHYzekYzM2kvTVFH/elsegundo/G0014_002/playlist.m3u8">El Segundo Media</a></li>
<li><a target="_blank" href="player.php?url=https://mtchls.wns.live/hls/stream.m3u8">MTC时尚</a></li>
<li><a target="_blank" href="player.php?url=https://live.feed.thepalmbeaches.tv/index.m3u8">Palm Beaches TV</a></li>
<li><a target="_blank" href="player.php?url=https://hls.keshishhamid.live/hls/stream.m3u8">Payame Aramesh TV</a></li>
<li><a target="_blank" href="player.php?url=https://stream.rcncdn.com/live/vsinproxy.m3u8">VSiN频道</a></li>
<li><a target="_blank" href="player.php?url=http://67.53.122.248/live-4/live/live.m3u8">City TV Lawndale</a></li>
<li><a target="_blank" href="player.php?url=http://live-hls-web-aje.getaj.net/AJE/01.m3u8">半岛新闻</a></li>
<li><a target="_blank" href="player.php?url=http://stream.revma.ihrhls.com/zc2001/hls.m3u8">FM电台 106.1 The Breeze</a></li>
<li><a target="_blank" href="player.php?url=http://stream.revma.ihrhls.com/zc1997/hls.m3u8">FM电台 Q102 Music Station</a></li>
<li><a target="_blank" href="player.php?url=http://stream.revma.ihrhls.com/zc6043/hls.m3u8">FM电台 NBC News Radio</a></li>
<li><a target="_blank" href="player.php?url=http://178.33.224.197:1935/euroindiemusic/euroindiemusic/playlist.m3u8">Euroindie音乐台频道</a></li>

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
