
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
window.location.href="http://mr.smxybbs.net/tindex.php";
}
-->
</script><head><meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>����ѧԺ���̨</title>
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
    <img class="lay_background_img" id="lay_bg_img" src="http://img.smxydxslt.com/radio/b3.jpg">
</div>
<script type="text/javascript">
resizeBackground();
$(window).resize(function() {
    resizeBackground();
})
</script>

<div id="main">
    <div>
        <h1>����ѧԺ���̨��ɾ���㲥</h1>
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
        <h3>��ɾ���㲥</h3>
		    <table class='table table-bordered'>
        <thead>
            <tr>
			    <th>��������</th>
                <th>����ˣ�</th>
				<th>����˵�Ļ���</th>
            </tr> 
        </thead>
<?php
error_reporting(0); 
$con = mysql_connect("localhost","qwe7002","331022");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('qwe7002_radio');
$sql = "SELECT * FROM `delradio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<thead><tr><td>".$row[name]."</td><td>".$row[user]."</td><td>�͸���".$row[to]."&nbsp;&nbsp;�����TA˵����".$row[message]."��</td></tr> </thead>";
}
mysql_close($con);
?>	
</table>
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