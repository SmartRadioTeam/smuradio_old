<div class="modal hide  fade" id="lostandfound">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3 style="text-shadow:0px 0px;"><font color="#000000">提交寻物启示信息</font></h3>
</div>
<div class="modal-body">
<form action="../class/lostandfound.php" method="post">
	  <p><font color="#000000">申报人：</font><input type="text"name="user"></p>
	  <p><font color="#000000">电话：</font><input type="text"name="tel"></p>
	  <p><font color="#000000">物品信息:</font><input id="inputbox" name="message"style="width:420px; height=20px;" onkeyup="checkLength2(this);"></p>
	  <p><font color="#000000">文字最大长度: 140. 还剩: <span id="chLeft2">140</span></font></p>

</div>  
<div class="modal-footer">
<a href="#"data-dismiss="modal"class="btn"><font color="#000000">关闭</font></a>
<input type="submit" name="Submit" class="btn btn-success" value="提交" />
</form>
</div>
</div>


<script type="text/javascript"> 
function checkLength2(which) { 
var maxChars = 140; 
if (which.value.length > maxChars) 
which.value = which.value.substring(0,maxChars); 
var curr = maxChars - which.value.length; 
document.getElementById("chLeft2").innerHTML = curr.toString(); 
} 
</script> 
