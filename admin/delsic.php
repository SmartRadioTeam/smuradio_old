<?php
date_default_timezone_set ('PRC');
$time=date("Y-m-d H:i:s",time());
error_reporting(0); 
$con = mysql_connect("localhost","qwe7002","331022");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('qwe7002_radio');
$sql = "TRUNCATE TABLE `delradio`";
$result = mysql_query($sql,$con);
$sql = "TRUNCATE TABLE `timetable`";
$result = mysql_query($sql,$con);
$sql = "INSERT INTO `qwe7002_radio`.`timetable` (`deltime`) VALUES ('$time');";
$result = mysql_query($sql,$con);
mysql_close($con);
?>