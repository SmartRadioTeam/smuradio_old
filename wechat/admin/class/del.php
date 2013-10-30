<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include("conn.php");
$id=$_GET['id'];
$sql = "SELECT * FROM `robot`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
$keywords[] = $row[keywords];
$retun[] = $row[retun];
}
$sql="DELETE FROM `qwe7002_radio`.`robot` WHERE `robot`.`keywords` = '".$keywords[$id]."' AND `robot`.`retun` = '".$retun[$id]."';";
$result = mysql_query($sql,$con);
if($result){
header("Location: http://wechat.smxybbs.net/admin/go.php");}
else{
echo "服务器错误！请通知管理员！管理员qq：381511791";
}
mysql_close($con);
?>	