<html><head><meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
date_default_timezone_set ('PRC');
$uptime=date("Y-m-d H:i:s",time());
error_reporting(0); 
$con = mysql_connect("localhost","qwe7002","331022");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('qwe7002_radio');
$user=$_POST['user'];
$name=$_POST['name'];
$message=$_POST['message'];
$to=$_POST['to'];
$time=$_POST['time'];
$m=$_POST['m'];
if($name==""||$user==""||$message==""||$to==""||$time==""){  
echo "信息不能为空";}
else{
$sql = "INSERT INTO `qwe7002_radio`.`radio` (`user`, `name`, `message`,`to`,`time`,`uptime`) VALUES ('$user', '$name', '$message', '$to', '$time','$uptime');";
$result = mysql_query($sql,$con);
if($result){
if($m==""){
header("Location: http://r.smxybbs.net/go.php");}
else{header("Location: http://mr.smxybbs.net/go.php");}
}else{
echo "服务器错误！请通知管理员！管理员qq：381511791";
}
}
mysql_close($con);
?>