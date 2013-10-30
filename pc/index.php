
<html>
<?php
include("class/testmobile.php");
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>首页 - 三明学院点歌台</title>
<?php
include("tem/hand.htm");
include("../class/img.php");
?>
<div id="fixedLayer"><img src="http://img.smxydxslt.com/getqrcode.jpg"></div>
<script type="text/javascript">
resizeBackground();
$(window).resize(function() {
    resizeBackground();
})
</script>

<div id="main">
    <div>
        <h1>三明学院点歌台</h1>
        <h6>每天音乐好心情</h6>
		<?php
include ("tem/t.htm");
include ("../class/message.php");
?>	
    </div><br>
    <div>
        <h3>今日已点曲目列表</h3>
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
$sql = "SELECT * FROM `radio`";
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