<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<?php
//新功能添加的推荐
if(is_file('./data/aik.seturl.php')){
include('./data/aik.seturl.php');
  if(is_array($seturl)){
  //print_r($seturl['title'][0]);//打印输出
    if(count($seturl['title'])>0){
        for($i=0;$i<count($seturl['title']);$i++){
          $urls=array(
            'name' => $seturl['title'][$i],
            'urls' => array(
              'type' => array($seturl['type'][$i]),
              'url' => array($seturl['newurl'][$i]),            
              'ly' => array('自定义')
            )
          );
          $mbz=str_replace('+','imjh',base64_encode($seturl['newurl'][$i]));
        echo '<li><a target="_blank" href="playc.php?url='.$seturl['type'][$i].'&url='.$mbz.'&name='.$seturl['title'][$i].'">'.$seturl['title'][$i].'</a></li> ';
        } 
      echo ' ';
    }
  }
}
//新功能添加推荐
?>
