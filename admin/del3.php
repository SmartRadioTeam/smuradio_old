
<?php
error_reporting(0); 
$con = mysql_connect("localhost","qwe7002","331022");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('qwe7002_radio');
$pw=$_POST['pw'];
if($pw=="123456"){  
$sql = "TRUNCATE TABLE `ticket`";
$result = mysql_query($sql,$con);
if($result){
header("Location: http://r.smxybbs.net/admin/go.php");}
else{echo "������������֪ͨ����Ա������Աqq��381511791";}
}else{echo "�������";}

mysql_close($con);
?>