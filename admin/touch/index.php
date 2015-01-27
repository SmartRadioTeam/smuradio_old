<!DOCTYPE html>
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
setcookie('adminua','touch',time()+315360000,"/");
if(!isset($_COOKIE['login'])){header("location:login.php");}
include("../../class/conf.php");
include("tem/hand.htm");
include ("change.php");
?>
<title>今日播放 - <?php echo PROJECTNAME;?>管理中心 - Powered by smuradio</title>
<body>
<?php 
include("tem/t.php");
?>
<div class="container" id="body" style="width: 90%;">
<?php 
include ("infomation.php");
?>
<br>
<div>
<?php
date_default_timezone_set ('PRC');
$day=$_GET['day'];
if($day!=""){
$today=$day;
}else{
$today=date("m-d",time());}
include("../../class/conn.php");
$sql = "SELECT * FROM `radio` WHERE `time`='$today'";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<div class="anime img-thumbnail" id="anime">';
echo '状态：';
$info=$row[info];
if($info=="0"){
echo '<span class="label label-default">未播放</span>';
}
if($info=="1"){
echo '<span class="label label-success">已播放</span>';
}
if($info=="2"){
echo '<span class="label label-danger">无法播放</span>';}
echo "<br><br>
提交时间：".urldecode($row[uptime])."<br><br>
希望播放的时间：".str_replace('-', '月', urldecode($row[time]))."日 ".urldecode($row[option])."<br><br>
歌曲名：".urldecode($row[name])."<br><br>
点歌人：".urldecode($row[user])."<br><br>
送给：".urldecode($row[to])."<br><br>
留言：".urldecode($row[message])."<br><br>
投稿者ip：".'<a href="http://www.ip138.com/ips138.asp?ip='.urldecode($row[ip]).'">'.urldecode($row[ip])."</a><hr>";
changepost($row[id],urldecode($row[name]),urldecode($row[user]),urldecode($row[to]),urldecode($row[message]));
echo '<form action="../class/delmusic.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" class="btn btn-success" value="标记为已播放" />
</form>
<br><form action="../class/backmusic.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" class="btn btn-default" value="标记为未播放" />
</form>
<br>
<form action="../class/delnoplay.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" class="btn btn-danger" value="标记为无法播放" />
</form>
<br>
<form action="../class/delinit.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" class="btn btn-primary" value="直接删除" />
</form>
';

echo '<div style="height:1px; margin-top:-1px;clear: both;overflow:hidden;"></div></div>';

}
mysql_close($con);
?>
 </div>
<hr>
</div>
<script type="text/javascript">reformobile()</script></div>
</div>
    </div>
<?php
include("tem/foot.htm");
?>
</body></html>