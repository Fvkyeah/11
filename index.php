<?php
function detect_mobile()
{
if(preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|playbook|sagem|sharp|sie-|silk|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT']))
return true;
 else
return false;
}
?>
<?php 
$mobile = detect_mobile();
if($mobile === false){?>
<?php header("Location: view/login.php?userid=".$_GET['userid']); ?>
<?php }else{?>
<?php header("Location: mobile/login.php?userid=".$_GET['userid']); ?>
<?
}
?>