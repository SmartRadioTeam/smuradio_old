      <meta http-equiv="Content-Type" content="text/html; charset=gbk">
	  <script type="text/javascript">
<!--
//平台、设备和操作系统
var system ={
win : false,
mac : false,
xll : false
};
//检测平台
var p = navigator.platform;
system.win = p.indexOf("Win") == 0;
system.mac = p.indexOf("Mac") == 0;
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
//跳转语句
if(system.win||system.mac||system.xll){
//window.location.href="http://r.smxybbs.net/post.htm";
}else{
}
-->
</script>
	  <title>点播 - 三明学院点歌台</title>
		<?php
include ("t.htm");
?>	  	          <h3>三明学院点歌台提交歌单</h3>
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
	  <form name=myform action="http://r.smxybbs.net/update.php" method="post">
	  <p>歌曲名：<input type="text"name="name"></p>
	  <p>点歌人：<input type="text"name="user"></p>
	  <p>送给：<input type="text"name="to"></p>
	  <p>希望何时播放：<input type="text"name="time"><br>(请输入您想在哪一天哪个时段播出,时段分为中午和下午两个时段。)</p>
<p>想说的话:</p><textarea name="message" onkeyup="checkLength(this);"></textarea>  
<br />文字最大长度: 140
<input type="submit" value="提交" name="m">
</form>
<br>
<a href="http://www.smxybbs.net/">技术支持:三明学院论坛工作室</a>
<script type="text/javascript"> 
function checkLength(which) { 
var maxChars = 140; 
if (which.value.length > maxChars) 
which.value = which.value.substring(0,maxChars); 
var curr = maxChars - which.value.length; 
document.getElementById("chLeft").innerHTML = curr.toString(); 
} 
</script> 