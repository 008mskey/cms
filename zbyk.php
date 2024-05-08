<?php
header("Content-type:text/json;charset=utf-8");
$time = time();
$weburl = 'https://webapi.busi.inke.cn/web/live_hotlist_pc?_t='.$time;
$json =get_data($weburl);

$arrids = $json->data->hotlists;
$uid = $arrids[array_rand($arrids,1)]->id;

$stream='https://webapi.busi.inke.cn/web/live_share_pc?uid='.$uid;
$info = get_data($stream);

$live = $info->data->live_addr[0];
$flv = $live->stream_addr;
$hls = $live->hls_stream_addr;

$playurl = array($flv,$hls)[mt_rand(0,1)];

header('location:zbykjx.php?vurl='.$playurl);

function get_data($url){
  $header=array(
    'User-Agent:'.$_SERVER['HTTP_USER_AGENT'],
    'Referer: https://www.inke.cn/',
    );
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  $data = curl_exec($ch);
  curl_close($ch);
  return json_decode($data);
}
?>
