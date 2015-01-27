<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include("../../class/conn.php");
include("../../class/conf.php");
$id=$_POST["id"];
$user=$_POST['user'];
$name=$_POST['name'];
$message=$_POST['message'];
$to=$_POST['to'];
$user = str_replace('<', '', $user);
$user = str_replace('>', '', $user);
$name = str_replace('<', '', $name);
$name = str_replace('>', '', $name);
$message = str_replace('<', '', $message);
$message = str_replace('>', '', $message);
$to = str_replace('<', '', $to);
$to = str_replace('>', '', $to);
if(strlen($message)>280){
echo "祝福超过140字，请修改后重新提交！";
}else{
//url转码
$user=urlencode($user);
$name=urlencode($name);
$message=urlencode($message);
$to=urlencode($to);
//写入
$sql = "UPDATE `".MYSQLDB."`.`radio` SET `user` = '$user',`name`='$name',`message`='$message',`to`='$to' WHERE `radio`.`id` = $id;";
$result = mysql_query($sql,$con);
if($result){
header("Location: ../go.php");
$sql="ALTER TABLE  `radio` ORDER BY  `info`";
mysql_query($sql,$con);
}
else{
echo SUBMITNO;
}
}
mysql_close($con);
?>