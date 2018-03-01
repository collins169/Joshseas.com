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
$mail->setFrom('info@joshseas.com', "info@joshseas.com");    // Add a recipient
$mail->addAddress('kosicollins@gmail.com', 'Collins Onyetube');               // Name is optional
$mail->addReplyTo('$email', "$name");
// $mail->addCC('edanjumbo@gmail.com');
// $mail->addBCC('kosicollins169@gmail.com');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Service Required by $name";
$mail->Body    = '<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style type="text/css">
	
body {
    padding: 0;
    margin: 0;
}

html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
@media only screen and (max-device-width: 680px), only screen and (max-width: 680px) { 
    *[class="table_width_100"] {
		width: 96% !important;
	}
	*[class="border-right_mob"] {
		border-right: 1px solid #dddddd;
	}
	*[class="mob_100"] {
		width: 100% !important;
	}
	*[class="mob_center"] {
		text-align: center !important;
	}
	*[class="mob_center_bl"] {
		float: none !important;
		display: block !important;
		margin: 0px auto;
	}	
	.iage_footer a {
		text-decoration: none;
		color: #929ca8;
	}
	img.mob_display_none {
		width: 0px !important;
		height: 0px !important;
		display: none !important;
	}
	img.mob_width_50 {
		width: 40% !important;
		height: auto !important;
	}
}
.table_width_100 {
	width: 680px;
}
</style>

<div id="mailsub" class="notification" align="center">

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;"><tr><td align="center" bgcolor="#eff3f8">

<!--[if gte mso 10]>
<table width="680" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<![endif]-->

<table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
    <tr><td>
	<!-- padding --><div style="height: 110px; line-height: 110px; font-size: 10px;"> </div>
	</td></tr>
	

	<!--content 1 -->
	<tr><td align="center" bgcolor="#ffffff">
		<table width="90%" border="0" cellspacing="0" cellpadding="0">
			<tr><td align="center">
				<!-- padding --><div style="height: 60px; line-height: 60px; font-size: 10px;"> </div>
				<div style="line-height: 44px;">
					<font face="montserrat, sans-serif" size="5" color="#57697e" style="font-size: 25px;">
					<span style="font-family: montserrat, sans-serif; font-size: 25px; color: #000;">
						<strong>'.$name.' is trying to reach you<strong>
					</span></font>
				</div>
				<!-- padding --><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div>
			</td></tr>
			<tr><td align="">
				<div style="line-height: 24px;">
					<font face="montserrat, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
					<span style="font-family: montserrat, sans-serif; font-size: 15px; color: #000;">
						Full Name: '.$name.'
						<br>
						<br>
						Email Address: '.$email.'
						<br>
						<br>
						Phone Number: '.$phone.'
						<br>
						<br>
						Service Required: '.$options.'
						<br>
						<br>
						Message: <p>'.$message.'</p>

					</span></font>
				</div>
				<div style="height: 40px; line-height: 40px; font-size: 10px;"> </div>
			</td></tr>
		</table>		
	</td></tr>
	<!--content 1 END-->

	<!--footer -->
	<tr><td class="iage_footer" align="center" bgcolor="#ffffff">
		<!-- padding --><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div>	
		
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr><td align="center">
				<font face="montserrat, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;">
				<span style="font-family: montserrat, sans-serif; font-size: 13px; color: #96a5b5;">
					2018 © Josh Seas. ALL Rights Reserved | Developed by <a href="https://facebook.com/kosicollins">Kedstudios</a>.
				</span></font>				
			</td></tr>			
		</table>
		
		<!-- padding --><div style="height: 30px; line-height: 30px; font-size: 10px;"> </div>	
	</td></tr>
	<!--footer END-->
	<tr><td>
	<!-- padding --><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
	</td></tr>
	<tr><td>
	<!-- padding --><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
	</td></tr>
</table>
<!--[if gte mso 10]>
</td></tr>
</table>
<![endif]-->
 
</td></tr>
</table>
			
</div> ';
$mail->AltBody = '		Full Name: '.$name.'
						Email Address: '.$email.'
						Phone Number: '.$phone.'
						Service Required: '.$options.'
						Message: <p>'.$message.'
				';
if(!$mail->send()) {
    echo"<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, you were unable to send message!</center><hr/>";
} else {
	echo"<center class='alert alert-success'><i class='fa fa-check-circle'></i> Thank You for contacting us we would get back to you as soon as possible</center><hr/>";
}


			
?>