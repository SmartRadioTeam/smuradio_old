      <meta http-equiv="Content-Type" content="text/html; charset=gbk">
	  <title>三明学院点歌台公告系统</title>
	 <a href="http://mr.smxybbs.net">主页</a>&nbsp;&nbsp;<a target="_blank" href="http://mr.smxybbs.net/post.php">点歌</a>&nbsp;&nbsp;<a target="_blank" href="http://mr.smxybbs.net/tindex.php">生日点歌</a>&nbsp;&nbsp;<a target="_blank" href="http://mr.smxybbs.net/list.php">曲库</a>&nbsp;&nbsp;<a target="_blank" href="http://mr.smxybbs.net/postticket.php">缺曲申请</a>
	  	          <h3>三明学院点歌台公告</h3>
        <h5>每天音乐好心情</h5>
			<?php
error_reporting(0); 
$con = mysql_connect("localhost","qwe7002","331022");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('qwe7002_radio');
$sql = "SELECT * FROM `message`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<br><h4>通知：".$row[message]."</h4>";
}
mysql_close($con);
?>	
	  <form name=myform action="http://r.smxybbs.net/admin/message.php" method="post">
	  <p>通知信息：<input type="text"name="message"></p>
<input type="submit" value="提交" name="m">
</form>
<br>
<a href="http://www.smxybbs.net/">技术支持:三明学院论坛工作室</a>