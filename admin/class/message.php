﻿<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
if(isset($_COOKIE['login'])){
include("../../class/conn.php");
$message=$_POST['message']; 
$message=urlencode($message);
$sql = "TRUNCATE TABLE `message`";
$result = mysql_query($sql,$con);
if($message!=""){
$sql = "INSERT INTO `".MYSQLDB."`.`message` (`message`) VALUES ('$message');";
$result = mysql_query($sql,$con);
}
if($result){header("Location: ../go.php");}else{
echo "服务器错误！请通知管理员！管理员qq：381511791";
}
mysql_close($con);
}else{header("location:../");}
?>