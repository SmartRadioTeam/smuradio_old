<?php
error_reporting(0); 
$con = mysql_connect("localhost","username","password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('radio');