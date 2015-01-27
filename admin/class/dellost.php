<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
if(isset($_COOKIE['login'])){
include("../../class/conn.php");
$id=$_POST['id'];
$sql="DELETE FROM `".MYSQLDB."`.`lostandfound` WHERE `lostandfound`.`id` = $id;";
$result = mysql_query($sql,$con);
if($result){
header("Location: ../go.php?url=/admin/touch/lostandfound.php");
}
else{
echo "服务器错误！请通知管理员！管理员qq：381511791";
}
$sql="ALTER TABLE  `radio` ORDER BY  `info`";
mysql_query($sql,$con);
mysql_close($con);
}else{header("location:../");}
?>	