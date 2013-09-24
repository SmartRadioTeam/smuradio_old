<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<script type="text/javascript">
<!--
//平台、设备和操作系统
var system ={
win : false,
mac : false,
xll : false
};
//检测平台
var p = navigator.platform;
system.win = p.indexOf("Win") == 0;
system.mac = p.indexOf("Mac") == 0;
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
//跳转语句
if(system.win||system.mac||system.xll){
window.location.href="http://r.smxybbs.net/list.php";
}else{
}
-->
</script>
<title>首页 - 三明学院点歌台</title>
		<?php
include ("t.htm");
?>        <h3>三明学院点歌台</h3>
        <h4>每天音乐好心情</h4>
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
echo "<br><h4>通知：".$row[message]."</h4>";
}
mysql_close($con);
?>	
        <h3>可点歌曲列表:</h3>
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
echo "<p>".$row[name]."</p><hr/>";
}
mysql_close($con);
?>	
<br>
<a href="http://www.smxybbs.net/">技术支持:三明学院论坛工作室</a>