<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
include("../../class/conf.php");
if(isset($_COOKIE['login'])){}else{header("location:login.php");}
include ("class/t.htm");
?>	  	          
<title>�Զ��㲥 - <?php echo PROJECTNAME;?>�������� - Powered by smuradio</title>
<h3><?php echo PROJECTNAME;?>��������</h3>
<h3>�Զ��㲥</h3>
<form name=myform action="../class/update.php" method="post">
<p>��������<input type="text"name="name"></p>
<p>����ˣ�<input type="text"name="user"></p>
<p>��˵�Ļ�:</p><textarea name="message"></textarea>  
<br />
<input type="submit" value="�ύ" name="m">
</form>
<hr>
<?php
include("../../class/conn.php");
$sql = "SELECT * FROM `songtable`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<p>��������'.urldecode($row[song]).'</p>
<p>����ˣ�'.urldecode($row[user]).'</p>
<p>��˵�Ļ�:'.urldecode($row[message]).'</p>';
echo '<form action="../class/delauto.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" value="ɾ���Զ����ı�" />
</form><hr>';
}
?>	
<hr>