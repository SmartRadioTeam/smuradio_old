<?php
include("../../class/conn.php");
$pw=$_POST['pw'];
if($pw=="sanmingxueyuanradio"){
$sql = "TRUNCATE TABLE `radio`";
$result = mysql_query($sql,$con);
if($result){header("Location: http://r.smxybbs.net/admin/go.php");}
else{echo "������������֪ͨ����Ա������Աqq��381511791";}
}else{echo "�������";}
mysql_close($con);
?>