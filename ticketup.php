<html><head><meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
error_reporting(0); 
$con = mysql_connect("localhost","qwe7002","331022");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('qwe7002_radio');
$name=$_POST['name'];
$m=$_POST['m'];
if($name==""){  
echo "������Ϣ����Ϊ��";}
else{
$sql = "INSERT INTO `qwe7002_radio`.`ticket` (`name`) VALUES ('$name');";
$result = mysql_query($sql,$con);
if($result){
if($m==""){
header("Location: http://r.smxybbs.net/go3.php");}
else{header("Location: http://mr.smxybbs.net/go3.php");}
}else{
echo "������������֪ͨ����Ա������Աqq��381511791";
}
}
mysql_close($con);
?>