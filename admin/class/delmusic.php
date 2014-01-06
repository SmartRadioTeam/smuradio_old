<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
if(isset($_COOKIE['login'])){
include("../../class/conn.php");
$id=$_POST['id'];
$sql = "SELECT * FROM `radio` WHERE `id`=$id";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
$time = $row[time];
$name = $row[name];
$user = $row[user];
$to = $row[to];
$message = $row[message];
$uptime=$row[uptime];
}
if($time==""||$name==""||$user==""||$to==""||$message==""||$uptime==""){
echo "不可预料的信息错误！";
}else{
$sql = "INSERT INTO `".MYSQLDB."`.`delradio` (`user`, `name`, `message`,`to`,`time`,`uptime`) VALUES ('$user', '$name', '$message', '$to', '$time', '$uptime');";
$result = mysql_query($sql,$con);
if($result){
$sql="DELETE FROM `".MYSQLDB."`.`radio` WHERE `radio`.`id` = $id;";
$result = mysql_query($sql,$con);
if($result){
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
}else{header("location:../login.php");}
?>	