<div id="lay_bg" class="lay_background"">
<?php
include("../../class/conf.php");
srand();
$rand=rand(1,IMGRAND);
$rand=IMGURL.'/'.$rand.".jpg";
echo '<img class="lay_background_img" id="lay_bg_img" src="'.$rand.'"></div>
';
?>
