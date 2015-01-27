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
include("../../../class/conf.php");
echo PROJECTNAME;
?>
管理中心</a>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<?php 
$url = $_SERVER['PHP_SELF']; 
$filename= substr( $url , strrpos($url , '/')+1 ); 
?>
    <li<?php if($filename=="index.php"){echo ' class="active"';}?>><a href="index.php">今日播放</a></li>
<li<?php if($filename=="afterday.php"){echo ' class="active"';}?>><a href="afterday.php">全部点播</a></li>
<li<?php if($filename=="today.php"){echo ' class="active"';}?>><a href="#today"data-toggle="modal">点播搜索</a></li>
	<li<?php if($filename=="lostandfound.php"){echo ' class="active"';}?>><a href="lostandfound.php">寻物启示</a></li>
	<li<?php if($filename=="hsong.php"){echo ' class="active"';}?>><a href="hsong.php">禁播歌曲管理</a></li>
	<li<?php if($filename=="post.php"){echo ' class="active"';}?>><a href="post.php">自动点歌系统管理</a></li>
	<li><a href="#off"data-toggle="modal">系统设置</a></li>
	<li><a href="../class/outlogin.php">退出</a></li>
          </ul>
        </div>
      </div>
    </div>