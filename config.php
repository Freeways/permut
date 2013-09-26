<?php 
  
$db="yasser_cloud";   
$connection = mysql_connect("host","user","password") or die ("Database Connection Problem"); 
// test la connection 
if ( ! $connection ) 
  die ("connection impossible"); 
  // Connecte la base 
  mysql_select_db($db) or die ("pas de connection"); 

?> 

