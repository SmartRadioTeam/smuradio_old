      <meta http-equiv="Content-Type" content="text/html; charset=gbk">
	  <title>����ѧԺ���̨����ϵͳ</title>
	 <a href="http://mr.smxybbs.net">��ҳ</a>&nbsp;&nbsp;<a target="_blank" href="http://mr.smxybbs.net/post.php">���</a>&nbsp;&nbsp;<a target="_blank" href="http://mr.smxybbs.net/tindex.php">���յ��</a>&nbsp;&nbsp;<a target="_blank" href="http://mr.smxybbs.net/list.php">����</a>&nbsp;&nbsp;<a target="_blank" href="http://mr.smxybbs.net/postticket.php">ȱ������</a>
	  	          <h3>����ѧԺ���̨����</h3>
        <h5>ÿ�����ֺ�����</h5>
			<?php
error_reporting(0); 
$con = mysql_connect("localhost","qwe7002","331022");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('qwe7002_radio');
$sql = "SELECT * FROM `message`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<br><h4>֪ͨ��".$row[message]."</h4>";
}
mysql_close($con);
?>	
	  <form name=myform action="http://r.smxybbs.net/admin/message.php" method="post">
	  <p>֪ͨ��Ϣ��<input type="text"name="message"></p>
<input type="submit" value="�ύ" name="m">
</form>
<br>
<a href="http://www.smxybbs.net/">����֧��:����ѧԺ��̳������</a>