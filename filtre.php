<?php
include_once("functions.php");
include("config.php");

if (isset($_POST['nom'])) $nom=sec($_POST['nom']); else $nom="";
if (isset($_POST['prenom']))$prenom=sec($_POST['prenom']);else $prenom="";
if (isset($_POST['from']))$from=sec($_POST['from']);else $from="";
if (isset($_POST['to']))$to=sec($_POST['to']);else $to="";
if (isset($_POST['act']))$act=sec($_POST['act']);else $act="0";

if ($act==1)
	{
	$requete="SELECT * FROM  `etudiant` WHERE  `from` LIKE  '".$to."' AND  `to` LIKE  '".$from."'";
	sql($requete);
	exit;
	}

if (($nom=="") &&($prenom=="")&&($from=="")&&($to=="") )
	{
	 $requete="SELECT * FROM  `etudiant`";
	 sql($requete);
	 exit;
	}

if (($nom!="") &&($prenom=="")&&($from=="")&&($to=="") )
	{
	 $requete="SELECT * FROM  `etudiant` WHERE  `nom` LIKE  '".$nom."%'";
	 sql($requete);
	 exit;
	}

if (($nom!="") &&($prenom!="")&&($from=="")&&($to=="") )
	{
	 $requete=" SELECT * FROM  `etudiant` WHERE  `nom` LIKE  '".$nom."%' AND  `prenom` LIKE  '".$prenom."%'";
	 sql($requete);
	 exit;
	}

if (($nom!="") &&($prenom=="")&&($from!="")&&($to=="") )
	{
	 $requete=" SELECT * FROM  `etudiant` WHERE   `from` LIKE  '".$from."%' AND `nom` LIKE  '".$nom."%' ";
	 sql($requete);
	 exit;
	}

if (($nom!="") &&($prenom=="")&&($from=="")&&($to!="") )
	{
	 $requete=" SELECT * FROM  `etudiant` WHERE   `to` LIKE  '".$to."%' AND `nom` LIKE  '".$nom."%' ";
	 sql($requete);
	 exit;
	}

if (($nom=="") &&($prenom!="")&&($from=="")&&($to=="") )
	{
	 $requete=" SELECT * FROM  `etudiant` WHERE   `prenom` LIKE  '".$prenom."%'";
	 sql($requete);
	 exit;
	}
	

if (($nom=="") &&($prenom!="")&&($from!="")&&($to=="") )
	{
	 $requete=" SELECT * FROM  `etudiant` WHERE   `from` LIKE  '".$from."%' AND `prenom` LIKE  '".$prenom."%' ";
	 sql($requete);
	 exit;
	}


if (($nom=="") &&($prenom!="")&&($from=="")&&($to!="") )
	{
	 $requete=" SELECT * FROM  `etudiant` WHERE   `to` LIKE  '".$to."%' AND `prenom` LIKE  '".$prenom."%' ";
	 sql($requete);
	 exit;
	}
if (($nom=="") &&($prenom=="")&&($from!="")&&($to=="") )
	{
	 $requete=" SELECT * FROM  `etudiant` WHERE   `from` LIKE  '".$from."%'";
	 sql($requete);
	 exit;
	}
	

if (($nom=="") &&($prenom=="")&&($from!="")&&($to!="") )
	{
	 $requete=" SELECT * FROM  `etudiant` WHERE   `to` LIKE  '".$to."%' AND `from` LIKE  '".$from."%' ";
	 sql($requete);
	 exit;
	}

if (($nom=="") &&($prenom=="")&&($from=="")&&($to!="") )
	{
	 $requete=" SELECT * FROM  `etudiant` WHERE   `to` LIKE  '".$to."%'";
	 sql($requete);
	 exit;
	}

if (($nom!="") &&($prenom!="")&&($from!="")&&($to=="") )
	{
	 $requete=" SELECT * FROM  `etudiant` WHERE  `nom` LIKE  '".$nom."%' AND  `prenom` LIKE  '".$prenom."%' AND  `from` LIKE  '".$from."%'";
	 sql($requete);
	 exit;
	}

if (($nom!="") &&($prenom!="")&&($from!="")&&($to!="") )
	{
	 $requete="SELECT * FROM `etudiant` WHERE `nom` LIKE '".$nom."%' AND `prenom` LIKE '".$prenom."%' AND `from` LIKE '".$from."%' AND `to` LIKE '".$to."%'";
	 sql($requete);
	 exit;
	} 		

if (($nom!="") &&($prenom=="")&&($from!="")&&($to!="") )
	{
	 $requete="SELECT * FROM `etudiant` WHERE `nom` LIKE '".$nom."%' AND `from` LIKE '".$from."%' AND `to` LIKE '".$to."%'";
	 sql($requete);
	 exit;
	} 


if (($nom=="") &&($prenom!="")&&($from!="")&&($to!="") )
	{
	 $requete=" SELECT * FROM  `etudiant` WHERE   `to` LIKE  '".$to."%' AND `prenom` LIKE  '".$prenom."%'AND `from` LIKE  '".$from."%' ";
	 sql($requete);
	 exit;
	}

if (($nom!="") &&($prenom!="")&&($from=="")&&($to!="") )
	{
	 $requete=" SELECT * FROM  `etudiant` WHERE   `to` LIKE  '".$to."%' AND `prenom` LIKE  '".$prenom."%'AND `nom` LIKE  '".$nom."%' ";
	 sql($requete);
	 exit;
	}

//*************************//





?>
