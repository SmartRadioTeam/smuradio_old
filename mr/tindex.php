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
window.location.href="http://r.smxybbs.net/tindex.php";
}else{
}
-->
</script>
<title>��ҳ - ����ѧԺ���̨</title>
		<?php
include ("t.htm");
?>        <h3>����ѧԺ���̨</h3>
        <h4>ÿ�����ֺ�����</h4>
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
        <h3>��ɾ���㲥:</h3>
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
while($row=mysql_fetch_array($query)){
echo "<p>��������".$row[name]."</p><p>����ˣ�".$row[user]."</p><p>�͸���".$row[to]."&nbsp;&nbsp;�����TA˵:��".$row[message]."��</p><hr/>";
}
mysql_close($con);
?>	
<br>
<a href="http://www.smxybbs.net/">����֧��:����ѧԺ��̳������</a>