<div class="modal hide  fade" id="post">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3 style="text-shadow:0px 0px;"><font color="#000000">提交点歌单</font></h3>
</div>
<div class="modal-body">
<?php
date_default_timezone_set ('PRC');
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
	  <p><font color="#000000">希望何时播放：';
	  echo '<select name="time" style="width:100px;">';
	  $i=1;
	  $today=date("m",time());
	  while($i!=13){
	  if(strlen($i)==1){
	  $i='0'.$i;
	  }
	  if($today==$i){
	  echo '<option value ="'.$i.'" selected="selected">'.$i.'月</option>';
	  }else{
	  echo '<option value ="'.$i.'">'.$i.'月</option>';
	  }
	  $i=$i+1;
	  }
	  echo '</select><select name="day" style="width:100px;">';
	    $i=1;
		$today=date("d",time());
	  while($i!=32){
	   if(strlen($i)==1){
	  $i='0'.$i;
	  }
	  if($today==$i){
	  echo '<option value ="'.$i.'" selected="selected">'.$i.'日</option>';
	  }else{
	  echo '<option value ="'.$i.'">'.$i.'日</option>';
	  }
	  $i=$i+1;
	  }
	  echo '</select>';
	  echo '<select name="option" style="width:100px;"><option value ="中午">中午</option><option value ="下午">下午</option></select></font></p>';
	  echo'<p><font color="#000000">想说的话:</font><input id="inputbox" name="message"style="width:420px; height=20px;" onkeyup="checkLength(this);"></p>
<p><font color="#000000">文字最大长度: 140. 还剩: <span id="chLeft">140</span></font></p>
<body>  
</body>  
</form>
<button class="btn btn-default" data-toggle="collapse" data-target="#em">颜文字</button>
<br><br>
<div id="em" class="collapse">
<a href="#" onclick="emoticon(\'(⌒▽⌒)\');" class="btn btn-default btn-xs" >(⌒▽⌒)</a>
<a href="#" onclick="emoticon(\'（￣▽￣）\');" class="btn btn-default btn-xs" >（￣▽￣）</a>
<a href="#" onclick="emoticon(\'(〜￣△￣)\');" class="btn btn-default btn-xs" >(〜￣△￣)</a>
<a href="#" onclick="emoticon(\'〜(･∀･)\');" class="btn btn-default btn-xs" >〜(･∀･)</a>
<a href="#" onclick="emoticon(\'←_←\');" class="btn btn-default btn-xs" >←_←</a>
<a href="#" onclick="emoticon(\'→_→\');" class="btn btn-default btn-xs" >→_→</a>
<a href="#" onclick="emoticon(\'ヽ(✿ﾟ▽ﾟ)ノ\');" class="btn btn-default btn-xs" >ヽ(✿ﾟ▽ﾟ)ノ</a>
<a href="#" onclick="emoticon(\'(ノ≧∇≦)ノ\');" class="btn btn-default btn-xs" >(ノ≧∇≦)ノ</a>
<a href="#" onclick="emoticon(\'(-_-#)\');" class="btn btn-default btn-xs" >(-_-#)</a>
<a href="#" onclick="emoticon(\'（￣へ￣）\');" class="btn btn-default btn-xs" >（￣へ￣）</a>
<a href="#" onclick="emoticon(\'(￣ε(#￣) \');" class="btn btn-default btn-xs" >(￣ε(#￣) </a>
<a href="#" onclick="emoticon(\'_(:3」∠)_\');" class="btn btn-default btn-xs" >_(:3」∠)_</a>
<a href="#" onclick="emoticon(\'(¬_¬)\');" class="btn btn-default btn-xs" >(¬_¬)</a>
<a href="#" onclick="emoticon(\'↖(^ω^)↗\');" class="btn btn-default btn-xs" >↖(^ω^)↗</a>
<a href="#" onclick="emoticon(\'♪(´▽｀)\');" class="btn btn-default btn-xs" >♪(´▽｀)</a>
<a href="#" onclick="emoticon(\'(⊙o⊙)\');" class="btn btn-default btn-xs" >(⊙o⊙)</a>
<a href="#" onclick="emoticon(\'Σ(ＴωＴ)--\');" class="btn btn-default btn-xs" >Σ(ＴωＴ)--</a>
<a href="#" onclick="emoticon(\'(つд⊂)\');" class="btn btn-default btn-xs" >(つд⊂)</a>
<a href="#" onclick="emoticon(\'(*°∀°)=3\');" class="btn btn-default btn-xs" >(*°∀°)=3</a>
<a href="#" onclick="emoticon(\'(　＾∀＾)\');" class="btn btn-default btn-xs" >(　＾∀＾)</a>
<a href="#" onclick="emoticon(\'（づ￣3￣）づ╭❤～\');" class="btn btn-default btn-xs" >（づ￣3￣）づ╭❤～</a>
</div>  
</div>
<div class="modal-footer">
<a href="#"data-dismiss="modal"class="btn"><font color="#000000">关闭</font></a>
<input type="button" name="Submit"  data-loading-text="Loading..." class="btn btn-success" value="提交" onclick="submit();" />';
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
function emoticon(input){
document.getElementById("inputbox").value = document.getElementById("inputbox").value+input;}
</script> 
