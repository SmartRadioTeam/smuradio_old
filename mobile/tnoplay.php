<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
include ("class/pctest.php");
include("../class/conf.php");
?>
<title>未播放点播 - <?php echo PROJECTNAME;?> - Powered by smuradio</title>
		<?php
include ("class/t.htm");
?>        <h3><?php echo PROJECTNAME;?></h3>
        <h4>每天音乐好心情</h4>
			<?php
include ("../class/message.php");
?>	
        <h3>未播放点播:</h3>
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
$sql = "SELECT * FROM `noplay`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<p>歌曲名：".urldecode($row[name])."</p>
<p>点歌人：".urldecode($row[user])."</p>
<p>送给：".urldecode($row[to])."<br>最想对TA说:「".urldecode($row[message])."」</p>
<hr/>";
}
mysql_close($con);
?>	
<br>
<a href="http://www.smxybbs.net/">技术支持:三明学院论坛工作室</a><br>Program Design by qwe7002.