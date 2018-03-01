<?php

if(isset($_POST['sumbit'])){
		$name=htmlspecialchars($_POST['name'],ENT_QUOTES);
		$name=mysqli_real_escape_string($connect,$_POST['name']);

		$email=htmlspecialchars($_POST['email'],ENT_QUOTES);
		$email=mysqli_real_escape_string($connect,$_POST['email']);

		$phone=htmlspecialchars($_POST['phone'],ENT_QUOTES);
		$phone=mysqli_real_escape_string($connect,$_POST['phone']);

		$options=htmlspecialchars($_POST['option'],ENT_QUOTES);
		$options=mysqli_real_escape_string($connect,$_POST['option']);
		
		$message=htmlspecialchars($_POST['message'],ENT_QUOTES);
		$message=mysqli_real_escape_string($connect,$_POST['message']);


		$created=time();
		$modified=$created;

			$insert=mysqli_query($connect, "INSERT INTO contacts (id,name,email,phone,options,message,created,modified) VALUES('','$name','$email','$phone','$options','$message','$created','$modified')") or die('Unable To Process Request');
			if($insert==True){
				$alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Thank You for contacting us we would get back to you as soon as possible</center><hr/>";
			}else{
				$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, you were unable to send message!</center><hr/>";
			}
}