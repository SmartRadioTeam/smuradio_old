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
echo "<strong>֪ͨ��</strong>".urldecode($row[message])."";
}
mysql_close($con);
?>
</font>
<a href="#infomation" data-toggle="modal" class="btn btn-primary" >�޸Ĺ���</a>
</div>
<div class="alert alert-info">
Ͷ�忪�أ�
<form name="formoff" action="../class/off.php" method="post">
�򿪣�<input type="radio" name="off" value="0">&nbsp;&nbsp;
�رգ�<input type="radio" name="off" value="1">&nbsp;&nbsp;
<input type="submit" class="btn btn-primary" value="�ύ�޸�"/>
</form>
</div>
<?php
include("../../class/conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<div class="alert alert-success">�ϴ��Զ��������ݿ�ʱ�䣺'.$row[deltime].'</div>';
}
mysql_close($con);?>

<div id="infomation" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">��</button>
        <h3 class="modal-title">�޸Ĺ���</h3>
      </div>
      <div class="modal-body">
	  <form id="form1" name="form1" action="../class/message.php" method="post">
	  ֪ͨ��Ϣ��<input type="text"name="message">
</form>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ȡ��</button>
		<input type="button" name="Submit" class="btn btn-success" value="�ύ" onclick="submit();" />
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript"> 
function submit(){
document.form1.submit();
}
</script> 
