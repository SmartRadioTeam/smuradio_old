<!DOCTYPE html>
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
<?php
include("class/testmobile.php");
include("../class/conf.php");
include("tem/hand.htm");
?>
<title>已播放点播 - <?php echo PROJECTNAME;?> - Powered by smuradio</title>
<body>
<?php 
include("tem/t.php");
?>
<div class="container" id="body" style="width: 90%;">
<br>
<?php 
include("../class/conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
$id=0;
while($row=mysql_fetch_array($query)){
echo ' <div class="alert alert-success">上次自动清理数据库时间：'.$row[deltime]."</div>";
}
mysql_close($con);
include ("../class/bsmessage.php");
include("post.php"); 
?>
<div>
<?php
include("../class/conn.php");
$sql = "SELECT * FROM `delradio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<div class="anime img-thumbnail" id="anime">';
echo "歌曲名：".urldecode($row[name])."<br><br>
点歌人：".urldecode($row[user])."<br><br>
送给：".urldecode($row[to])."<br><br>
最想对TA说:「".urldecode($row[message])."」";
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