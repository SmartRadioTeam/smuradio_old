      <meta http-equiv="Content-Type" content="text/html; charset=gbk">
<?php
include ("class/pctest.php");
include("../class/conf.php");
?>
<title>点播 - <?php echo PROJECTNAME;?> - Powered by smuradio</title>
		<?php
include ("class/t.htm");
?>	  	          <h3><?php echo PROJECTNAME;?></h3>
        <h5>每天音乐好心情</h5>
			<?php
include ("../class/message.php");
?>	
	  <form name=myform action="http://r.smxybbs.net/class/update.php" method="post">
	  <p>歌曲名：<input type="text"name="name"></p>
	  <p>点歌人：<input type="text"name="user"></p>
	  <p>送给：<input type="text"name="to"></p>
	  <p>希望何时播放：<input type="text"name="time"><br>(请输入您想在哪一天哪个时段播出,时段分为中午和下午两个时段。)</p>
<p>想说的话:</p><textarea name="message"></textarea>  
<br />文字最大长度: 140
<input type="submit" value="提交" name="m">
</form>
<br>
<a href="http://www.smxybbs.net/">技术支持:三明学院论坛工作室</a><br>Program Design by qwe7002.