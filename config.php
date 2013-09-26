<?php 
  
<<<<<<< HEAD
$db="yasser_cloud";   
$connection = mysql_connect("host","user","password") or die ("Database Connection Problem"); 
=======
$db="DB Name";   
$connection = mysql_connect("host","user","password") or die ("Get the f****k out!"); 
>>>>>>> 60ceefbae4c5f9071161290870a96810fa763079
// test la connection 
if ( ! $connection ) 
  die ("connection impossible"); 
  // Connecte la base 
  mysql_select_db($db) or die ("pas de connection"); 

?> 

