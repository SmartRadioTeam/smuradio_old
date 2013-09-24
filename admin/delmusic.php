<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
error_reporting(0); 
$con = mysql_connect("localhost","qwe7002","331022");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$id=$_GET['id'];
mysql_select_db('qwe7002_radio');
$sql = "SELECT * FROM `radio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
$time[] = $row[time];
$name[] = $row[name];
$user[] = $row[user];
$to[] = $row[to];
$message[] = $row[message];
$uptime[]=$row[uptime];
}
if($time==""||$name==""||$user==""||$to==""||$message==""||$uptime==""){
echo "不可预料的信息错误！";
}else{
$sql = "INSERT INTO `qwe7002_radio`.`delradio` (`user`, `name`, `message`,`to`,`time`,`uptime`) VALUES ('$user[$id]', '$name[$id]', '$message[$id]', '$to[$id]', '$time[$id]', '$uptime[$id]');";
$result = mysql_query($sql,$con);
if($result){
$sql="DELETE FROM `qwe7002_radio`.`radio` WHERE `radio`.`time` = '".$time[$id]."' AND `radio`.`name` = '".$name[$id]."' AND `radio`.`uptime` = '".$uptime[$id]."' AND `radio`.`user` = '".$user[$id]."'AND `radio`.`to` = '".$to[$id]."'AND `radio`.`message` = '".$message[$id]."';";
$result = mysql_query($sql,$con);
if($result){
header("Location: http://r.smxybbs.net/admin/go.php");}
else{
echo "服务器错误！请通知管理员！管理员qq：381511791";
}
}
else{
echo "服务器错误！请通知管理员！管理员qq：381511791";
}
}
mysql_close($con);
?>	