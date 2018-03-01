<?php 
		
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.kedstudios.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'test@kedstudios.com';                 // SMTP username
$mail->Password = 'Test@2017';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->setFrom('no-reply@kedstudios.com', "L'erique New Order");    // Add a recipient
$mail->addAddress('ethomas168@gmail.com');               // Name is optional
$mail->addReplyTo($email, '$first_name $last_name');
$mail->addCC('edanjumbo@gmail.com');
$mail->addBCC('kosicollins169@gmail.com');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "New Order ";
$mail->Body    = "<center><strong>Dear Eric Thomas, below is the order description.</strong></center>
                            <p>First name: $first_name.</p>
                            <p>last name: $last_name.</p>
                            <p>Phone Number: $phone </p>
                            <p>Email: $email. </p>
                            <p>Shirt Size: $size.</p>
                            <p>Shirt Colour: $colour. </p>
                            <p>Shirt Design: $design. </p>
                            <p>Ankara Style: $ankara.</p>
							<p>Write Up: $write_up.</p><br>
							<p>Please Reply or call immediately. </p>
							";
$mail->AltBody = "Dear $first_name $last_name, below is your order description
                            First name: $first_name
                            last name: $last_name.
                            Phone Number: $phone
                            Email: $email
                            Shirt Size: $size.
                            Shirt Colour: $colour.
                            Shirt Design: $design. 
                            Ankara Style: $ankara.
                            Please Reply or call immediately.
";
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	header('location:./thank_you.php');
    echo 'Message has been sent';
}
			
?>