<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
if(isset($_COOKIE['login'])){
include("toast.php");
include("../../class/conn.php");
$id=$_POST['id'];
$sql = "UPDATE `".MYSQLDB."`.`radio` SET `info` = '0' WHERE `radio`.`id` = $id;";
$result = mysql_query($sql,$con);
if($result){
$sql = "SELECT * FROM `radio` WHERE `radio`.`id` = $id;";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
if($row["uri"]!=null){
toastup($row["uri"],"您的点歌「".urldecode($row["name"])."」未被播放");
}
}
header("Location: ../go.php");}
else{
echo "服务器错误！请通知管理员！管理员qq：381511791";
}
$sql="ALTER TABLE  `radio` ORDER BY  `info`";
mysql_query($sql,$con);
mysql_close($con);
}else{header("location:../");}
?>	