<?php
date_default_timezone_set ('PRC');
$time=date("Y-m-d H:i:s",time());
error_reporting(0); 
include_once("../../class/conn.php");
$sql = "TRUNCATE TABLE `delradio`";
$result = mysql_query($sql,$con);
$sql = "TRUNCATE TABLE `noplay`";
$result = mysql_query($sql,$con);
$sql = "TRUNCATE TABLE `timetable`";
$result = mysql_query($sql,$con);
$sql = "INSERT INTO `".MYSQLDB."`.`timetable` (`deltime`) VALUES ('$time');";
$result = mysql_query($sql,$con);
mysql_close($con);
?>