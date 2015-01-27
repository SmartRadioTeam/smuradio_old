<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include("conn.php");
include("conf.php");
//判断是否被关闭
$sql = "SELECT * FROM `takeoff` WHERE `id`=0";
$query=mysql_query($sql,$con);
$backcount=mysql_num_rows($query); 
if($backcount==0){
header("Location: go.php?echo=".urlencode("抱歉，系统拒绝新的点歌，详情请见公告！"));
}else{
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
$name=$_POST['name'];
$message=$_POST['message'];
$to=$_POST['to'];
$time=$_POST['time'];
$option=$_POST['option'];
$day=$_POST['day'];
//过滤
$user = str_replace('<', '', $user);
$user = str_replace('>', '', $user);
$name = str_replace('<', '', $name);
$name = str_replace('>', '', $name);
$message = str_replace('<', '', $message);
$message = str_replace('>', '', $message);
$to = str_replace('<', '', $to);
$to = str_replace('>', '', $to);
$time=$time.'-'.$day;
if($time=="02-30"||$time=="02-31"||$time=="04-31"||$time=="06-31"||$time=="09-31"||$time=="11-31"){
header("Location: go.php?echo=".urlencode("错误的播放时间！请修改后重新提交！"));
}else{
if($name==""||$user==""||$message==""||$to==""){  
header("Location: go.php?echo=".urlencode("信息不能为空"));
}
else{
if(strlen($message)>280){
header("Location: go.php?echo=".urlencode("祝福超过140字，请修改后重新提交！"));
}else{
//url转码
$user=urlencode($user);
$name=urlencode($name);
$message=urlencode($message);
$to=urlencode($to);
$time=urlencode($time);
$uptime=urlencode($uptime);
$cip=urlencode($cip);
$option=urlencode($option);
$sql = "SELECT * FROM `ersong` WHERE `name` LIKE '$name'";
$query=mysql_query($sql,$con);
$backcount=mysql_num_rows($query); 
if($backcount!=0){
header("Location: go.php?echo=".urlencode(SUBMITHSONG));
}else{
//写入
$sql = "SELECT * FROM `radio` WHERE `user` LIKE '$user' AND `name` LIKE '$name' AND `message` LIKE '$message' AND `to` LIKE '$to' AND `time` LIKE '$time'";
$query=mysql_query($sql,$con);
if(mysql_num_rows($query)>=1){
header("Location: go.php?echo=".urlencode("请不要重复提交歌曲！谢谢！"));
}else{
$sql = "INSERT INTO `".MYSQLDB."`.`radio` (`user`, `name`, `message`,`to`,`time`,`uptime`,`ip`,`info`,`option`) VALUES ('$user', '$name', '$message', '$to', '$time','$uptime','$cip','0','$option');";
$result = mysql_query($sql,$con);
if($result){
header("Location: go.php?echo=".urlencode(SUBMITYES));
$sql="ALTER TABLE  `radio` ORDER BY  `info`";
mysql_query($sql,$con);
}
else{
header("Location: go.php?echo=".urlencode(SUBMITNO));
}
}
}
}
}
}
}
mysql_close($con);
?>