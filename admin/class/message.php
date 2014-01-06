<html><head><meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
if(isset($_COOKIE['login'])){
include("../../class/conn.php");
$message=$_POST['message'];
if($message==""){  
echo "信息不能为空";}
else{
$message=urlencode($message);
$sql = "TRUNCATE TABLE `message`";
$result = mysql_query($sql,$con);
$sql = "INSERT INTO `".MYSQLDB."`.`message` (`message`) VALUES ('$message');";
$result = mysql_query($sql,$con);
if($result){header("Location: ../go.php");}else{
echo "服务器错误！请通知管理员！管理员qq：381511791";
}
}
mysql_close($con);
}else{header("location:../login.php");}
?>