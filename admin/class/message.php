<html><head><meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
include("../../class/conn.php");
$message=$_POST['message'];
if($message==""){  
echo "��Ϣ����Ϊ��";}
else{
$message=urlencode($message);
$sql = "TRUNCATE TABLE `message`";
$result = mysql_query($sql,$con);
$sql = "INSERT INTO `qwe7002_radio`.`message` (`message`) VALUES ('$message');";
$result = mysql_query($sql,$con);
if($result){header("Location: http://r.smxybbs.net/admin/go.php");}else{
echo "������������֪ͨ����Ա������Աqq��381511791";
}
}
mysql_close($con);
?>