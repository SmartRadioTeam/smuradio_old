<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
if(isset($_COOKIE['login'])){
include("../../class/conn.php");
$id=$_POST['id'];
$sql = "UPDATE `".MYSQLDB."`.`radio` SET `info` = '2' WHERE `radio`.`id` = $id;";
$result = mysql_query($sql,$con);
if($result){
header("Location: ../go.php");}
else{
echo "������������֪ͨ����Ա������Աqq��381511791";
}
$sql="ALTER TABLE  `radio` ORDER BY  `info`";
mysql_query($sql,$con);
mysql_close($con);
}else{header("location:../");}
?>	