      <meta http-equiv="Content-Type" content="text/html; charset=gbk">
	  <script type="text/javascript">
<!--
//ƽ̨���豸�Ͳ���ϵͳ
var system ={
win : false,
mac : false,
xll : false
};
//���ƽ̨
var p = navigator.platform;
system.win = p.indexOf("Win") == 0;
system.mac = p.indexOf("Mac") == 0;
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
//��ת���
if(system.win||system.mac||system.xll){
window.location.href="http://r.smxybbs.net/postticket.php";
}else{
}
-->
</script>
	  <title>�㲥 - ����ѧԺ���̨</title>
		<?php
include ("t.htm");
?>	  	          <h3>����ѧԺ���̨ȱ������</h3>
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
	  <form name=myform action="http://r.smxybbs.net/ticketup.php" method="post">
	  <p>��������<input type="text"name="name"></p>
<input type="submit" value="�ύ" name="m">
</form>
<br>
<a href="http://www.smxybbs.net/">����֧��:����ѧԺ��̳������</a>