<html><head><meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
if(isset($_COOKIE['login'])){
include_once("../../class/conn.php");
$user=$_POST['user'];
$song=$_POST['name'];
$message=$_POST['message'];
$user = str_replace('<', '', $user);
$user = str_replace('>', '', $user);
$song = str_replace('<', '', $song);
$song = str_replace('>', '', $song);
$message = str_replace('<', '', $message);
$message = str_replace('>', '', $message);
$user=urlencode($user);
$song=urlencode($song);
$message=urlencode($message);
$sql="INSERT INTO `".MYSQLDB."`.`songtable` (`user`, `song`, `message`) VALUES ('$user', '$song', '$message');";
$result = mysql_query($sql,$con);
if($result){
header("Location: ../go.php?echo=".urlencode("您的信息已经成功提交到数据库，请耐心等待广播站排序播放！谢谢！"));}
else{
header("Location: ../go.php?echo=".urlencode("服务器错误！请通知管理员！管理员qq：381511791"));
}
mysql_close($con);
}else{header("location:../login.php");}
?>