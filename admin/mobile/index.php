<?php
setcookie('adminua','mobile',time()+315360000,"/");
?>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
include("../../class/conf.php");
include("class/t.htm");
?>
<title>�����ѵ���Ŀ�б� - <?php echo PROJECTNAME;?>�������� - Powered by smuradio</title>
        <h3><?php echo PROJECTNAME;?>��������</h3>
        <h3>�����ѵ���Ŀ�б�:</h3>
<hr/>   
<?php
if(isset($_COOKIE['login'])){
include("../../class/conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<p>�ϴ��Զ��������ݿ�ʱ�䣺".$row[deltime];
}
mysql_close($con);
?>	
<form name=myform action="../../admin/class/del.php" method="post">
	<p>�����¼����ָ���ʼ�����˲���������������ݲ����޷��ָ��������ã���<input type="text"name="pw"><input type="submit" value="�ύ"></p>
</form>
<br>
Ͷ�忪�أ�
<form name="formoff" action="../class/off.php" method="post">
�򿪣�<input type="radio" name="off" value="0">&nbsp;&nbsp;
�رգ�<input type="radio" name="off" value="1">&nbsp;&nbsp;
<input type="submit" class="btn btn-primary" value="�ύ�޸�"/>
</form>
<hr/>  
<?php
include("../../class/conn.php");
$sql = "SELECT * FROM `radio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<p>�ύʱ�䣺".urldecode($row[uptime])."</p>
<p>ϣ�����ŵ�ʱ�䣺".urldecode($row[time])."</p>
<p>��������".urldecode($row[name])."</p>
<p>����ˣ�".urldecode($row[user])."</p>
<p>�͸���".urldecode($row[to])."</p>
<p>���ԣ�".urldecode($row[message])."</p>
<p>Ͷ����ip��".urldecode($row[ip])."</p>";
echo '<form action="../class/delmusic.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" value="���Ϊ�Ѳ���" />
</form><form action="../class/delnoplay.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" value="���Ϊδ����" />
</form><hr>';

}
mysql_close($con);
}else{header("location:login.php");}
?>	