<?php
include 'function/db.php';


		$name=htmlspecialchars($_POST['name'],ENT_QUOTES);
		$name=mysqli_real_escape_string($connect,$_POST['name']);

		$email=htmlspecialchars($_POST['email'],ENT_QUOTES);
		$email=mysqli_real_escape_string($connect,$_POST['email']);

		$phone=htmlspecialchars($_POST['phone'],ENT_QUOTES);
		$phone=mysqli_real_escape_string($connect,$_POST['phone']);

		$options=htmlspecialchars($_POST['options'],ENT_QUOTES);
		$options=mysqli_real_escape_string($connect,$_POST['options']);
		
		$message=htmlspecialchars($_POST['message'],ENT_QUOTES);
		$message=mysqli_real_escape_string($connect,$_POST['message']);


		$created=time();
		$modified=$created;

			$insert=mysqli_query($connect, "INSERT INTO contacts (id,name,email,phone,options,message,created,modified) VALUES('','$name','$email','$phone','$options','$message','$created','$modified')") or die('Unable To Process Request');
			if($insert==True){
				include 'mail2.php';
				
			}else{
				echo"<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, you were unable to send message!</center><hr/>";
			}

