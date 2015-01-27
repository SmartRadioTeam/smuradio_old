<?php
include("conf.php");
error_reporting(0); 
$con = mysql_connect(MYSQLHOST,MYSQLUSER,MYSQLPASSWORD);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db(MYSQLDB);