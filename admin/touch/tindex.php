<!DOCTYPE html>
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
<?php
if(!isset($_COOKIE['login'])){header("location:login.php");}
include("../../class/conf.php");
include("tem/hand.htm");
?>
<title>�Ѳ��ŵ㲥 - <?php echo PROJECTNAME;?>�������� - Powered by smuradio</title>
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
include("../../class/conn.php");
$sql = "SELECT * FROM `delradio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<div class="anime img-thumbnail" id="anime">';
echo "�ύʱ�䣺".urldecode($row[uptime])."<br><br>
ϣ�����ŵ�ʱ�䣺".urldecode($row[time])."<br><br>
��������".urldecode($row[name])."<br><br>
����ˣ�".urldecode($row[user])."<br><br>
�͸���".urldecode($row[to])."<br><br>
���ԣ�".urldecode($row[message])."<br><br>";
echo '<form action="../class/backmusic.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" class="btn btn-success" value="�ָ�" />
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