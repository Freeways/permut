<?php 
  
$db="DB Name";   
$connection = mysql_connect("host","user","password") or die ("Get the f****k out!"); 
// test la connection 
if ( ! $connection ) 
  die ("connection impossible"); 
  // Connecte la base 
  mysql_select_db($db) or die ("pas de connection"); 

?> 

