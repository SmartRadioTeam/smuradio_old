<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include_once("conn.php");
$keywords=$_POST['keywords'];
$retun=$_POST['retun'];
$keywords=urlencode($keywords);
$retun=urlencode($retun);
if($keywords==""||$retun==""){  
echo "信息不能为空";}
else{
//写入
$keywords=urlencode($_POST['keywords']);
$retun=urlencode($_POST['retun']);
$sql = "INSERT INTO `qwe7002_radio`.`robot` (`keywords`, `retun`) VALUES ('$keywords', '$retun');";
$result = mysql_query($sql,$con);
if($result){
header("Location: http://wechat.smxybbs.net/admin/go.php");}
else{
echo "服务器错误！请通知管理员！管理员qq：381511791";
}
}
mysql_close($con);
?>