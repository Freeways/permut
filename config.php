<?php

$db = "DB Name";
$connection = mysql_connect("host", "user", "password") or die("Database Connection Problem");
// Test Connection
if (!$connection)
	die("connection impossible");
// DB Connection
mysql_select_db($db) or die("pas de connection");
?>

