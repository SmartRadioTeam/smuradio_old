<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include("conn.php");
include("conf.php");
if(!empty($_SERVER["HTTP_CLIENT_IP"])){
$cip = $_SERVER["HTTP_CLIENT_IP"];
}
elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
$cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
elseif(!empty($_SERVER["REMOTE_ADDR"])){
$cip = $_SERVER["REMOTE_ADDR"];
}else{
$cip = "NULL";
}
date_default_timezone_set ('PRC');
$uptime=date("Y-m-d H:i:s",time());
$user=$_POST['user'];
$tel=$_POST['tel'];
$message=$_POST['message'];
//过滤
$user = str_replace('<', '', $user);
$user = str_replace('>', '', $user);
$tel = str_replace('<', '', $tel);
$tel = str_replace('>', '', $tel);
$message = str_replace('<', '', $message);
$message = str_replace('>', '', $message);
if($tel==""||$user==""||$message==""){  
header("Location: go.php?echo=".urlencode("信息不能为空"));
}
else{
if(strlen($message)>280){
header("Location: go.php?echo=".urlencode("祝福超过140字，请修改后重新提交！"));
}else{
//url转码
$user=urlencode($user);
$tel=urlencode($tel);
$message=urlencode($message);
$time=urlencode($time);
$uptime=urlencode($uptime);
//写入
$sql = "INSERT INTO `".MYSQLDB."`.`lostandfound` (`user`, `tel`, `message`,`uptime`,`ip`) VALUES ('$user', '$tel', '$message','$uptime','$cip');";
$result = mysql_query($sql,$con);
if($result){
header("Location: go.php?echo=".urlencode(SUBMITYES));
$sql="ALTER TABLE  `lostandfound` ORDER BY  `info`";
mysql_query($sql,$con);
}
else{
header("Location: go.php?echo=".urlencode(SUBMITNO));
}
}
}
mysql_close($con);
?>