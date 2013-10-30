<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>三明学院论坛微信机器人管理员模式</title>
<h1>三明学院论坛微信机器人词库管理</h1>
<hr/>  
<h3>添加关键词</h3>
   <form name=myform action="http://wechat.smxybbs.net/admin/class/update.php" method="post">
	  <p>关键词：<input type="text"name="keywords"></p>
	  
	  <p>回答：<textarea name="retun"></textarea></p>
<input type="submit" class="btn btn-success" value="提交">
</form> 
<hr/>  
<?php
include("class/conn.php");
$sql = "SELECT * FROM `robot`";
$query = mysql_query($sql,$con);
$id=0;
while($row=mysql_fetch_array($query)){
echo "<p>关键词：".str_replace('>', '', str_replace('<', '', urldecode($row['keywords'])))."</p><p>回答：".str_replace('>', '', str_replace('<', '', urldecode($row['retun'])))."</p><a href='http://wechat.smxybbs.net/admin/class/del.php?id=".$id."'>删除</a><hr/>";
$id=$id+1;
}
mysql_close($con);
?>	