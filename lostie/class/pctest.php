<?php 
setcookie("ua","lostie",time()+315360000,"/");
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
window.location.href="../pc";
}
}else{
window.location.href="../mobile";
}

</script>
<p>这里是低版本ie兼容页……要知道现在用这么古董的不支持html5的东西是会被人笑的……赶快升级你的ie吧~（ie8以上就可以了哦！如果是xp的话建议使用傲游！）</p>