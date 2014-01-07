<?php
setcookie('adminua','mobile',time()+315360000,"/");
?>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
include("../../class/conf.php");
include("class/t.htm");
?>
<title>今日已点曲目列表 - <?php echo PROJECTNAME;?>管理中心 - Powered by smuradio</title>
        <h3><?php echo PROJECTNAME;?>管理中心</h3>
        <h3>今日已点曲目列表:</h3>
<hr/>   
<?php
if(isset($_COOKIE['login'])){
include("../../class/conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<p>上次自动清理数据库时间：".$row[deltime];
}
mysql_close($con);
?>	
<form name=myform action="../../admin/class/del.php" method="post">
	<p>输入登录密码恢复初始化（此操作将清空所有数据并且无法恢复！请慎用！）<input type="text"name="pw"><input type="submit" value="提交"></p>
</form>
<br>
投稿开关：
<form name="formoff" action="../class/off.php" method="post">
打开：<input type="radio" name="off" value="0">&nbsp;&nbsp;
关闭：<input type="radio" name="off" value="1">&nbsp;&nbsp;
<input type="submit" class="btn btn-primary" value="提交修改"/>
</form>
<hr/>  
<?php
include("../../class/conn.php");
$sql = "SELECT * FROM `radio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<p>提交时间：".urldecode($row[uptime])."</p>
<p>希望播放的时间：".urldecode($row[time])."</p>
<p>歌曲名：".urldecode($row[name])."</p>
<p>点歌人：".urldecode($row[user])."</p>
<p>送给：".urldecode($row[to])."</p>
<p>留言：".urldecode($row[message])."</p>
<p>投稿者ip：".urldecode($row[ip])."</p>";
echo '<form action="../class/delmusic.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" value="标记为已播放" />
</form><form action="../class/delnoplay.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" value="标记为未播放" />
</form><hr>';

}
mysql_close($con);
}else{header("location:login.php");}
?>	