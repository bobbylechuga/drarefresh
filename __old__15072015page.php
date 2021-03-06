<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<style type="text/css">
.css_btn_class {
	font-size:23px;
	font-family:Arial;
	font-weight: 700;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	border:1px solid #dcdcdc;
	padding:15px 37px;
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
/* This css button was generated by css-button-generator.com */
#flecha a {
	color: #018A97;
}
.container img {
	border: none;
	border-radius: none;
	box-shadow: none;	
}
.container hr { 
	margin: 50px 0 50px 0;
}

.container .titulo, .container .subtitulo {
	color: #00d0cd;
	line-height: 2.8em;
}

.container .titulo { 
	font-size: 1.5em;
}

.container .subtitulo { 
	font-size: 1.3em;
}

.left
{
  width: 200px;
  float: left;
}

.right
{
  margin-left: 230px; /* Change this to whatever the width of your left column is*/

}

.clear
{
  clear: both;
}

</style>
<div id="primary" class="site-content">
 <a id="flecha" style="display: none; position:fixed; bottom:10px; right:80px;" href="#" title="Volver arriba">
		<!--<img src="http://doctoranavarrete.cl/wp-content/uploads/up_azul.png" width="50" heigth="50" />-->
		<span class="fa fa-chevron-circle-up" style="font-size: 3em;"></span>
 </a>
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php if(is_page(319)) :  
	/*
	echo "TEST";
	$to  = 'navarrete.doctora@gmail.com' . ', '; // note the comma
	$to .= 'jpino@tmpchile.cl';
	$subject = $_GET["entry_168349712"]." - contacto desde sitio web";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers
	//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
	$headers .= 'From: Dra. Claudia Navarrete <noreply@claudianavarrete.cl>' . "\r\n";
	
	$message = "
		<html>
			<head>
				<title>Contacto - Dra. Navarrete</title>
			</head>
			<body>
	";
	$message .= "<b>Cliente:</b> ".$_GET["entry_168349712"] ."<br>".
	        "<b>Email:</b> ".  $_GET["entry_165403943"] ."<br>".
			"<b>Teléfono:</b> ".  $_GET["entry_46520476"] ."<br><br>".
			"<b>Mensaje:</b> <br><br>".  $_GET["entry_1574462297"] .
	$message .= "
			</body>
		</html>
	";
	$mail_client = $_GET["entry_165403943"]; 
	$message_client = "Pronto nos contactaremos. Muchas gracias por hacernos llegar tus dudas e inquietudes. <br><br>Dra. Claudia Navarrete"; 
	if ($_GET["entry_168349712"] && $_GET["entry_165403943"] && $_GET["entry_46520476"] && $_GET["entry_1574462297"]) {
		mail($to, $subject, $message, $headers);
		mail ($mail_client, 'Contacto recibido', $message_client, $headers); 
	}*/
	
endif; ?>
<?php if(is_page(27)) : ?>
<div class="uptop" style="margin-left: 620px; margin-top: 220px; position: absolute; float: right; width: 500px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3331.481802205404!2d-70.5331147!3d-33.3845923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662ceac9fd2e997%3A0x79a8bcedb76d19bd!2sEstoril+200%2C+Las+Condes%2C+RM%2C+Chile!5e0!3m2!1ses-419!2s!4v1432700547291" width="500" height="450" frameborder="0" style="border:0"></iframe>


</div>

<?php endif; ?>

<?php if(is_page(array(356, 319, 347, 6, 288, 374, 337, 341, 334, 339, 343, 322, 484))) : ?>

<a href="http://www.doctoranavarrete.cl/contacto/"><img style="border-radius: 3px; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);" src="<?php echo home_url(); ?>/wp-content/uploads/dudas-consultas.jpg"></a>
</br></br>
	<?php if(!is_page(array(484))) : ?>
		<!--<a href="http://www.doctoranavarrete.cl/reserva-hora/" style="display:inline-block; width: 263px; height: 80px; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2); "><span class="fa fa-calendar"></span>Reserva ahora</a>-->
		<a href="<?php echo home_url(); ?>/reservar-hora/" class="css_btn_class" onMouseOver="this.style.color='#fff'"  onMouseOut="this.style.color='#fff'"><span class="fa fa-calendar"></span>Reservar Hora</a>
	<?php endif; ?>
<?php endif; ?>


<?php get_footer(); ?>
