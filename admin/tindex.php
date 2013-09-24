<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>三明学院点歌台管理员模式</title>
<a href="http://r.smxybbs.net">主页</a>&nbsp;&nbsp;<a target="_blank" href="http://r.smxybbs.net/admin/delt.htm">清空数据表</a>&nbsp;&nbsp;<a target="_blank" href="http://r.smxybbs.net/admin/tindex.php">已删除点播</a>&nbsp;&nbsp;<a target="_blank" href="http://r.smxybbs.net/admin/tq.php">入库曲目申请</a>
        <h3>三明学院点歌台</h3>
        <h3>已删除列表:</h3>
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
echo "<p>提交时间：".$row[uptime]."</p><p>希望播放的时间：".$row[time]."</p><p>歌曲名：".$row[name]."</p><p>点歌人：".$row[user]."</p><p>送给：".$row[to]."</p><p>留言：".$row[message]."</p><a href='http://r.smxybbs.net/admin/backmusic.php?id=".$id."'>恢复</a><hr/>";
$id=$id+1;
}
mysql_close($con);
?>	