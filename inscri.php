<?php
include_once("functions.php");
include("config.php");


if (isset($_POST['nom'])) $nom=sec($_POST['nom']); else $nom="";
if (isset($_POST['prenom']))$prenom=sec($_POST['prenom']);else $prenom="";
if (isset($_POST['from']))$from=sec($_POST['from']);else $from="";
if (isset($_POST['to']))$to=sec($_POST['to']);else $to="";
if (isset($_POST['cin']))$cin=sec($_POST['cin']);else $cin="";
if (isset($_POST['contact'])) $contact=sec($_POST['contact']); else $contact="";
if (isset($_POST['act'])) $act=sec($_POST['act']); else $act="0";




if (($nom!="") &&($prenom!="")&&($from!="")&&($to!="") && ($cin!="") && ($contact!="")&& (strlen($cin)==8 ) && (is_numeric($cin)) )
{


if ($act==1) {include_once("filtre.php"); exit;}

$ip = $_SERVER["REMOTE_ADDR"];
$nom = ucwords(mb_strtolower($nom,'UTF-8'));
$prenom = ucwords(mb_strtolower($prenom, 'UTF-8'));
$from = mb_strtoupper($from,  'UTF-8');
$to = mb_strtoupper($to,  'UTF-8');

$sql = "INSERT INTO etudiant (`cin`, `nom`, `prenom`, `from`, `to`,`contact`,`ip`, `systemdate`) VALUES ('".$cin."', '".$nom."', '".$prenom."', '".$from."','".$to."', '".$contact."', '".$ip."', NOW())";
mysql_query($sql);

include_once("filtre.php");
}

else echo "1";
?>

