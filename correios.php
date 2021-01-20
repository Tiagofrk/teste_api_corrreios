<?php

include('index.php');
include_once('apicorreios.php');

date_default_timezone_set('America/Sao_Paulo');

require_once('./src/PHPMailer.php');
require_once('./src/SMTP.php');
require_once('./src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['cod']) && !empty(trim($_POST['cod'])))) {
 
	$email = $_POST['email'];
	$mensagem = $_POST['cod'];
 
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'bicalho.franck.tiago@gmail.com';
	$mail->Password = 'Tg@24072002';
	$mail->Port = 587;
 
	$mail->setFrom($email);
	$mail->addAddress('bicalho.franck.tiago@gmail.com');
 
	$mail->isHTML(true);
	$mail->Subject = "Encomenda entregue! ";
	$mail->Body = "Dados do envio <br> ". 
				   "Marc: Tiago Bicalho Franck <br>".
				   "Tel: 11 97266-4157 <br>".
				   "Travessa: R. Monsenhor Giovanni Batista Scalabrini <br>".
				   "Mauá,São Paulo";
				
	if($mail->send()) {
		echo 'Email enviado com sucesso.';
	} else {
		echo 'Email não enviado.';
	}
} else {
	echo 'Não enviado: informar o email e o código.';
}

?>