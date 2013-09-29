<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Free HTML5 Bootstrap Admin Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		 <script src="https://login.persona.org/include.js"></script>
				<script>
    navigator.id.watch({
        loggedInUser: <?= $email ? "'$email'" : 'null' ?>,
        onlogin: function (assertion) {
            var assertion_field = document.getElementById("assertion-field");
            assertion_field.value = assertion;
            var login_form = document.getElementById("login-form");
            login_form.submit();
        },
        onlogout: function () {
            window.location = '?logout=1';
        }
    });
    </script>
</head>

<body>

<?php 

//------------------------ Perosnna -------------------//


/**
 * ** Persona Login ***
 */
//$body = $email = NULL;
if (isset ( $_POST ['assertion'] )) {
	//$persona = new Persona ();
	$result = $persona->verifyAssertion ( $_POST ['assertion'] );

	if ($result->status === 'okay') {
		$email = $result->email;
		$body = '<div style="margin-top:-20px;"><p><span style="style:block;"> <img src="' . get_gravatar ( $email, 25 ) . '" style="margin:10px 2px -5px 5px;"></span><span style="style:inline-block;margin:">' . $result->email . ' <a href="javascript:navigator.id.logout()">Logout</a></p></div></span>';
		if($email=="yachironi@hotmail.com"){
			header('location:admin/index.php');
		}
		// $body .= '<p><a href="javascript:navigator.id.logout()">Logout</a></p>';
	} else {
		$body = "<p>Error: " . $result->reason . "</p>";
	}
	// $body .= "<p><a href=\"persona.php\">Back to login page</a></p>";
} elseif (! empty ( $_GET ['logout'] )) {
	$body = "<p>You have logged out.</p>";
	header ( "location:http://localhost/permut/" );
	// $body .= "<p><a href=\"persona.php\">Back to login page</a></p>";
} else {
	$body = "<p><a class=\"persona-button\" href=\"javascript:navigator.id.request()\"><span>Connexion</span></a></p>";
}
class Persona {
	/**
	 * Scheme, hostname and port
	 */
	protected $audience;

	/**
	 * Constructs a new Persona (optionally specifying the audience)
	 */
	public function __construct($audience = NULL) {
		$this->audience = $audience ?  : $this->guessAudience ();
	}

	/**
	 * Verify the validity of the assertion received from the user
	 *
	 * @param string $assertion
	 *        	The assertion as received from the login dialog
	 * @return object The response from the Persona online verifier
	 */
	public function verifyAssertion($assertion) {
		$postdata = 'assertion=' . urlencode ( $assertion ) . '&audience=' . urlencode ( $this->audience );

		$ch = curl_init ();
		curl_setopt ( $ch, CURLOPT_URL, "https://verifier.login.persona.org/verify" );
		curl_setopt ( $ch, CURLOPT_POST, true );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt ( $ch, CURLOPT_POSTFIELDS, $postdata );
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, true );
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, 2 );
		$response = curl_exec ( $ch );
		curl_close ( $ch );

		return json_decode ( $response );
	}

	/**
	 * Guesses the audience from the web server configuration
	 */
	protected function guessAudience() {
		$audience = isset ( $_SERVER ['HTTPS'] ) && $_SERVER ['HTTPS'] === 'on' ? 'https://' : 'http://';
		$audience .= $_SERVER ['SERVER_NAME'] . ':' . $_SERVER ['SERVER_PORT'];
		return $audience;
	}
}

//--------------------------------------------------------//




?>

	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.php"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>Charisma</span></a>
				
				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li>
						<p><a href="javascript:navigator.id.logout()">Logout</a></p>
						</li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				<p><a href="javascript:navigator.id.logout();">Logout</a></p>
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="#">Visit Site</a></li>
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
	<?php } ?>
	<div class="container-fluid">
		<div class="row-fluid">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="index.php"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="ui.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a class="ajax-link" href="form.php"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a class="ajax-link" href="chart.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a class="ajax-link" href="typography.php"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a class="ajax-link" href="gallery.php"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li class="nav-header hidden-tablet">Sample Section</li>
						<li><a class="ajax-link" href="table.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a class="ajax-link" href="calendar.php"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a class="ajax-link" href="grid.php"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
						<li><a class="ajax-link" href="file-manager.php"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="tour.php"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
						<li><a class="ajax-link" href="icon.php"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="error.php"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
						<li><a href="login.php"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
					<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<?php } ?>
