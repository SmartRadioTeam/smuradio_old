<?php
include("conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<h4>�ϴ��Զ��������ݿ�ʱ�䣺'.$row[deltime].'</h4>';
}
$sql = "SELECT * FROM `message`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<br><h4>֪ͨ��".urldecode($row[message])."</h4>";
}
mysql_close($con);
?>