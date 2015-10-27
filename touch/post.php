
<?php
include("../class/conn.php");
//判断是否被关闭
$sql = "SELECT * FROM `takeoff` WHERE `id`=0";
$query=mysql_query($sql,$con);
$backcount=mysql_num_rows($query); 
if($backcount==0){
echo '<a href="#" class="btn btn-primary">抱歉，系统拒绝新的点歌，详情请见公告！</a>&nbsp&nbsp<a href="#lostandfound" class="btn btn-primary" data-toggle="collapse">寻物启示信息发布</a>';
}else{
echo '<a href="#post" class="btn btn-primary" data-toggle="collapse">我要点歌</a>&nbsp&nbsp<a href="#lostandfound" class="btn btn-primary" data-toggle="collapse">寻物启示信息发布</a>
<div id="post" class="collapse" style="height:0px;">
<div class="anime img-thumbnail" id="anime">
	  <form id="form1" name="form1" action="../class/update.php" method="post">
	   <div class="form-group">
    		<label>歌曲名：</label>
			<input type="text"name="name" class="form-control" placeholder="歌曲名">
		</div>
		<div class="form-group">
    		<label>点歌人：</label>
			<input type="text"name="user" class="form-control" placeholder="点歌人">
		</div>
		<div class="form-group">
    		<label>送给：</label>
			<input type="text"name="to" class="form-control" placeholder="送给">
		</div>
		<div class="form-group">
	  		<label>希望何时播放：</label>';	  
	  echo '<select name="time" class="form-control">';
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
	  echo '</select><select name="day" class="form-control">';
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
	  echo '<select name="option" class="form-control"><option value ="中午">中午</option><option value ="下午">下午</option></select></div>
<div class="form-group">
<label>想说的话:</label><textarea class="form-control" rows="3" id="inputbox" name="message" onkeyup="checkLength(this);"></textarea>
</div><font color="#000000">文字最大长度: 140. 还剩: <span id="chLeft">140</span></font><br><br>
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
<input type="button"  data-loading-text="Loading..." name="Submit" class="btn btn-success" value="提交" onclick="submit();" />
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
