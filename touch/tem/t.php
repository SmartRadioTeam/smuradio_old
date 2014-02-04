<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container" style="width: 90%;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
<a class="navbar-brand" href="index.php">
<?php
include("../../class/conf.php");
echo PROJECTNAME;
?>
</a>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<?php 
$url = $_SERVER['PHP_SELF']; 
$filename= substr( $url , strrpos($url , '/')+1 ); 
?>
    <li<?php if($filename=="index.php"){echo ' class="active"';}?>><a href="index.php">主页</a></li>
    <li<?php if($filename=="tindex.php"){echo ' class="active"';}?>><a href="tindex.php">已播放点播</a></li>
	<li<?php if($filename=="tnoplay.php"){echo ' class="active"';}?>><a href="tnoplay.php">未播放点播</a></li>
	<li><a href="../mobile">返回旧版</a></li>
          </ul>
        </div>
      </div>
    </div>