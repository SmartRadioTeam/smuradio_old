<?php
include("conn.php");
$sql = "SELECT * FROM `message`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<br><h4>֪ͨ��".urldecode($row[message])."</h4>";
}
mysql_close($con);
?>