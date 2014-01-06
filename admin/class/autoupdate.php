<?php
$cip = "检测到无点歌信息，系统自动点歌。如有他人点歌信息请优先播放他人点歌。";
date_default_timezone_set ('PRC');
$uptime=date("Y-m-d H:i:s",time());
include_once("../../class/conn.php");
$sql = "SELECT * FROM `radio`";
$result = mysql_query($sql,$con);
$count=mysql_num_rows($result);
if($count==0){
$sql = "SELECT * FROM `songtable`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
$song[]=$row['song'];
$username[]=$row['user'];
$messages[]=$row['message'];
}
$count=mysql_num_rows($query);
$count=$count-1;
$user=$username[rand(0,$count)];
$name=$song[rand(0,$count)];
$to=$username[rand(0,$count)];
$message=$messages[rand(0,$count)];
if($user==$to){
$to=urlencode("自己");
}
$time=urlencode("机器人自动点歌，请在没有其他点歌的时候播放！");
$uptime=urlencode($uptime);
$cip=urlencode($cip);
//写入
$sql = "INSERT INTO `".MYSQLDB."`.`radio` (`user`, `name`, `message`,`to`,`time`,`uptime`,`ip`) VALUES ('$user', '$name', '$message', '$to', '$time','$uptime','$cip');";
$result = mysql_query($sql,$con);
$sql="ALTER TABLE  `radio` ORDER BY  `id`";
mysql_query($sql,$con);
mysql_close($con);
}

?>