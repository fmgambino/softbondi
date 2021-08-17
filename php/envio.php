<?php

require("class.phpmailer.php");
require("class.smtp.php");


$destino = $_POST["email"];



$mail = new PHPMailer();



$mail->IsSMTP();                                      // set mailer to



$mail->Host = "smtp.hostinger.com";  // specify main and backup server

$mail->SMTPAuth = true;     // turn on SMTP authentication

$mail->Username = "info@softbondi.hol.es";  // SMTP username

$mail->Password = "Infosoftbondi2021"; // SMTP password

$mail->Port = 465;



$mail->From = "info@softbondi.hol.es";

$mail->FromName = "softbondi";        // remitente

$mail->AddAddress("info@softbondi.com", $destino);        // destinatario



$mail->AddReplyTo("francisco.perez.sd@gmail.com", "respuesta a");    // responder a



$mail->WordWrap = 50;     // set word wrap to 50 characters

$mail->IsHTML(true);     // set email



$mail->Subject = "Asunto .....";

$mail->Body    = "This is the HTML message body <b>in bold!</b>";

$mail->AltBody = "This is the body in plain text for non-HTML mail clients";



if(!$mail->Send())

{

   echo "Este mensaje no pudo enviarse. <p>";

   echo "Mailer Error: " . $mail->ErrorInfo;

   exit;

}



echo "Mensaje enviado correctamente";

?> 