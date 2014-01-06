<?php
include("../../class/conf.php");
$password=$_POST['password'];
error_reporting(0);
if(!isset($_COOKIE['login'])){
if($password==""){
echo'<form name=myform method="post">
	<p>请输入密码<input type="password"name="password"></p>
<input type="submit" value="登录">
</form>';
}else{
if($password==PASSWORD){
setcookie('login','sanmingxueyuan',time()+86400,"/");
header('location:index.php');
}
else{header('location:login.php');}
}
}
else{
header('location:index.php');
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>登录 - <?php echo PROJECTNAME;?>管理中心 - Powered by smuradio</title>