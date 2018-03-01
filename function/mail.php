<?php 
		
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.joshseas.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'admin@joshseas.com';                 // SMTP username
$mail->Password = 'collins169';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->setFrom('no-reply@kedstudios.com', "Josh Seas");    // Add a recipient
$mail->addAddress($email);               // Name is optional
$mail->addReplyTo('ayojosh2k@gmail.com', "Ojo Joshua");


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Thank You for Subscribing";
$mail->Body    = "include 'body.php'";
$mail->AltBody = "include 'body.php'";

if(!$mail->send()) {
    echo"<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, Pls Try again later!</center>";
} else {
	echo"<center class='alert alert-success'><i class='fa fa-check-circle'></i> Thanks for subscribing!</center>";
}


			
?>