<!DOCTYPE html>
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
setcookie('adminua','touch',time()+315360000,"/");
if(!isset($_COOKIE['login'])){header("location:login.php");}
include("../../class/conf.php");
include("tem/hand.htm");
include ("change.php");
?>
<title>寻物启示 - <?php echo PROJECTNAME;?>管理中心 - Powered by smuradio</title>
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
include("../../class/conn.php");
$sql = "SELECT * FROM `lostandfound`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<div class="anime img-thumbnail" id="anime">';
echo "<br><br>
提交时间：".urldecode($row[uptime])."<br><br>
申报人：".urldecode($row[user])."<br><br>
联系电话：".urldecode($row[tel])."<br><br>
信息：".urldecode($row[message])."<br><br>
投稿者ip：".'<a href="http://www.ip138.com/ips138.asp?ip='.urldecode($row[ip]).'">'.urldecode($row[ip])."</a><hr>";
echo '
<form action="../class/dellost.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" class="btn btn-primary" value="删除" />
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