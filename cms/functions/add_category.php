<?php 
	require_once'db.php';
	if (isset($_POST['submit'])) {
		$cat_title=mysqli_real_escape_string($connect,$_POST['cat_title']);

		$check=mysqli_query($connect, "SELECT * FROM categories WHERE name='$cat_title'") or die('Unable to process request!');
		if(mysqli_num_rows($check)>0){
			$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Navigation link Already Exist!</center><hr/>";
		}else{
			if(!empty($cat_title) || !empty($nav_path)){
				$created=time();
				$modified=$created;
				$insert=mysqli_query($connect,"INSERT INTO categories VALUES ('','$cat_title','$created','$modified')");
				if($insert==TRUE || $insert==1){
					$alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Category has been added successfully</center><hr/>";
					header('Refresh:2; url=./gallery.php');
               }else{
					$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Unable to add Category, Try again!</center><hr/>";
				}
			}else{
				echo "<script>alert('Please the input field is empty!')</script>";
			}
		}
	}

	if (isset($_POST['update'])) {
		$id=$_GET['edit'];
		$cat_title=mysqli_real_escape_string($connect,$_POST['cat_title']);

				$modified=time();
				$insert=mysqli_query($connect,"UPDATE categories SET title='$cat_title',modified='$modified' WHERE id=$id");
				if($insert==TRUE || $insert==1){
					$alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Category has been updated successfully</center><hr/>";
					header('Refresh:2; url=./gallery.php');
               }else{
					$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Unable to update Category, Try again!</center><hr/>";
				}
		
	}

 ?>