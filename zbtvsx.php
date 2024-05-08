<?php
$id = isset($_GET['id'])?$_GET['id']:'sxws';
$n = [
     'sxws' => 4, //陕西卫视
     'sxxwzx' => 1, //新闻资讯
     'sxdsqc' => 2, //都市青春
     'sxsh' => 3, //生活频道
     'sxgg' => 5, //公共频道
     'sxtyxx' => 9, //体育休闲
     'nlws' => 7, //农林卫视
     ];
   $d = file_get_contents('http://toutiao.cnwest.com/sxtoutiao/getOnlineList');
   $j = json_decode($d);
   for($i=0;$i<count($j->data);$i++){
       if($n[$id] == $j->data[$i]->id){
           $m3u8 = $j->data[$i]->onlineUrlForandroid;
       }
   }
   header('Location:player.php?url='.$m3u8);
?>
