
<html>
<?php
include("class/testmobile.php");
include("../class/conf.php");
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>未播放点播 - <?php echo PROJECTNAME;?> - Powered by smuradio</title>
<?php
include("tem/hand.htm");
include("post.php");
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
        <h1><?php echo PROJECTNAME;?></h1>
        <h6>每天音乐好心情</h6>
		<?php
include ("tem/t.htm");
include("../class/conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<h6>上次自动清理数据库时间：".$row[deltime]."</h6>";
}
mysql_close($con);
include ("../class/bsmessage.php");
?>	
</div><br>
    <div>
        <h3>未播放点播</h3>
		    <table class='table table-bordered' width=948>
        <thead>
            <tr>
			    <th width=100>歌曲名：</th>
                <th width=100>点歌人：</th>
				<th width=748>最想说的话：</th>
            </tr> 
        </thead>
<?php
include("../class/conn.php");
$sql = "SELECT * FROM `noplay`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<thead>
<tr>
<td>".urldecode($row[name])."</td>
<td>".urldecode($row[user])."</td>
<td>送给：".urldecode($row[to])."<br>最想对TA说：「".urldecode($row[message])."」</td>
</tr>
</thead>";
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