<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
include("../../class/conf.php");
include("class/t.htm");
?>	  
<title>公告 - <?php echo PROJECTNAME;?>管理中心 - Powered by smuradio</title>
<h3><?php echo PROJECTNAME;?>管理中心</h3>
<h3>公告</h3>
<hr>
<?php
if(isset($_COOKIE['login'])){
include("../../class/message.php");}else{header("location:login.php");}
?>	
<form name=myform action="../../admin/class/message.php" method="post">
<p>通知信息：<input type="text"name="message"></p>
<input type="submit" value="提交" name="m">
</form>
<br>