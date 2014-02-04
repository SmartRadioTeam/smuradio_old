<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
include("class/t.htm");
include("../../class/conf.php");
?>
<title>未播放列表 - <?php echo PROJECTNAME;?>管理中心 - Powered by smuradio</title>
<h3><?php echo PROJECTNAME;?>管理中心</h3>
<h3>未播放列表:</h3>
<hr/>
<?php
include("../../class/conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<p>上次自动清理数据库时间：".$row[deltime];
}
mysql_close($con);
?>	
<hr/>  
<?php
if(isset($_COOKIE['login'])){
include("../../class/conn.php");
$sql = "SELECT * FROM `noplay`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<p>提交时间：".urldecode($row[uptime])."</p>
<p>希望播放的时间：".urldecode($row[time])."</p>
<p>歌曲名：".urldecode($row[name])."</p>
<p>点歌人：".urldecode($row[user])."</p>
<p>送给：".urldecode($row[to])."</p>
<p>留言：".urldecode($row[message])."</p>";
echo '<form action="../class/backnoplay.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" value="恢复" />
</form><hr>';
}
mysql_close($con);
}else{header("location:login.php");}
?>	