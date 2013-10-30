<?php
  require('class/Wechat.php');
  require('class/biaoqing.php');
  require('class/repost.php');
  $wechat = new MyWechat('weixin', TRUE);
  $wechat->run();