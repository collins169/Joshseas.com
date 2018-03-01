<?php 
	require_once'db.php';
	if (isset($_POST['submit'])) {
		$nav_title=mysqli_real_escape_string($connect,$_POST['nav_title']);
		$nav_path=mysqli_real_escape_string($connect,$_POST['nav_path']);

		$check=mysqli_query($connect, "SELECT * FROM navigations WHERE title='$nav_title'") or die('Unable to process request!');
		if(mysqli_num_rows($check)>0){
			$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Navigation link Already Exist!</center><hr/>";
		}else{
			if(!empty($nav_title) || !empty($nav_path)){
				$created=time();
				$modified=$created;
				$insert=mysqli_query($connect,"INSERT INTO navigations VALUES ('','$nav_title','$nav_path','$created','$modified')");
				if($insert==TRUE || $insert==1){
					$alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Navigation Link has been added successfully</center><hr/>";
					header('Refresh:2; url=./nav_link.php');
               }else{
					$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Unable to add Navigation Link, Try again!</center><hr/>";
				}
			}else{
				echo "<script>alert('Please the input field is empty!')</script>";
			}
		}
	}

	if (isset($_POST['update'])) {
		$id=$_GET['edit'];
		$nav_title=mysqli_real_escape_string($connect,$_POST['nav_title']);
		$nav_path=mysqli_real_escape_string($connect,$_POST['nav_path']);

				$modified=time();
				$insert=mysqli_query($connect,"UPDATE navigations SET title='$nav_title',path='$nav_path',modified='$modified' WHERE id=$id");
				if($insert==TRUE || $insert==1){
					$alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Navigation Link has been updated successfully</center><hr/>";
					header('Refresh:2; url=./nav_link.php');
               }else{
					$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Unable to update Navigation Link, Try again!</center><hr/>";
				}
		
	}

 ?>