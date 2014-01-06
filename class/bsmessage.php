<br>
<br>
<div class="alert alert-info">
<font color="#000000">
<?php
include("conn.php");
$sql = "SELECT * FROM `message`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<strong>Í¨Öª£º</strong>".urldecode($row[message])."";
}
mysql_close($con);
?>
</font>
</div>