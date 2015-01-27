<br>
<?php
include("conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<div class="alert alert-success">上次自动清理数据库时间：'.$row[deltime].'</div>';
}
$sql = "SELECT * FROM `message`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<div class="alert alert-info">
<font color="#000000"><strong>通知：</strong>'.urldecode($row[message])."</font>
</div>";
}
$sql = "SELECT * FROM `lostandfound` ORDER BY RAND() LIMIT 1;";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
$messages="来自".urldecode($row[user])."同学的寻物启示：".urldecode($row[message])."请有拾到者拨打电话：".urldecode($row[tel])."。谢谢！（本信息将滚动播出，如需了解更多信息请刷新页面。）";
echo '<div class="alert alert-danger">
<font color="#000000"><strong></strong>'.$messages."</font>
</div>";
}
mysql_close($con);
?>
