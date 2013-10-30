<?php
include("../../class/conn.php");
$pw=$_POST['pw'];
if($pw=="sanmingxueyuanradio"){
$sql = "TRUNCATE TABLE `radio`";
$result = mysql_query($sql,$con);
if($result){header("Location: http://r.smxybbs.net/admin/go.php");}
else{echo "服务器错误！请通知管理员！管理员qq：381511791";}
}else{echo "密码错误！";}
mysql_close($con);
?>