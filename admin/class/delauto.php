<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
if(isset($_COOKIE['login'])){
include("../../class/conn.php");
$id=$_POST['id'];
$sql="DELETE FROM `".MYSQLDB."`.`songtable` WHERE `songtable`.`id` = $id;";
$result = mysql_query($sql,$con);
if($result){
header("Location: ../go.php");}
else{
echo "������������֪ͨ����Ա������Աqq��381511791";
}
mysql_close($con);
}else{header("location:../login.php");}
?>	