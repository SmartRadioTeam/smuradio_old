<div id="lay_bg" class="lay_background"">
<?php
$img=$_COOKIE["imgch"];
setcookie('imgch',$img,time()+315360000,"/");
if(isset($_POST['img'])){
$img=$_POST['img'];
setcookie('imgch',$img,time()+315360000,"/");
header("Location: ../../class/go.php?echo=".urlencode("设置完成！"));
}
if(!isset($_COOKIE['imgch'])){
include("../../class/conf.php");
srand();
$rand=rand(1,IMGDEFRAND);
$rand=IMGURL.'/def/'.$rand.".jpg";
}else{
$img=$_COOKIE["imgch"];
include("conf.php");
srand();
if($img=="0"){
$rand=rand(1,IMGACGRAND);
$rand=IMGURL.'/acg/'.$rand.".jpg";
}else{
$rand=rand(1,IMGDEFRAND);
$rand=IMGURL.'/def/'.$rand.".jpg";
}
}
echo '<img class="lay_background_img" id="lay_bg_img" src="'.$rand.'"></div>';
?>
<div class="modal hide  fade" id="img">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3 style="text-shadow:0px 0px;"><font color="#000000">换风格</font></h3>
</div>
<div class="modal-body">
<form name="formimg" action="./tem/bimg.php" method="post">
<font color="#000000">动漫版：</font><input type="radio" name="img" value="0"
<?php
if(!isset($_COOKIE['imgch'])){
}else{
$img=$_COOKIE["imgch"];
if($img=="0"){
echo 'checked="checked"';
} 
}?>
><br>
<font color="#000000">清新版：</font><input type="radio" name="img" value="1"
<?php
if(!isset($_COOKIE['imgch'])){
echo 'checked="checked" ';
}else{
$img=$_COOKIE["imgch"];
if($img=="1"){
echo 'checked="checked"';
} 
}?>
>&nbsp;&nbsp;
</form>
</div>
<div class="modal-footer">
<a href="#"data-dismiss="modal"class="btn"><font color="#000000">关闭</font></a>
<input type="button" name="Submit" class="btn btn-success" value="提交" onclick="submit2();"/>
</div>
</div>
<script type="text/javascript"> 
function submit2()
{document.formimg.submit();}
</script> 