<?php
function changepost($id,$name,$user,$to,$message){
echo'
<div id="A'.$id.'" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-title">修改点歌单</h3>
      </div>
  <div class="modal-body">
  <form id="form1" name="form1" action="../class/changedate.php" method="post">
<font color="#000000">歌曲名：</font><input type="text"name="name" value="'.$name.'"><br><br>
<font color="#000000">点歌人：</font><input type="text"name="user" value="'.$user.'"><br><br>
<font color="#000000">送给：</font><input type="text"name="to" value="'.$to.'"><br><br>
<font color="#000000">想说的话:</font><input name="message" onkeyup="checkLength(this);" value="'.$message.'"><br><br>
<font color="#000000">文字最大长度: 140. 还剩: <span id="chLeft"></span></font>
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	<input type="submit" name="submit" class="btn btn-success" value="保存" />
	<input type="hidden" name="id" value="'.$id.'">
	</form>
  </div>
</div>
</div>
</div>';
echo '<a href="#A'.$id.'"data-toggle="modal" class="btn btn-info">修改点歌单</a><br><br>';
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
</script> 
