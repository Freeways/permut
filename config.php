<?php

$db = "yasser_permut_test";
$host = "localhost";
$user = "root";
$pass = "mariadb";

$connection = mysql_connect($host, $user, $pass) or die("Database Connection Problem");

// Test Connection
if (!$connection)
	die("connection impossible");
// DB Connection
mysql_select_db($db) or die("Connection Problem");

?>

