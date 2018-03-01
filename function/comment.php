<?php 
	if (isset($_POST['submit'])) {
		$blog_id=$_GET['id'];
		$name=mysqli_real_escape_string($connect,$_POST['name']);
		$email=mysqli_real_escape_string($connect,$_POST['email']);
		$comment=mysqli_real_escape_string($connect,$_POST['comment']);
		$created=time();
		$modified=$created;
			$insert=mysqli_query($connect, "INSERT INTO comments (id,blog_id,name,email,comment,created,modified) VALUES('','$blog_id','$name','$email','$comment','$created','$modified')") or die('Unable To Process Request');
			if($insert==True){
				$display="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Your comment has been posted.</center><hr/>";
			}else{
				$display="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, unable to post comment at these point!</center><hr/>";
			}
	}
 ?>