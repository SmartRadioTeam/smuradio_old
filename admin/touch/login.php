<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
<?php
include("../../class/conf.php");
error_reporting(0);
$password=$_POST['password'];
if(!isset($_COOKIE['login'])){
if($password==""){
echo'<!DOCTYPE html>
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <form class="form-signin" role="form" id="1298341720" method="post">
        <h2 class="form-signin-heading">��¼��������</h2>
        <input type="password" name="password" class="form-control" placeholder="����" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">��¼</button>
      </form>

    </div>
</body></html>';
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

<title>��¼ - <?php echo PROJECTNAME;?>�������� - Powered by smuradio</title>
