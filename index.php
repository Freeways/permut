<?php
include_once("config.php");
include("functions.php");
include_once("stat.php");
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml" ><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<!--[if lte IE 8]>

  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

<head >

        <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta property="fb:admins" content="100001610260648,100001420300757"/>
        <meta property="fb:app_id" content="187783477900155"/>
	<title>#Permutation - ISI 2013</title>

<!--  begin facebook graphe  -->	
<meta property="og:title" content="#Permutation - ISI 2013"/>
    <meta property="og:url" content="http://www.freewaysclub.org/permut/"/>
    <meta property="og:image" content="http://freewaysclub.org/permut/_/img/favicon.ico"/>
    <meta property="og:description"
          content="Application web pour les demandes de permutations a l'ISI 
			(L'Institut Supérieur d'Informatique) "/>
<!--  begin facebook graphe  -->	

	<link rel="image_src" href="http://freewaysclub.org/permut/_/img/favicon.ico" />
	<meta name="author" content="Nidhal Rouissi, Anis Hosni">
	<meta name="Copyleft" content="Freeways 2011. No Rights Reserved.">


	<link rel="shortcut icon" href="_/img/favicon.ico">
		 
	<link rel="stylesheet" href="_/css/reset.css">
	<link rel="stylesheet" href="_/css/style.css">

        <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
        <script src="_/js/jquery.smooth-scroll.js"></script>
        <script src="_/js/jquery.easing.js"></script>
        <script src="_/js/jquery.tools.min.js"></script>

<script language="javascript">

function checkcin(){
 var cin = document.getElementById('cin');
  if ((cin.value.length < 8) || (cin.value.length > 8) || (isNaN(cin.value)))  {

	
		$('.insertion input[name="cin"]').css('background-color', '#FFD1D1');
    	return false
    
  } else {
      	
		$('.insertion input[name="cin"]').css('background-color', '');
        return true;
 	 }
}
</script>


</head>

<body>
<a href="https://github.com/Freeways/permut"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png" alt="Fork me on GitHub"></a>
<div class="wrapper">

<div class="chrome">
<img src="_/img/chrome.png" title="testé avec Google Chrome 13">
</div>

<div class="firefox">
<img src="_/img/firefox.png" title="testé avec Mozilla Firefox 4">
</div>

<div class="up">
<img src="_/img/up.png" title="Haut de la page">
</div>

<div id="stat" align="right">
  <r><?php    echo $donnees['visteurtot'];?></r>
 Visites - 
   <r><?php echo $donnees['nbre_entrees'] ?> </r>
 Visiteurs connectés -
 <r><?php    echo $donnees['demandes'];?></r>
 Demandes   

</div>



<header id="header">
<center>
<div id="r">
<p><h1 id="logo">#Permutation</h1></p>
<div id="slogan">Trouver un(e) camarade pour faire une permutation</div>
</div>
<img id="s1" src="_/img/stick.png">
<img id="s2" src="_/img/stick.png">
<center>
</header>

<section>
<center>
<input id="avis" href="#coms" type="button" value="Votre avis">
<input id="rech" type="button" value="Rechercher">
<input id="inser" type="button" value="Insérer une demande de permutation">
<br><br>
</center>

<div class="recherche">
<b>Affiner votre recherche :</b><br><br>
<center><form id="form2">

Nom : <input type="text" name="nom" > -
Prénom : <input type="text" name="prenom" > -
Inscrit(e) dans : - <input type="text" name="de" >
Vers : <input type="text" name="vers" >
</form></center>
</div>

<div class="insertion">
<b>Veuillez remplir les champs suivants :</b><br><br>
<center>
<form id="form1">
<p><label>Nom : </label><input type="text" name="nom"></p>
<p><label>Prénom : </label><input type="text" name="prenom"></p>
<p><label>CIN <r></r>: </label><input type="text" name="cin" id="cin" onkeyup="checkcin();"></p>
<p>
<label>Inscrit(e) dans <r>*</r> : </label>
<datalist id="sources">
    <select name="source">
        <option value="L1SIL1">L1SIL1</option>
	<option value="L1SIL2">L1SIL2</option>
	<option value="L1SIL3">L1SIL3</option>
	<option value="L1SIL4">L1SIL4</option>
	<option value="L1SIL5">L1SIL5</option>
        <option value="L2SIL1">L2SIL1</option>
	<option value="L2SIL2">L2SIL2</option>
	<option value="L2SIL3">L2SIL3</option>
	<option value="L2SIL4">L2SIL4</option>
	<option value="L2SIL5">L2SIL5</option>
        <option value="L3SIL1">L3SIL1</option>
	<option value="L3SIL2">L3SIL2</option>
	<option value="L3SIL3">L3SIL3</option>
	<option value="L3SIL4">L3SIL4</option>
	<option value="L3SIL5">L3SIL5</option>
        <option value="L1ARS1">L1ARS1</option>
	<option value="L1ARS2">L1ARS2</option>
	<option value="L1ARS3">L1ARS3</option>
	<option value="L1ARS4">L1ARS4</option>
	<option value="L1ARS5">L1ARS5</option>
        <option value="L2ARS1">L2ARS1</option>
	<option value="L2ARS2">L2ARS2</option>
	<option value="L2ARS3">L2ARS3</option>
	<option value="L2ARS4">L2ARS4</option>
	<option value="L2ARS5">L2ARS5</option>
        <option value="L3ARS1">L3ARS1</option>
	<option value="L3ARS2">L3ARS2</option>
	<option value="L3ARS3">L3ARS3</option>
	<option value="L3ARS4">L3ARS4</option>
	<option value="L3ARS5">L3ARS5</option>
        <option value="L1SE1">L1SE1</option>
	<option value="L1SE2">L1SE2</option>
	<option value="L1SE3">L1SE3</option>
	<option value="L1SE4">L1SE4</option>
	<option value="L1SE5">L1SE5</option>
        <option value="L2SE1">L2SE1</option>
	<option value="L2SE2">L2SE2</option>
	<option value="L2SE3">L2SE3</option>
	<option value="L2SE4">L2SE4</option>
	<option value="L2SE5">L2SE5</option>
        <option value="L3SE1">L3SE1</option>
	<option value="L3SE2">L3SE2</option>
	<option value="L3SE3">L3SE3</option>
	<option value="L3SE4">L3SE4</option>
	<option value="L3SE5">L3SE5</option>
    </select>
</datalist>
<input type="text" id="source" name="de" list="sources">
</p>
<p>
<label>Vers <r>*</r> : </label> 
<datalist id="sources">
    <select name="source">
        <option value="L1SIL1">L1SIL1</option>
	<option value="L1SIL2">L1SIL2</option>
	<option value="L1SIL3">L1SIL3</option>
	<option value="L1SIL4">L1SIL4</option>
	<option value="L1SIL5">L1SIL5</option>
        <option value="L2SIL1">L2SIL1</option>
	<option value="L2SIL2">L2SIL2</option>
	<option value="L2SIL3">L2SIL3</option>
	<option value="L2SIL4">L2SIL4</option>
	<option value="L2SIL5">L2SIL5</option>
        <option value="L3SIL1">L3SIL1</option>
	<option value="L3SIL2">L3SIL2</option>
	<option value="L3SIL3">L3SIL3</option>
	<option value="L3SIL4">L3SIL4</option>
	<option value="L3SIL5">L3SIL5</option>
        <option value="L1ARS1">L1ARS1</option>
	<option value="L1ARS2">L1ARS2</option>
	<option value="L1ARS3">L1ARS3</option>
	<option value="L1ARS4">L1ARS4</option>
	<option value="L1ARS5">L1ARS5</option>
        <option value="L2ARS1">L2ARS1</option>
	<option value="L2ARS2">L2ARS2</option>
	<option value="L2ARS3">L2ARS3</option>
	<option value="L2ARS4">L2ARS4</option>
	<option value="L2ARS5">L2ARS5</option>
        <option value="L3ARS1">L3ARS1</option>
	<option value="L3ARS2">L3ARS2</option>
	<option value="L3ARS3">L3ARS3</option>
	<option value="L3ARS4">L3ARS4</option>
	<option value="L3ARS5">L3ARS5</option>
        <option value="L1SE1">L1SE1</option>
	<option value="L1SE2">L1SE2</option>
	<option value="L1SE3">L1SE3</option>
	<option value="L1SE4">L1SE4</option>
	<option value="L1SE5">L1SE5</option>
        <option value="L2SE1">L2SE1</option>
	<option value="L2SE2">L2SE2</option>
	<option value="L2SE3">L2SE3</option>
	<option value="L2SE4">L2SE4</option>
	<option value="L2SE5">L2SE5</option>
        <option value="L3SE1">L3SE1</option>
	<option value="L3SE2">L3SE2</option>
	<option value="L3SE3">L3SE3</option>
	<option value="L3SE4">L3SE4</option>
	<option value="L3SE5">L3SE5</option>
    </select>
</datalist>
<input type="text" id="source" name="vers" list="sources">
</p>
<p><label>Contact <r>**</r> : </label> <input type="text" name="contact"></p>
<p id="accepte"> <input type="checkbox" name="lic" id="lic"> En ajoutant cette demande, j'accepte que mes informations seront publiées sur cette application.</p>
 <span><r>*</r>Sous la forme L[1-3][SIL|ARS|SE][01-02-03] Exp : L3SIL02.</span><br>
 <span><r>**</r>Numéro de téléphone, email ou lien vers profile facebook.</span><br> 
<div id="err"> </div>
<input id="verif" type="button" value="Chance ?" >
<input id="ajout" type="button" value="Ajouter demande" >
</form></center>
</div>

<table name="result" id="result" cellspacing="10">
<tbody>
	<tr class="th">
		<th class="nom">Nom</th>
		<th class="prenom">Prénom</th>
		<th class="de">Inscrit(e) dans</th>
		<th class="vers">Vers</th>
		<th class="contact">Contact</th>
	</tr>
<?php
$requete="SELECT * from etudiant"; // requête 
sql($requete);
?>
</tbody></table></div>
<br>
</section>

<section>
<center>
<fieldset id="coms">
<legend> Votre avis sur notre application </legend>
<div id="fb-root"></div>
<script>(function(d){
  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
  js = d.createElement('script'); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  d.getElementsByTagName('head')[0].appendChild(js);
}(document));</script>
<fb:comments id="fbcoms" href="http://www.freewaysclub.org/permut/index.php" num_posts="10" width="900"></fb:comments>
</fieldset>
</center>
</section>

<footer>

<table style="height: 62px; width:100%" border="0">
<tr>

<td>
<iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffreewaysclub.org%2Fpermut%2F" scrolling="no" frameborder="0" style="height: 62px; width: 100%" allowTransparency="true"></iframe>
</td>
<td >
Application développée par  <a href="https://www.facebook.com/im6anis" target="_tab">Hosni Anis</a> 

& <a href="https://www.facebook.com/im.funktastik" target="_tab">Rouissi Nidhal</a>. Maintenu à jour par <a href="http://tawataw.com" target="_tab">TuniLame</a>

</td>
</tr>
</table>

<center> 
<a href="http://www.freewaysclub.org/" target="_tab">Freeways</a>  2013 
<p>
<a href="http://creativecommons.org/"><img src="http://www.freewaysclub.org/permut/_/img/icon_cc.gif"></a>
<a href="http://www.w3.org/"><img src="http://www.w3.org/html/logo/downloads/HTML5_Logo_32.png"></a>
</p>
</center>

</footer>

</div>

<script>
$(function() {
                $('.chrome img, .firefox img').tooltip({
		 
			// place tooltip on the right edge
			position: "center right",
		 
			// a little tweaking of the position
			offset: [2, 0],
		 
			// use the built-in fadeIn/fadeOut effect
			effect: "slide",

                        direction : "right",

                        bounce : "true"

		});

                $('.up img').tooltip({
		 
			// place tooltip on the right edge
			position: "center left",
		 
			// a little tweaking of the position
			offset: [0, 0],
		 
			// use the built-in fadeIn/fadeOut effect
			effect: "slide",

                        direction : "left",

                        bounce : "true"
		});


                $('#avis').bind('click',function(event){
                    
                    $('html, body').stop().animate({
                        scrollTop: $("#coms").offset().top
                    }, 1500,'easeInOutExpo');
                    event.preventDefault();
                });

                $('.up').bind('click',function(event){
                    
                    $('html, body').stop().animate({
                        scrollTop: 0
                    }, 1500,'easeInOutExpo');
                    event.preventDefault();
                });
});

$(".recherche").hide();
$(".insertion").hide();

$("#rech").click(function (){ 
$(".insertion").slideUp(500);
$(".recherche").slideToggle(500);
});

$("#inser").click(function (){
$(".recherche").slideUp(500); 
$(".insertion").slideToggle(500);
});

 // Recherche asynchrone - AJAX

$('.recherche input').keyup(function () {
var nom = $('.recherche input[name="nom"]').val();
var prenom = $('.recherche input[name="prenom"]').val();
var de = $('.recherche input[name="de"]').val();
var vers = $('.recherche input[name="vers"]').val();


$('#result tr:not(.th), #result td').remove();
$('#result > tbody').append(' <td colspan="5"><center><img src="_/img/load.gif"></center></td>'); 

$.ajax({
 type: "POST",
 url: "filtre.php",
 data: { nom: $('.recherche input[name="nom"]').val(),
   prenom: $('.recherche input[name="prenom"]').val(),
   from: $('.recherche input[name="de"]').val(),
   to: $('.recherche input[name="vers"]').val(),
    },
 success: function(msg){
 
  if (msg == 0) 
		{
		$('#result tr:not(.th), #result td').remove();
 		$('#result  > tbody').append(' <td colspan="5"><center><div class="none1">Aucun résultat  trouvé !</div></center></td>');  
		}
		else{
		$('#result tr:not(.th), #result td').remove();
 		$('#result  > tbody').append(msg);  
		} 
 }
});
});

 
// verification d'une nouvelle demande - AJAX
$("#verif").click(function (){ 
var nom = $('.insertion input[name="nom"]').val();
var prenom = $('.insertion input[name="prenom"]').val();
var cin = $('.insertion input[name="cin"]').val();
var de = $('.insertion input[name="de"]').val();
var vers = $('.insertion input[name="vers"]').val();
var contact = $('.insertion input[name="contact"]').val();

$('#result tr:not(.th), #result td').remove();
$('#result  > tbody').append(' <td colspan="5"><center><img src="_/img/load.gif"></center></td>'); 
		
$.ajax({
 type: "POST",
 url: "inscri.php",
  data: { nom: $('.insertion input[name="nom"]').val(),
   prenom: $('.insertion input[name="prenom"]').val(),
   from: $('.insertion input[name="de"]').val(),
   to: $('.insertion input[name="vers"]').val(),
   cin: $('.insertion input[name="cin"]').val(),
   contact: $('.insertion input[name="contact"]').val(),
   act:"1"
	},
 success: function(msg){

	if (msg == 1) {$('#err').html("<p> Erreurs de saisie ! <p>"); $('#result tr:not(.th), #result td').remove(); }
	else{
		if (msg == 0) 
		{
		$('#result tr:not(.th), #result td').remove();
 		$('#result > tbody').append(' <td colspan="5"><center><div class="none2">Aucun résultat compatible trouvé !</div></center></td>'); 
		$('#err').html(""); 
		}
		else{
		$('#result tr:not(.th), #result td').remove();
 		$('#result > tbody').append(msg);  
		$('#err').html("");
		}
  	
	}
 	}
 });
});


// Insertion d'une nouvelle demande - AJAX

$("#ajout").click(function (){ 
var nom = $('.insertion input[name="nom"]').val();
var prenom = $('.insertion input[name="prenom"]').val();
var cin = $('.insertion input[name="cin"]').val();
var de = $('.insertion input[name="de"]').val();
var vers = $('.insertion input[name="vers"]').val();
var contact = $('.insertion input[name="contact"]').val();

var lic = $('.insertion input[name="lic"]').attr('checked'); 

if (lic==undefined) { $('#err').html("<p> Vous devez accepter les conditions d'utilisation ! <p>"); 
return false; }

$.ajax({
 type: "POST",
 url: "inscri.php",
  data: { nom: $('.insertion input[name="nom"]').val(),
   prenom: $('.insertion input[name="prenom"]').val(),
   from: $('.insertion input[name="de"]').val(),
   to: $('.insertion input[name="vers"]').val(),
   cin: $('.insertion input[name="cin"]').val(),
   contact: $('.insertion input[name="contact"]').val(),
	},
 success: function(msg){

if (msg == 1) $('#err').html("<p> Erreurs de saisie ! <p>");
else{
  $('#result tr:not(.th), #result td').remove();
  $('#result > tbody').append(msg);  
  $('#err').html("");
}
}
});
});


// Recherche asynchrone - AJAX on click button recherche 

$("#rech").click(function (){
var nom = $('.recherche input[name="nom"]').val();
var prenom = $('.recherche input[name="prenom"]').val();
var de = $('.recherche input[name="de"]').val();
var vers = $('.recherche input[name="vers"]').val();


$.ajax({
 type: "POST",
 url: "filtre.php",
 data: { nom: $('.recherche input[name="nom"]').val(),
   prenom: $('.recherche input[name="prenom"]').val(),
   from: $('.recherche input[name="de"]').val(),
   to: $('.recherche input[name="vers"]').val(),
    },
 success: function(msg){
 
  if (msg == 0) 
		{
		$('#result tr:not(.th), #result td').remove();
 		$('#result > tbody').append(' <td colspan="5"><center><div class="none1">Aucun résultat  trouvé !</div></center></td>');  
		}
		else{
		$('#result tr:not(.th), #result td').remove();
 		$('#result > tbody').append(msg);  
		} 
 }
});
});


 if (document.images) {
    img1 = new Image();
    img1.src = "_/img/load.gif";
}

</script>
</body>
</html>
