<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
if(isset($_COOKIE['login'])){
include_once("../../class/conn.php");
$name=$_POST['name'];
$name = str_replace('<', '', $name);
$name = str_replace('>', '', $name);

$name=urlencode($name);
$sql="INSERT INTO `".MYSQLDB."`.`ersong` (`name`) VALUES ('$name');";
$result = mysql_query($sql,$con);
if($result){
header("Location: ../go.php");}
else{
header("Location: ../go.php");
}
mysql_close($con);
}else{header("location:../");}
?>