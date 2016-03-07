<?php
	//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	//if (preg_match('/destacados-portal/',$actual_link))		
	//	$url = home_url( '/' );
		//header("location: $url/noticias/");
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type" content="text/html; ISO-8859-1">
<META NAME="DC.Language" SCHEME="RFC1766" CONTENT="Spanish">
<META NAME="REPLY-TO" CONTENT="doctoranavarrete@gmail.com">
<LINK REV="made" href="mailto:doctoranavarrete@gmail.com">
<link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico" />


<META NAME="KEYWORDS" CONTENT="Rinoplastia,ronquido, apnea,septoplastia,operación nariz, cirugía nariz,nariz tapada, no respiro,obstrucción nasal,tabique chueco,sinusitis,doctoranavarrete,doctora navarrete,dranavarrete,dra navarrete">
<META NAME="Resource-type" CONTENT="Document">
<META NAME="Revisit-after" CONTENT="15 days">
<META NAME="robots" content="ALL">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<![endif]-->
<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-18128460-8', {'cookieDomain': 'doctoranavarrete.cl'});
  ga('require', 'displayfeatures');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');


</script>

<script src='https://www.google.com/recaptcha/api.js'></script>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NRHQWL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NRHQWL');</script>
<!-- End Google Tag Manager -->

<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">

		<!-- Removida la etiqueta <hgroup ..></hgroup-->

<div id="top-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></div>

		<nav id="site-navigation" class="main-navigation" role="navigation">

<!--<div style="width:610px; height:110px; text-align:right;">-->
<div style="width: 780px; height:100px; text-align:right;">
<style type="text/css">
.css_btn_class {
	margin-top: 17px;
	font-size:28px;
	font-family:Arial;
	font-weight: 800;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	border:1px solid #dcdcdc;
	padding:15px 33px;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #5bb2bb 5%, #018A97 100% );
	background:-ms-linear-gradient( top, #5bb2bb 5%, #018A97 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5bb2bb', endColorstr='#018A97');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #5bb2bb), color-stop(100%, #018A97) );
	background-color:#5bb2bb;
	color:#f0f0f0;
	display:inline-block;
	text-shadow:1px 1px 0px #3ca2ad;
 	-webkit-box-shadow:inset 1px 1px 0px 0px #3ca2ad;
 	-moz-box-shadow:inset 1px 1px 0px 0px #3ca2ad;
 	box-shadow:inset 1px 1px 0px 0px #3ca2ad;
}
.css_btn_class:hover {
	background:-moz-linear-gradient( center top, #018A97 5%, #b5dce0 100% );
	background:-ms-linear-gradient( top, #018A97 5%, #b5dce0 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#018A97', endColorstr='#b5dce0');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #018A97), color-stop(100%, #b5dce0) );
	background-color:#dfdfdf;
}
.css_btn_class:active {
	position:relative;
	top:1px;
}
.css_btn_class .fa {
	padding-right: 10px;
}
.css_btn_class a {
	color: #ffffff;
	
}
/* This css button was generated by css-button-generator.com */
</style>
<!--<a href="http://www.doctoranavarrete.cl/reserva-hora/" style="display:inline-block; width: 263px; height: 80px; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2); "><span class="fa fa-calendar"></span>Reserva ahora</a>-->
<a href="<?php echo home_url(); ?>/reservar-hora/" class="css_btn_class" onMouseOver="this.style.color='#fff'"  onMouseOut="this.style.color='#fff'"><span class="fa fa-calendar"></span>Reservar Hora</a>
<span id="fono-top"><a href="tel:+56222441458">+56 2 2244 1458</a> / <a href="tel:+56223959500">+56 2 2395 9500</a></span>
</div>


			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a style="display:none;" class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">