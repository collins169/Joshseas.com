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
$mail->setFrom('no-reply@joshseas.com', "no-reply@joshseas.com");    // Add a recipient
$mail->addAddress($email);               // Name is optional
// $mail->addReplyTo('ayojosh@joshseas.com', "Ojo Joshua");


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Joshseas Newsletter Subscription";
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
	<!-- padding --><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
	</td></tr>
	<!--header -->
	<tr><td align="center" bgcolor="#ffffff">
		<!-- padding --><div style="height: 10px; line-height: 10px; font-size: 10px;"> </div>
		<table width="90%" border="0" cellspacing="0" cellpadding="0">
			<tr><td align="left"><!-- 

				Item --><div class="mob_center_bl" style="float: left; display: inline-block; width: 115px;">
					<table class="mob_center" width="115" border="0" cellspacing="0" cellpadding="0" align="left" style="border-collapse: collapse; margin: 0;">
						<tr><td align="left" valign="middle">
							<!-- padding --><div style="height: 10px; line-height: 10px; font-size: 10px;"> </div>
							<table width="115" border="0" cellspacing="0" cellpadding="0" >
								<tr><td align="left" valign="top" class="mob_center">
									<a href="https://www.joshseas.com" target="_blank" style="color: #596167; font-family: montserrat, sans-serif; font-size: 13px;">
									<font face="montserrat, sans-seri; font-size: 13px;" size="3" color="#596167">
									<img src="https://www.joshseas.com/cms/assets/uploads/logos/logo.png" width="90" height="90" alt="logo" border="0" style="display: block;" /></font></a>
								</td></tr>
							</table>						
						</td></tr>
					</table></div><!-- Item END--><!--[if gte mso 10]>
					</td>
					<td align="right">
				<![endif]--><!-- 

				Item --><div class="mob_center_bl" style="float: right; display: inline-block; width: 88px;">
					<table width="88" border="0" cellspacing="0" cellpadding="0" align="right" style="border-collapse: collapse;">
						<tr><td align="right" valign="middle">
							<!-- padding --><div style="height: 10px; line-height: 10px; font-size: 10px;"> </div>
							<table width="100%" border="0" cellspacing="0" cellpadding="0" >
								<tr><td align="right">
									<!--social -->
									<div class="mob_center_bl" style="width: 88px;">
									<table border="0" cellspacing="0" cellpadding="0" style="margin-top: 30px">
										<tr><td width="29" align="center" style="line-height: 19px;">
											<a href="https://www.facebook.com/joshseasgh" target="_blank" style="color: #596167; font-family: montserrat, sans-serif; font-size: 12px;">
											<font face="montserrat, sans-serif" size="2" color="#596167">
											<img src="http://joshseas.com/img/facebook.png" width="25" height="25" alt="Facebook" border="0" style="display: block;" /></font></a>
										</td><td width="39" align="center" style="line-height: 19px;">
											<a href="https://twitter.com/joshseasgh" target="_blank" style="color: #596167; font-family: montserrat, sans-serif; font-size: 12px;">
											<font face="montserrat, sans-serif" size="2" color="#596167">
											<img src="http://joshseas.com/img/twitter.png" width="25" height="25" alt="Twitter" border="0" style="display: block;" /></font></a>
										</td><td width="39" align="right" style="line-height: 19px;">
											<a href="https://instagram.com/joshseasgh" target="_blank" style="color: #596167; font-family: montserrat, sans-serif; font-size: 12px;">
											<font face="montserrat, sans-serif" size="2" color="#596167">
											<img src="http://joshseas.com/img/instagram.png" width="25" height="25" alt="Instagram" border="0" style="display: block;" /></font></a>
										</td></tr>
									</table>
									</div>
									<!--social END-->
								</td></tr>
							</table>
						</td></tr>
					</table></div><!-- Item END--></td>
			</tr>
		</table>
		<!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div>
	</td></tr>
	<!--header END-->

	<!--content 1 -->
	<tr><td align="center" bgcolor="#fbfcfd">
		<table width="90%" border="0" cellspacing="0" cellpadding="0">
			<tr><td align="center">
				<!-- padding --><div style="height: 60px; line-height: 60px; font-size: 10px;"> </div>
				<div style="line-height: 44px;">
					<font face="montserrat, sans-serif" size="5" color="#57697e" style="font-size: 34px;">
					<span style="font-family: montserrat, sans-serif; font-size: 34px; color: #57697e;">
						Thank You For Subscribing to our Newsletter
					</span></font>
				</div>
				<!-- padding --><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div>
			</td></tr>
			<!-- <tr><td align="center">
				<div style="line-height: 24px;">
					<font face="montserrat, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
					<span style="font-family: montserrat, sans-serif; font-size: 15px; color: #57697e;">
						Lorem ipsum dolor sit amet consectetuer sed<br> diam nonumy nibh elit dolore.
					</span></font>
				</div>
				<div style="height: 40px; line-height: 40px; font-size: 10px;"> </div>
			</td></tr> -->
			<tr><td align="center">
				<div style="line-height: 24px;">
					<a href="#" target="_blank" style="color: #596167; font-family: montserrat, sans-serif; font-size: 13px;">
						<font face="montserrat, sans-seri; font-size: 13px;" size="3" color="#596167">
							<img src="https://joshseas.com/img/success.png" width="120" height="120" alt="success" border="0" style="display: block;" /></font></a>
				</div>
				<!-- padding --><div style="height: 60px; line-height: 60px; font-size: 10px;"> </div>
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
				<span style="font-family: montserrat, sans-serif; font-size: 13px; color: #96a5b5;">Don‘t want to recieve further emails? You can unsubscribe <a href="https://joshseas.com/unsubscribe.php?email=<?php echo $email ?>"> here</a>.
				</span></font>
				<br>
				<br>
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
</table>
<!--[if gte mso 10]>
</td></tr>
</table>
<![endif]-->
 
</td></tr>
</table>
			
</div> ';
$mail->AltBody = "Thank You For Subscribing to our Newsletter";
if(!$mail->send()) {
    echo"<center class='alert alert-danger' style='text-align: center; right: 40px; left: 80px;'><i class='fa fa-warning'></i> Sorry, Pls Try again later!</center>";
} else {
	echo"<center class='alert alert-success' style='text-align: center; right: 40px; left: 80px;'><i class='fa fa-check-circle'></i> Thanks for subscribing!</center>";
}


			
?>