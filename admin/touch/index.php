<!DOCTYPE html>
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
<?php
setcookie('adminua','touch',time()+315360000,"/");
if(!isset($_COOKIE['login'])){header("location:login.php");}
include("../../class/conf.php");
include("tem/hand.htm");
?>
<title>首页 - <?php echo PROJECTNAME;?>管理中心 - Powered by smuradio</title>
<body>
<?php 
include("tem/t.php");
?>
<div class="container" id="body" style="width: 90%;">
<?php 
include ("infomation.php");
?>
<br>
<div class="alert alert-danger">
<form name=myform action="../class/del.php" method="post">
输入登录密码恢复初始化（此操作将清空所有数据并且无法恢复！请慎用！）<input type="text"name="pw"><input type="submit" value="提交" class="btn btn-danger" >
</form>
</div>
<br>
<div>
<?php
include("../../class/conn.php");
$sql = "SELECT * FROM `radio`";
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
希望播放的时间：".urldecode($row[time])."<br><br>
歌曲名：".urldecode($row[name])."<br><br>
点歌人：".urldecode($row[user])."<br><br>
送给：".urldecode($row[to])."<br><br>
留言：".urldecode($row[message])."<br><br>
投稿者ip：".urldecode($row[ip])."<br><br>";
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
</form>';

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