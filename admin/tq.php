<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>����ѧԺ���̨����Աģʽ</title>
<a href="http://r.smxybbs.net">��ҳ</a>&nbsp;&nbsp;<a target="_blank" href="http://r.smxybbs.net/admin/delt.htm">������ݱ�</a>&nbsp;&nbsp;<a target="_blank" href="http://r.smxybbs.net/admin/tindex.php">��ɾ���㲥</a>&nbsp;&nbsp;<a target="_blank" href="http://r.smxybbs.net/admin/tq.php">�����Ŀ����</a>
        <h3>����ѧԺ���̨</h3>
        <h3>�����ѵ���Ŀ�б�:</h3>
		<hr/>
<?php
error_reporting(0); 
$con = mysql_connect("localhost","qwe7002","331022");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('qwe7002_radio');
$sql = "SELECT * FROM `ticket`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "Ҫ�����ĸ�������".$row[name]."<br>";
}
mysql_close($con);
?>	