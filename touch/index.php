<!DOCTYPE html>
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
<?php
include("class/testmobile.php");
include("../class/conf.php");
include("tem/hand.htm");
?>
<title>��ҳ - <?php echo PROJECTNAME;?> - Powered by smuradio</title>
<body>
<?php 
include("tem/t.php");
?>
<div class="container" id="body" style="width: 90%;">
<?php 
include ("../class/bsmessage.php");
include("post.php"); 
?>
<br>
<div>
<?php
include("../class/conn.php");
$sql = "SELECT * FROM `radio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<div class="anime img-thumbnail" id="anime">';
echo "��������".urldecode($row[name])."<br><br>
����ˣ�".urldecode($row[user])."<br><br>
�͸���".urldecode($row[to])."<br><br>
�����TA˵:��".urldecode($row[message])."��";
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