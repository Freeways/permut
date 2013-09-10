<?php 
  
$db="yasser_cloud";   
$connection = mysql_connect("127.0.0.1","yasser-freeways","LRw13UZZLiv1apv") or die ("Get the f****k out!"); 
// test la connection 
if ( ! $connection ) 
  die ("connection impossible"); 
  // Connecte la base 
  mysql_select_db($db) or die ("pas de connection"); 

?> 

