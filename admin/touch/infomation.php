<br>
<br>
<div class="alert alert-info">
<font color="#000000">
<?php
if(!isset($_COOKIE['login'])){header("location:login.php");}
include("../../class/conn.php");
$sql = "SELECT * FROM `message`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<strong>通知：</strong>".urldecode($row[message])."";
}
mysql_close($con);
?>
</font>
</div>

<div id="off" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-title">系统设置</h3>
      </div>
      <div class="modal-body">
投稿开关：
<form name="formoff" action="../class/off.php" method="post">
<?php
include("../../class/conn.php");
$sql = "SELECT * FROM `takeoff` WHERE `id`=0";
$query=mysql_query($sql,$con);
$backcount=mysql_num_rows($query); 
if($backcount==0){
echo '打开：<input type="radio" name="off" value="0">&nbsp;&nbsp;
关闭：<input type="radio" name="off" value="1" checked>&nbsp;&nbsp;';
}else{
echo '打开：<input type="radio" name="off" value="0" checked>&nbsp;&nbsp;
关闭：<input type="radio" name="off" value="1">&nbsp;&nbsp;';
}
?>
	<input type="submit" name="Submit" class="btn btn-success" value="提交" />
      </form>
	  <hr>
	  通知修改：
	  <form id="form1" name="form1" action="../class/message.php" method="post">
<input type="text" name="message" value="<?php include("../../class/conn.php");
$sql = "SELECT * FROM `message`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo urldecode($row[message]);
}?>">
&nbsp;&nbsp <input type="submit" name="Submit" class="btn btn-success" value="提交" />
</form>
<hr>
恢复初始化：
<form name=myform action="../class/del.php" method="post">
输入登录密码恢复初始化（此操作将清空所有数据并且无法恢复！请慎用！）<input type="text"name="pw">&nbsp;&nbsp <input type="submit" value="提交" class="btn btn-danger" >
</form>
<hr>
<a href="../class/cleanmusic.php" class="btn btn-danger" >清除已播放/无法播放记录</a>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
		      </div>
</div>
      </div>
    </div>
  </div>


<div id="today" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-title">点播搜索</h3>
      </div>
      <div class="modal-body">
<form action="today.php" method="post" enctype="multipart/form-data">
<?php
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
	  echo '</select>&nbsp;&nbsp;<select name="day" style="width:100px;">';
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
	  echo '</select>&nbsp;&nbsp;';?>
	          <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
<input type="submit" name="submit" class="btn btn-success" value="查询" />
</div>
</form>
      </div>
    </div>
  </div>
</div>
<?php
include("../../class/conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<div class="alert alert-success">上次清理数据库时间：'.$row[deltime].'</div>';
}
mysql_close($con);?>