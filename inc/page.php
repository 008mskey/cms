<?php
if(isset($_GET['page'])){
  $HidoveInfo = [
    'page' => $_GET['page'],
  ];
}else{
  $HidoveInfo = [
      'page' => 0,
  ];
}
?>
<a href="?page=<?php echo ($HidoveInfo['page']-1)?>">上一页</a>  <a href="?page=<?php echo ($HidoveInfo['page']+1)?>"> 下一页</a>
<a href="javascript:void(0);">当前第 <?php echo $_GET['page'];?> 页</a>