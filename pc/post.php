
<html>
<?php
include("class/testmobile.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>�㲥 - ����ѧԺ���̨</title>
<?php
include("tem/hand.htm");
include("../class/img.php");
?>
<script type="text/javascript">
resizeBackground();
$(window).resize(function() {
    resizeBackground();
})
</script>

<div id="main">
    <div>
        <h1>����ѧԺ���̨�ύ�赥</h1>
        <h6>ÿ�����ֺ�����</h6>
		<?php
include ("tem/t.htm");
include ("../class/message.php");
?>	
    </div><br>
    <div>
      <form name=myform action="../class/update.php" method="post">
	  <p>��������<input type="text"name="name"></p>
	  <p>����ˣ�<input type="text"name="user"></p>
	  <p>�͸���<input type="text"name="to"></p>
	  <p>ϣ����ʱ���ţ�<input type="text"name="time"><br>(��������������һ���ĸ�ʱ�β���,ʱ�η�Ϊ�������������ʱ�Ρ�)</p>
<p>��˵�Ļ�:<textarea name="message" onkeyup="checkLength(this);"></textarea>  
<br />������󳤶�: 140. ��ʣ: <span id="chLeft">140</span></p>
<input type="submit" class="btn btn-success" value="�ύ">
</form>   
<script type="text/javascript"> 
function checkLength(which) { 
var maxChars = 140; 
if (which.value.length > maxChars) 
which.value = which.value.substring(0,maxChars); 
var curr = maxChars - which.value.length; 
document.getElementById("chLeft").innerHTML = curr.toString(); 
} 
</script> 
</div>
    </div>
</div><br>
	<?php
include ("tem/foot.htm");
?>