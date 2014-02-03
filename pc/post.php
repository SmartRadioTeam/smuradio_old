
<div class="modal hide  fade" id="post">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3 style="text-shadow:0px 0px;"><font color="#000000">提交点歌单</font></h3>
</div>
<div class="modal-body">
<?php
include("../class/conn.php");
//判断是否被关闭
$sql = "SELECT * FROM `takeoff` WHERE `id`=0";
$query=mysql_query($sql,$con);
$backcount=mysql_num_rows($query); 
if($backcount==0){
echo '<p><font color="#000000">抱歉，系统拒绝新的点歌，详情请见公告！</font></p>
</div>
<div class="modal-footer">
<a href="#"data-dismiss="modal"class="btn"><font color="#000000">关闭</font></a>';
}else{
echo '<form id="form1" name="form1" action="../class/update.php" method="post">
	  <p><font color="#000000">歌曲名：</font><input type="text"name="name"></p>
	  <p><font color="#000000">点歌人：</font><input type="text"name="user"></p>
	  <p><font color="#000000">送给：</font><input type="text"name="to"></p>
	  <p><font color="#000000">希望何时播放：<input type="text"name="time"><br>(请输入您想在哪一天哪个时段播出,时段分为中午和下午两个时段。)</font></p>
<p><font color="#000000">想说的话:</font><input name="message"style="width:420px; height=20px;" onkeyup="checkLength(this);"></p>
<p><font color="#000000">文字最大长度: 140. 还剩: <span id="chLeft">140</span></font></p>
</form>
</div>
<div class="modal-footer">
<a href="#"data-dismiss="modal"class="btn"><font color="#000000">关闭</font></a>
<input type="button" name="Submit" class="btn btn-success" value="提交" onclick="submit();" />';
}
?>
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
function submit()
{
if(document.form1.name.value=="")
{
alert('歌曲名不能为空!');
return false;
}else if(document.form1.user.value==""){
alert('点歌人不能为空!');
return false;
}else if(document.form1.to.value==""){
alert('送给不能为空!');
return false;
}else if(document.form1.time.value==""){
alert('希望何时播放不能为空!');
return false;
}else if(document.form1.message.value==""){
alert('想说的话不能为空!');
return false;
}else if(
document.form1.name.value.indexOf("<") < 0
||document.form1.name.value.indexOf(">") < 0
||document.form1.user.value.indexOf("<") < 0
||document.form1.user.value.indexOf(">") < 0
||document.form1.to.value.indexOf("<") < 0
||document.form1.to.value.indexOf(">") < 0
||document.form1.time.value.indexOf("<") < 0
||document.form1.time.value.indexOf(">") < 0
||document.form1.message.value.indexOf("<") < 0
||document.form1.message.value.indexOf(">") < 0)
{
document.form1.submit();
return true; 
}else{
alert('请不要输入非法字符!');
return false;
}
}
</script> 
