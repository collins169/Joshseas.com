<?php 
		include 'function/db.php';
		$email=htmlspecialchars($_POST['email'],ENT_QUOTES);
		$email=mysqli_real_escape_string($connect,$_POST['email']);

		$created=time();
		$modified=$created;
			$search=mysqli_query($connect, " SELECT * FROM subscribers WHERE email='$email'") or die('Unable To Process Request');
		if(mysqli_num_rows($search)>0){
			echo"<center class='alert alert-danger' style='text-align: center; right: 40px; left: 80px;'><strong>You are already subscribed</strong></center>";
		}else{
			$insert=mysqli_query($connect, "INSERT INTO subscribers (id,email,status,created,modified) VALUES('','$email','','$created','$modified')") or die('Unable To Process Request');
			if($insert==True){
				include 'function/mail.php';
			}else{
				echo"<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, Pls Try again later!</center>";
			}
		}
 ?>