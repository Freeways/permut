<?php

$db = "permut";
$connection = mysql_connect("localhost", "test", "test") or die("Database Connection Problem");
// Test Connection
if (!$connection)
	die("connection impossible");
// DB Connection
mysql_select_db($db) or die("Connection Problem");
?>

