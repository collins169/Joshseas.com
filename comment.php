<?php
include 'function/db.php';


		$blog_id=htmlspecialchars($_POST['blog_id'],ENT_QUOTES);
		$blog_id=mysqli_real_escape_string($connect,$_POST['blog_id']);

		$name=htmlspecialchars($_POST['name'],ENT_QUOTES);
		$name=mysqli_real_escape_string($connect,$_POST['name']);

		$email=htmlspecialchars($_POST['email'],ENT_QUOTES);
		$email=mysqli_real_escape_string($connect,$_POST['email']);

		$comment=htmlspecialchars($_POST['comment'],ENT_QUOTES);
		$comment=mysqli_real_escape_string($connect,$_POST['comment']);

		$created=time();
		$modified=$created;

			$insert=mysqli_query($connect, "INSERT INTO comments (id,blog_id,name,email,comment,created,modified) VALUES('','$blog_id','$name','$email','$comment','$created','$modified')") or die('Unable To Process Request');
			if($insert==True){
				echo"<center class='alert alert-success'><i class='fa fa-check-circle'></i> Your comment has been posted.</center><hr/>";
			}else{
				echo"<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, unable to post comment at these point!</center><hr/>";
			}

