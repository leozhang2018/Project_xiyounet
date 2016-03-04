<?php
$con = mysql_connect('115.28.219.231','demo','123456');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
// echo "db_connect";
mysql_query("SET NAMES 'utf8'");
?>
