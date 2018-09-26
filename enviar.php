<?php 
//require('inc/PHPMailer-master/PHPMailerAutoload.php');

$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$compania = $_POST['compania'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];

$headers = "From: ".$correo;
$destinatario = "ventas@plantagro.net";
$asunto = "Contacto desde la web";
$mensaje ="Enviado por:".$nombre."\r\nCiudad: ".$ciudad."\r\nDireccion: ".$direccion."\r\nCorreo: ".$correo."\r\nCompania: ".$compania."\r\nTelefono: ".$telefono."\r\nComentario: ".$comentario;

 mail ($destinatario, $asunto, $mensaje, $headers);

if(mail)
{ 

	echo '<script type="text/javascript" >
     		alert("Correo enviado con exito");
            window.location="contacto.html";
           </script>';  
}else
{
echo "el mail no ha sido enviado correctamente, intente más tarde"; 
}

/*
$html = <<<HTML

	<body  style="box-sizing: border-box;">
<br>
<div style="text-align:left; width:570px; padding-left:10px; padding-right:20px; margin: 0 auto; background-color:#dddfe0; -webkit-box-shadow: -3px 5px 6px -2px rgba(69,14,98,1);
-moz-box-shadow: -3px 5px 6px -2px rgba(69,14,98,1);
box-shadow: -3px 5px 6px -2px rgba(69,14,98,1);">
     
     <img style="width:65px; float:right; margin-top:15px;" src="http://chocolatepublicidad.com/geoteco/img/img_user_correo.png" />
</div>
<div style="width:560px; margin: 0 auto; padding:20px; background-color:#097295; text-align:left; color:#fff">
<div><h3> Nombre: <span style="text-decoration: underline; color: #fff;"> $nombre </span></h3></div>
<div><h3> Ciudad: <span style="text-decoration: underline; color: #fff;"> $ciudad </span></h3></div>
<div><h3> Direccion: <span style="text-decoration: underline; color: #fff;"> $direccion </span></h3></div>
<div><h3> Correo: <span style="text-decoration: underline; color: #fff;"> $correo </span></h3></div>
<div><h3> Compania: <span style="text-decoration: underline; color: #fff;"> $compania </span></h3></div>
<div><h3> Telefono: <span style="text-decoration: underline; color: #fff;"> $telefono </span></h3></div>
<div><h3> Comentario: <span style="text-decoration: underline; color: #fff;"> $comentario </span></h3></div>

</div>
</body>
HTML;








// Creamos una nueva instancia del objeto PHPMailer
	$mail = new PHPMailer;



	/* Borrar desde aqui hasta... cuando se sube a un servidor */
	/*
 	
	// Usar SMTP para localhost
	$mail->isSMTP();
	// Habilitar depuracion
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	//$mail->SMTPDebug = 2;
	// Depuracion en html
	// $mail->Debugoutput = 'html';
	//El host name del email
	$mail->Host = 'smtp.gmail.com';
	// usar
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// Si tu red no soporta SMTP sobre ipv6
	// Establecer el numero de puerto - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;
	// Establecer el tipo de encriptacion que usa el sistema - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';
	//Si usamos SMTP autenticacion
	$mail->SMTPAuth = true;
	// Nombre de usuario para autenticacion - use full email address for gmail
	$mail->Username = "contactojuventudtampico@gmail.com";
	// Contraseña para autenticacion SMTP
	$mail->Password = "PMJcontacto2017@";

	
	
	/* Hasta aqui */
/*
	// // Establece desde donde sera enviado el mensaje
	// $mail->setFrom($correo, $nombre);
	// Establece a quien se enviara el mensaje
	$enviara = "joelorlandom@gmail.com";
	$asunto = "FORMULARIO WEB";

	$mail->addAddress($enviara, $asunto);
	// Establece el asunto del mensaje
	$mail->Subject = 'CONTACTO - '.$asunto;

  //archivo adjunto
  //var_dump($_FILES);

/*

	// Envia una plantilla en HTML con el mensaje 
	$mail->isHTML(true);  
	$mail->Body = $html;

/*

	// Checa si el mensaje se envio sin errores
	if (!$mail->send()) {
		echo json_encode(array("error"=>"Su mensaje no pudo ser enviado","message"=>$mail->ErrorInfo));
	} else {
	    echo json_encode(array("success"=>"Su mensaje ha sido enviado","message"=>"Su mensaje ha sido enviado y sera verificado por uno de nuestros administradores"));
	}


*/



?>





 