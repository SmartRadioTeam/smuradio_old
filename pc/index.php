﻿<html>
<?php
include("class/testmobile.php");
include("../class/conf.php");
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>首页 - <?php echo PROJECTNAME;?> - Powered by smuradio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo DESCRIPTION;?>">
<meta name="author" content="<?php echo AUTHOR;?>">
<meta name="keywords" content="<?php echo KEYWORDS;?>">
<?php
include("tem/hand.htm");
include("post.php");
include("lostandfound.php");
include("tem/bimg.php");
if(ERWEIMA!=""){
echo '<div id="fixedLayer"><img src="'.ERWEIMA.'"></div>';
}
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
echo "<br>";
include ("../class/bsmessage.php");
?>	
    </div>
    <div>
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
$sql = "SELECT * FROM `radio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<thead>
<tr>
<td>".urldecode($row[name])."</td>
<td>".urldecode($row[user])."</td>
<td>状态：";
$info=$row[info];
if($info=="0"){
echo '<span class="label">未播放</span>';
}
if($info=="1"){
echo '<span class="label label-success">已播放</span>';
}
if($info=="2"){
echo '<span class="label label-important">无法播放</span>';}
echo "
<br>送给：".urldecode($row[to])."<br>
最想对TA说：「".urldecode($row[message])."」
</td>
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