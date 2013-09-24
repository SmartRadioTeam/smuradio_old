<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>三明学院点歌台管理员模式</title>
<a href="http://r.smxybbs.net">主页</a>&nbsp;&nbsp;<a target="_blank" href="http://r.smxybbs.net/admin/delt.htm">清空数据表</a>&nbsp;&nbsp;<a target="_blank" href="http://r.smxybbs.net/admin/tindex.php">已删除点播</a>&nbsp;&nbsp;<a target="_blank" href="http://r.smxybbs.net/admin/tq.php">入库曲目申请</a>
        <h3>三明学院点歌台</h3>
        <h3>今日已点曲目列表:</h3>
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
echo "要求加入的歌曲名：".$row[name]."<br>";
}
mysql_close($con);
?>	