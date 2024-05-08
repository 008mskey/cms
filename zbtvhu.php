<?php
$id= isset($_GET['id'])?$_GET['id']:'hnjs';
$n = [
    'hnjs'   => '280', //湖南经视
    'hnyl'   => '344', //湖南娱乐
    'hndy'   => '221', //删除
    'hnds'   => '346', //湖南都市
    'hndsj'  => '484', //湖南电视剧
    'hngg'   => '261', //湖南公共
    'hngj'   => '229', //湖南国际
    'jyjs'   => '316', //金鹰纪实
    'jykt'   => '287', //金鹰卡通
    'xfpy'   => '329', //删除
    'klcd'   => '218', //删除
    'cpd'    => '578', //删除
    'csxwzh' => '269', //删除
    'cszfpd' => '254', //删除
    'csnxpd' => '230', //删除
    'klg'    => '267', //快乐购
];
if (!array_key_exists($id, $n)) { die(); }
$info = explode('&', $n[$id]);
$url = 'http://pwlp.bz.mgtv.com/v1/epg/turnplay/getLivePlayUrlMPP?version=PCweb_1.0&platform=1&buss_id=2000001&channel_id='.$info[0];
//var_dump($url);
$data = file_get_contents($url);
$json = json_decode($data);
$m3u8 = $json -> data -> url;
header('Location: player.php?url='.$m3u8);
//echo $m3u8;
?>