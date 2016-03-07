<?php 
	//echo "TEST";
	$to  = 'navarrete.doctora@gmail.com' . ', '; // note the comma
	$to .= 'jpino@tmpchile.cl';
	$subject = $_GET["entry_168349712"]." - contacto desde sitio web";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers
	//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
	$headers .= 'From: Dra. Claudia Navarrete \<noreply@claudianavarrete.cl\>' . "\r\n";
	//echo $headers;
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
	}
	header ("Location: http://dev.doctoranavarrete.cl/contacto/exito/");
?>