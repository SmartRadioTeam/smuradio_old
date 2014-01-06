<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
include("../../class/conf.php");
if(isset($_COOKIE['login'])){}else{header("location:login.php");}
include ("class/t.htm");
?>	  	          
<title>自动点播 - <?php echo PROJECTNAME;?>管理中心 - Powered by smuradio</title>
<h3><?php echo PROJECTNAME;?>管理中心</h3>
<h3>自动点播</h3>
<form name=myform action="../class/update.php" method="post">
<p>歌曲名：<input type="text"name="name"></p>
<p>点歌人：<input type="text"name="user"></p>
<p>想说的话:</p><textarea name="message"></textarea>  
<br />
<input type="submit" value="提交" name="m">
</form>
<hr>
<?php
include("../../class/conn.php");
$sql = "SELECT * FROM `songtable`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<p>歌曲名：'.urldecode($row[song]).'</p>
<p>点歌人：'.urldecode($row[user]).'</p>
<p>想说的话:'.urldecode($row[message]).'</p>';
echo '<form action="../class/delauto.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" value="删除自动化文本" />
</form><hr>';
}
?>	
<hr>