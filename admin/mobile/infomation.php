<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
include("../../class/conf.php");
include("class/t.htm");
?>	  
<title>���� - <?php echo PROJECTNAME;?>�������� - Powered by smuradio</title>
<h3><?php echo PROJECTNAME;?>��������</h3>
<h3>����</h3>
<hr>
<?php
if(isset($_COOKIE['login'])){
include("../../class/message.php");}else{header("location:login.php");}
?>	
<form name=myform action="../../admin/class/message.php" method="post">
<p>֪ͨ��Ϣ��<input type="text"name="message"></p>
<input type="submit" value="�ύ" name="m">
</form>
<br>