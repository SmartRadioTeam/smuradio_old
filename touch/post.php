
<?php
include("../class/conn.php");
//�ж��Ƿ񱻹ر�
$sql = "SELECT * FROM `takeoff` WHERE `id`=0";
$query=mysql_query($sql,$con);
$backcount=mysql_num_rows($query); 
if($backcount==0){
echo '<a href="#" class="btn btn-primary">��Ǹ��ϵͳ�ܾ��µĵ�裬����������棡</a>';
}else{
echo '<a href="#post" class="btn btn-primary" data-toggle="collapse">��Ҫ���</a>
<div id="post" class="collapse" style="height:0px;">
<div class="anime img-thumbnail" id="anime">
	  <form id="form1" name="form1" action="../class/update.php" method="post">
	  <font color="#000000">��������</font><input type="text"name="name"><br><br>
	  <font color="#000000">����ˣ�</font><input type="text"name="user"><br><br>
	 <font color="#000000">�͸���</font><input type="text"name="to"><br><br>
	  <font color="#000000">ϣ����ʱ���ţ�<input type="text"name="time"><br>(��������������һ���ĸ�ʱ�β���,ʱ�η�Ϊ�������������ʱ�Ρ�)</font><br><br>
<font color="#000000">��˵�Ļ�:</font><input name="message" onkeyup="checkLength(this);"><br><br>
<font color="#000000">������󳤶�: 140. ��ʣ: <span id="chLeft">140</span></font><br><br>
</form>
<input type="button" name="Submit" class="btn btn-success" value="�ύ" onclick="submit();" />
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
alert('����������Ϊ��!');
return false;
}else if(document.form1.user.value==""){
alert('����˲���Ϊ��!');
return false;
}else if(document.form1.to.value==""){
alert('�͸�����Ϊ��!');
return false;
}else if(document.form1.time.value==""){
alert('ϣ����ʱ���Ų���Ϊ��!');
return false;
}else if(document.form1.message.value==""){
alert('��˵�Ļ�����Ϊ��!');
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
alert('�벻Ҫ����Ƿ��ַ�!');
return false;
}
}
</script> 
