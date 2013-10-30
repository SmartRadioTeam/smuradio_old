
<html>
<?php
include("class/testmobile.php");
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>三明学院点歌台</title>
<?php
include("tem/hand.htm");
include("../class/img.php");
?>
<script type="text/javascript">
resizeBackground();
$(window).resize(function() {
    resizeBackground();
})
</script>

<div id="main">
    <div>
        <h1>三明学院点歌台已删除点播</h1>
        <h6>每天音乐好心情</h6>
		<?php
include ("tem/t.htm");
include("../class/conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
$id=0;
while($row=mysql_fetch_array($query)){
echo " <h6>上次自动清理数据库时间：".$row[deltime]."</h6>";
}
mysql_close($con);
include ("../class/message.php");
?>	
</div><br>
    <div>
        <h3>已删除点播</h3>
		    <table class='table table-bordered'>
        <thead>
            <tr>
			    <th>歌曲名：</th>
                <th>点歌人：</th>
				<th>最想说的话：</th>
            </tr> 
        </thead>
<?php
include("../class/conn.php");
$sql = "SELECT * FROM `delradio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<thead><tr><td>".urldecode($row[name])."</td><td>".urldecode($row[user])."</td><td>送给：".urldecode($row[to])."<br>最想对TA说：「".urldecode($row[message])."」</td></tr> </thead>";
}
mysql_close($con);
?>	
</table>
</div>
    </div>
</div><br>
		<?php
include ("tem/foot.htm");
?>