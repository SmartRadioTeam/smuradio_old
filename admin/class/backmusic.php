<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
include("../../class/conn.php");
$id=$_GET['id'];
$sql = "SELECT * FROM `delradio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
$time[] = $row[time];
$name[] = $row[name];
$user[] = $row[user];
$to[] = $row[to];
$message[] = $row[message];
$uptime[] = $row[uptime];
}
if($time[$id]==""||$name[$id]==""||$user[$id]==""||$to[$id]==""||$message[$id]==""||$uptime[$id]==""){
echo "����Ԥ�ϵ���Ϣ����";
}else{
$sql = "INSERT INTO `qwe7002_radio`.`radio` (`user`, `name`, `message`,`to`,`time`,`uptime`) VALUES ('$user[$id]', '$name[$id]', '$message[$id]', '$to[$id]', '$time[$id]', '$uptime[$id]');";
$result = mysql_query($sql,$con);
if($result){
$sql="DELETE FROM `qwe7002_radio`.`delradio` WHERE `delradio`.`time` = '".$time[$id]."' AND `delradio`.`uptime` = '".$uptime[$id]."' AND `delradio`.`name` = '".$name[$id]."' AND `delradio`.`user` = '".$user[$id]."'AND `delradio`.`to` = '".$to[$id]."'AND `delradio`.`message` = '".$message[$id]."';";
$result = mysql_query($sql,$con);
if($result){
header("Location: http://r.smxybbs.net/admin/go.php");}
else{
echo "������������֪ͨ����Ա������Աqq��381511791";
}
}
else{
echo "������������֪ͨ����Ա������Աqq��381511791";
}
}
mysql_close($con);
?>	