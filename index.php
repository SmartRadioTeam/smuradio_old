<?php
error_reporting(0); 
$ua=$_COOKIE["ua"];
if($ua!=""){
header('Location: /'.$ua);
}
?>
<!--[if lte IE 8]><meta http-equiv="refresh" content="0.1;url=/touch"> <![endif]-->
<script type="text/javascript">
var system ={
win : false,
mac : false,
xll : false
};
var p = navigator.platform;
system.win = p.indexOf("Win") == 0;
system.mac = p.indexOf("Mac") == 0;
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
if(system.win||system.mac||system.xll){
window.location.href="/pc";
}else{
window.location.href="/touch";
}
</script>