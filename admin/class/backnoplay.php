<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
if(isset($_COOKIE['login'])){
include("../../class/conn.php");
$id = $_POST['id'];
$cip = urlencode("恢复的记录");
$sql = "SELECT * FROM `noplay` WHERE `id` = $id";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
$time = $row[time];
$name = $row[name];
$user = $row[user];
$to = $row[to];
$message = $row[message];
$uptime = $row[uptime];
}
if($time==""||$name==""||$user==""||$to==""||$message==""||$uptime==""){
echo "不可预料的信息错误！";
}else{
$sql = "INSERT INTO `".MYSQLDB."`.`radio` (`user`, `name`, `message`,`to`,`time`,`uptime`,`ip`) VALUES ('$user', '$name', '$message', '$to', '$time', '$uptime', '$cip');";
$result = mysql_query($sql,$con);
if($result){
$sql="DELETE FROM `".MYSQLDB."`.`noplay` WHERE `noplay`.`id` =$id;";
$result = mysql_query($sql,$con);
if($result){
$sql="ALTER TABLE  `radio` ORDER BY  `id`";
mysql_query($sql,$con);
header("Location: ../go.php");}
else{
echo "服务器错误！请通知管理员！管理员qq：381511791";
}
}
else{
echo "服务器错误！请通知管理员！管理员qq：381511791";
}
}
mysql_close($con);
}else{header("location:../");}
?>	