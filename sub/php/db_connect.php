<?php
$con = mysql_connect('****','****','****');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
// echo "db_connect";
mysql_query("SET NAMES 'utf8'");
?>
