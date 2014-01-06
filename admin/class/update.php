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
header("Location: ../go.php");}
else{
header("Location: ../go.php");
}
mysql_close($con);
}else{header("location:../login.php");}
?>