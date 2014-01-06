<?php
include("conf.php");
error_reporting(0); 
$con = mysql_connect("localhost",MYSQLUSER,MYSQLPASSWORD);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db(MYSQLDB);