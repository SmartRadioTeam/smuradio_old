
<?php
include("../../class/conn.php");
mysql_select_db('qwe7002_radio');
$pw=$_POST['pw'];
if($pw==""){  
$sql = "TRUNCATE TABLE `ticket`";
$result = mysql_query($sql,$con);
if($result){
header("Location: http://r.smxybbs.net/admin/go.php");}
else{echo "������������֪ͨ����Ա������Աqq��381511791";}
}else{echo "�������";}

mysql_close($con);
?>