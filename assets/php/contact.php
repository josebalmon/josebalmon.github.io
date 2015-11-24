<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'josebalmonperalta@gmail.com';
	$subject = 'Formulario de contacto Portfolio Web';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Mensaje enviado correctamente';
    }
	else{
		$res['message'] = 'Error al enviar el mensaje. Por favor, contacte a través del correo -josebalmonperalta@gmail.com-';
	}
	
	
	echo json_encode($res);
}

?>