<html><head><meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
if(isset($_COOKIE['login'])){
include("../../class/conn.php");
$message=$_POST['off'];
if($message==""){  
echo "��Ϣ����Ϊ��";}
else{
$sql = "TRUNCATE TABLE `takeoff`";
$result = mysql_query($sql,$con);
$sql = "INSERT INTO `".MYSQLDB."`.`takeoff` (`id`) VALUES ('$message');";
$result = mysql_query($sql,$con);
if($result){header("Location: ../go.php");}else{
echo "������������֪ͨ����Ա������Աqq��381511791";
}
}
mysql_close($con);
}else{header("location:../login.php");}
?>