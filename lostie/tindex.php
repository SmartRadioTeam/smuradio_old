<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
include ("class/pctest.php");
?>
<title>��ҳ - ����ѧԺ���̨</title>
		<?php
include ("class/t.htm");
?>        <h3>����ѧԺ���̨</h3>
        <h4>ÿ�����ֺ�����</h4>
			<?php
include ("../class/message.php");
?>	
        <h3>��ɾ���㲥:</h3>
		<hr/>
				<?php
include("../class/conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
$id=0;
while($row=mysql_fetch_array($query)){
echo "<p>�ϴ��Զ��������ݿ�ʱ�䣺".$row[deltime];
$id=$id+1;
}
mysql_close($con);
?>	
<hr/>  
<?php
include("../class/conn.php");
$sql = "SELECT * FROM `delradio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<p>��������".urldecode($row[name])."</p><p>����ˣ�".urldecode($row[user])."</p><p>�͸���".urldecode($row[to])."&nbsp;&nbsp;�����TA˵:��".urldecode($row[message])."��</p><hr/>";
}
mysql_close($con);
?>	
<br>
<a href="http://www.smxybbs.net/">����֧��:����ѧԺ��̳������</a>