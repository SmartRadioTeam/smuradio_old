
<?php
include("../class/conn.php");
//判断是否被关闭
$sql = "SELECT * FROM `takeoff` WHERE `id`=0";
$query=mysql_query($sql,$con);
$backcount=mysql_num_rows($query); 
if($backcount==0){
echo '<a href="#" class="btn btn-primary">抱歉，系统拒绝新的点歌，详情请见公告！</a>';
}else{
echo '<a href="#post" class="btn btn-primary" data-toggle="collapse">我要点歌</a>
<div id="post" class="collapse" style="height:0px;">
<div class="anime img-thumbnail" id="anime">
	  <form id="form1" name="form1" action="../class/update.php" method="post">
	  <font color="#000000">歌曲名：</font><input type="text"name="name"><br><br>
	  <font color="#000000">点歌人：</font><input type="text"name="user"><br><br>
	 <font color="#000000">送给：</font><input type="text"name="to"><br><br>
	  <font color="#000000">希望何时播放：<input type="text"name="time"><br>(请输入您想在哪一天哪个时段播出,时段分为中午和下午两个时段。)</font><br><br>
<font color="#000000">想说的话:</font><input name="message" onkeyup="checkLength(this);"><br><br>
<font color="#000000">文字最大长度: 140. 还剩: <span id="chLeft">140</span></font><br><br>
</form>
<input type="button" name="Submit" class="btn btn-success" value="提交" onclick="submit();" />
      </div>
      </div>';
}
?>
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
