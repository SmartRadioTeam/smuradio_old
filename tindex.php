
<html><script type="text/javascript">
<!--
//平台、设备和操作系统
var system ={
win : false,
mac : false,
xll : false
};
//检测平台
var p = navigator.platform;
system.win = p.indexOf("Win") == 0;
system.mac = p.indexOf("Mac") == 0;
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
//跳转语句
if(system.win||system.mac||system.xll){
}else{
window.location.href="http://mr.smxybbs.net/tindex.php";
}
-->
</script><head><meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>三明学院点歌台</title>
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
        <h1>三明学院点歌台已删除点播</h1>
        <h6>每天音乐好心情</h6>
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
echo "<br><h4>通知：".$row[message]."</h4>";
}
mysql_close($con);
?>	
</div><br>
    <div>
        <h3>已删除点播</h3>
		    <table class='table table-bordered'>
        <thead>
            <tr>
			    <th>歌曲名：</th>
                <th>点歌人：</th>
				<th>最想说的话：</th>
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
echo "<thead><tr><td>".$row[name]."</td><td>".$row[user]."</td><td>送给：".$row[to]."&nbsp;&nbsp;最想对TA说：「".$row[message]."」</td></tr> </thead>";
}
mysql_close($con);
?>	
</table>
</div>
    </div>
</div><br>
<div>
<p class="text-center"><small><a href="http://www.smxybbs.net/">技术支持:三明学院论坛工作室</a>
</div>
<script src="./s/h.js" type="text/javascript"></script>
<script type="text/javascript">
window.onload = function() {
    lay_img = document.getElementById("lay_bg_img");
    lay_img.className = "lay_background_img lay_background_img_fade_out";
}
</script>
</body></html>