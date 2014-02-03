<br>
<?php
include("conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<div class="alert alert-success">上次自动清理数据库时间：'.$row[deltime].'</div>';
}
mysql_close($con);
?>
<?php
include("conn.php");
$sql = "SELECT * FROM `message`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<div class="alert alert-info">
<font color="#000000"><strong>通知：</strong>'.urldecode($row[message])."</font>
</div>";
}
mysql_close($con);
?>
