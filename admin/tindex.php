<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>����ѧԺ���̨����Աģʽ</title>
<a href="http://r.smxybbs.net">��ҳ</a>&nbsp;&nbsp;<a target="_blank" href="http://r.smxybbs.net/admin/delt.htm">������ݱ�</a>&nbsp;&nbsp;<a target="_blank" href="http://r.smxybbs.net/admin/tindex.php">��ɾ���㲥</a>&nbsp;&nbsp;<a target="_blank" href="http://r.smxybbs.net/admin/tq.php">�����Ŀ����</a>
        <h3>����ѧԺ���̨</h3>
        <h3>��ɾ���б�:</h3>
		<hr/>
<?php
error_reporting(0); 
$con = mysql_connect("localhost","qwe7002","331022");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('qwe7002_radio');
$sql = "SELECT * FROM `delradio`";
$query = mysql_query($sql,$con);
$id=0;
while($row=mysql_fetch_array($query)){
echo "<p>�ύʱ�䣺".$row[uptime]."</p><p>ϣ�����ŵ�ʱ�䣺".$row[time]."</p><p>��������".$row[name]."</p><p>����ˣ�".$row[user]."</p><p>�͸���".$row[to]."</p><p>���ԣ�".$row[message]."</p><a href='http://r.smxybbs.net/admin/backmusic.php?id=".$id."'>�ָ�</a><hr/>";
$id=$id+1;
}
mysql_close($con);
?>	