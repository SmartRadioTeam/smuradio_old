<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
include("class/t.htm");
include("../../class/conf.php");
?>
<title>δ�����б� - <?php echo PROJECTNAME;?>�������� - Powered by smuradio</title>
<h3><?php echo PROJECTNAME;?>��������</h3>
<h3>δ�����б�:</h3>
<hr/>
<?php
include("../../class/conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<p>�ϴ��Զ��������ݿ�ʱ�䣺".$row[deltime];
}
mysql_close($con);
?>	
<hr/>  
<?php
if(isset($_COOKIE['login'])){
include("../../class/conn.php");
$sql = "SELECT * FROM `noplay`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<p>�ύʱ�䣺".urldecode($row[uptime])."</p>
<p>ϣ�����ŵ�ʱ�䣺".urldecode($row[time])."</p>
<p>��������".urldecode($row[name])."</p>
<p>����ˣ�".urldecode($row[user])."</p>
<p>�͸���".urldecode($row[to])."</p>
<p>���ԣ�".urldecode($row[message])."</p>";
echo '<form action="../class/backnoplay.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" value="�ָ�" />
</form><hr>';
}
mysql_close($con);
}else{header("location:login.php");}
?>	