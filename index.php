<?php
$ua=$_COOKIE["ua"];
if($ua!=""){
header('Location: /'.$ua);
}
?>
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
if (typeof(Worker) !== "undefined"){
window.location.href="/pc";
}else{
window.location.href="/lostie";
}
}else{
if (typeof(Worker) !== "undefined"){
window.location.href="/touch";
}else{
window.location.href="/mobile";
}

}
</script>