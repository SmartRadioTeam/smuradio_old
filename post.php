
<html><script type="text/javascript">
<!--
//ƽ̨���豸�Ͳ���ϵͳ
var system ={
win : false,
mac : false,
xll : false
};
//���ƽ̨
var p = navigator.platform;
system.win = p.indexOf("Win") == 0;
system.mac = p.indexOf("Mac") == 0;
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
//��ת���
if(system.win||system.mac||system.xll){
}else{
window.location.href="http://mr.smxybbs.net/post.php";
}
-->
</script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>�㲥 - ����ѧԺ���̨</title>
<link href="./s/bootstrap.css" rel="stylesheet" type="text/css">
<link href="./s/css.css" rel="stylesheet" type="text/css">
<link href="./s/css(1).css" rel="stylesheet" type="text/css">
<link href="./s/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<meta name="application-name" content="anime.ricter.info">
<script src="./s/jquery.js" type="text/javascript"> </script>
<script src="./s/func.js" type="text/javascript"> </script>
<script src="./s/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript">
function resizeBackground(){
    lay_bg = document.getElementById("lay_bg");
    lay_bg.style.width = $(window).width() + "px";
    lay_bg.style.height = $(window).height() + "px";
}
</script>
</head>

<body>
<div id="lay_bg" class="lay_background"">
    <img class="lay_background_img" id="lay_bg_img" src="http://img.smxydxslt.com/radio/b2.jpg">
</div>
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
include ("t.htm");
?>
					<?php
error_reporting(0); 
$con = mysql_connect("localhost","qwe7002","331022");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('qwe7002_radio');
$sql = "SELECT * FROM `message`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<br><h4>֪ͨ��".$row[message]."</h4>";
}
mysql_close($con);
?>	
    </div><br>
    <div>
      <form name=myform action="http://r.smxybbs.net/update.php" method="post">
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
<div>
<p class="text-center"><small><a href="http://www.smxybbs.net/">����֧��:����ѧԺ��̳������</a>
</div>
<script src="./s/h.js" type="text/javascript"></script>
<script type="text/javascript">
window.onload = function() {
    lay_img = document.getElementById("lay_bg_img");
    lay_img.className = "lay_background_img lay_background_img_fade_out";
}
</script>
</body></html>