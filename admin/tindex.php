<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>三明学院点歌台管理员模式</title>
<?php
include("class/t.htm");
?>
        <h3>已删除列表:</h3>
		<hr/>
		<?php
include("../class/conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
$id=0;
while($row=mysql_fetch_array($query)){
echo "<p>上次自动清理数据库时间：".$row[deltime];
$id=$id+1;
}
mysql_close($con);
?>	
<hr/>  
<?php
include("../class/conn.php");
$sql = "SELECT * FROM `delradio`";
$query = mysql_query($sql,$con);
$id=0;
while($row=mysql_fetch_array($query)){
echo "<p>提交时间：".urldecode($row[uptime])."</p><p>希望播放的时间：".urldecode($row[time])."</p><p>歌曲名：".urldecode($row[name])."</p><p>点歌人：".urldecode($row[user])."</p><p>送给：".urldecode($row[to])."</p><p>留言：".urldecode($row[message])."</p><a href='http://r.smxybbs.net/admin/class/backmusic.php?id=".$id."'>恢复</a><hr/>";
$id=$id+1;
}
mysql_close($con);
?>	