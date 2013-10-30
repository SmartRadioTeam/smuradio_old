
<html>
<?php
include("class/testmobile.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>点播 - 三明学院点歌台</title>
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
        <h1>三明学院点歌台提交歌单</h1>
        <h6>每天音乐好心情</h6>
		<?php
include ("tem/t.htm");
include ("../class/message.php");
?>	
    </div><br>
    <div>
      <form name=myform action="../class/update.php" method="post">
	  <p>歌曲名：<input type="text"name="name"></p>
	  <p>点歌人：<input type="text"name="user"></p>
	  <p>送给：<input type="text"name="to"></p>
	  <p>希望何时播放：<input type="text"name="time"><br>(请输入您想在哪一天哪个时段播出,时段分为中午和下午两个时段。)</p>
<p>想说的话:<textarea name="message" onkeyup="checkLength(this);"></textarea>  
<br />文字最大长度: 140. 还剩: <span id="chLeft">140</span></p>
<input type="submit" class="btn btn-success" value="提交">
</form>   
<script type="text/javascript"> 
function checkLength(which) { 
var maxChars = 140; 
if (which.value.length > maxChars) 
which.value = which.value.substring(0,maxChars); 
var curr = maxChars - which.value.length; 
document.getElementById("chLeft").innerHTML = curr.toString(); 
} 
</script> 
</div>
    </div>
</div><br>
	<?php
include ("tem/foot.htm");
?>