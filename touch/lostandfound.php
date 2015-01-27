<div id="lostandfound" class="collapse" style="height:0px;">
<div class="anime img-thumbnail" id="anime">
<form  action="../class/lostandfound.php" method="post">
	  <font color="#000000">申报人：</font><input type="text"name="user"><br><br>
	  <font color="#000000">电话：</font><input type="text"name="tel"><br><br>
	  <font color="#000000">物品信息:</font><input id="inputbox" name="message" onkeyup="checkLength2(this);"><br><br>
	  <font color="#000000">文字最大长度: 140. 还剩: <span id="chLeft2">140</span></font><br><br>
<input type="submit" name="Submit" class="btn btn-success" value="提交" /></form>
      </div>
      </div>
<script type="text/javascript"> 
function checkLength(which) { 
var maxChars = 140; 
if (which.value.length > maxChars) 
which.value = which.value.substring(0,maxChars); 
var curr = maxChars - which.value.length; 
document.getElementById("chLeft").innerHTML = curr.toString(); 
} 
</script> 
