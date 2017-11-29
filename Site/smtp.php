<?php
/*bool mail ( string $to , string $subject , string 
$message [, string $additional_headers [, string $additional_parameters ]] )




$to = 'lbenboudiaf@gmail.com';
$object = 'objet de l email';
$message = 'l email en lui-même';
 
$headers  = 'From: adresse de l expediteur'."\r\n";
$headers .= 'Reply-To: adresse destiner a la reponse'."\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
mail($to, $object, $message, $headers); * */
?>

<?php

$mail = new PHPmailer();
$mail->IsSMTP();
$mail->IsHTML(true);
$mail->Host='smtp.gmail.com:465';
$mail->From='ahah@gmail.com';
$mail->AddAddress('ohoh@tartampion.fr'); 
$mail->Subject='test';
$mail->Body=$msg;
if(!$mail->Send()){ //Teste le return code de la fonction
  echo $mail->ErrorInfo; //Affiche le message d'erreur (ATTENTION:voir section 7)
}
else{     
  echo 'Mail envoyé avec succès';
}
$mail->SmtpClose();
unset($mail);
?>