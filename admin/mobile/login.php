<?php
include("../../class/conf.php");
$password=$_POST['password'];
error_reporting(0);
if(!isset($_COOKIE['login'])){
if($password==""){
echo'<form name=myform method="post">
	<p>����������<input type="password"name="password"></p>
<input type="submit" value="��¼">
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
<title>��¼ - <?php echo PROJECTNAME;?>�������� - Powered by smuradio</title>