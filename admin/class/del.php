<?php
if(isset($_COOKIE['login'])){
include("../../class/conf.php");
include("../../class/conn.php");
$pw=$_POST['pw'];
if($pw==PASSWORD){
$sql = "TRUNCATE TABLE `radio`";
mysql_query($sql,$con);
header("Location: ../go.php");
}else{echo "密码错误！";}
mysql_close($con);
}else{header("location:../");}
?>