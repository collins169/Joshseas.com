<?php 
	require_once'db.php';
	if (isset($_POST['submit'])) {
		$website=mysqli_real_escape_string($connect,$_POST['website']);
		$location=mysqli_real_escape_string($connect,$_POST['location']);
		$country=mysqli_real_escape_string($connect,$_POST['country']);
		$phone=mysqli_real_escape_string($connect,$_POST['phone']);
		$email=mysqli_real_escape_string($connect,$_POST['email']);
		$facebook=mysqli_real_escape_string($connect,$_POST['facebook']);
		$twitter=mysqli_real_escape_string($connect,$_POST['twitter']);
		$instagram=mysqli_real_escape_string($connect,$_POST['instagram']);
		$google=mysqli_real_escape_string($connect,$_POST['google']);

				$created=time();
				$modified=$created;
				$insert=mysqli_query($connect,"INSERT INTO settings VALUES ('','$website','$location','$country','$phone','$email','$facebook','$twitter','$instagram','$google','$created','$modified')");
				if($insert==TRUE || $insert==1){
					$alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Settings have successfully been saved</center><hr/>";
					header('Refresh:2; url=./configurations.php');
               }else{
					$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Unable to save settings, Try again!</center><hr/>";
				}
		}

	if (isset($_POST['update'])) {
		$id=$_GET['edit'];
		$website=mysqli_real_escape_string($connect,$_POST['website']);
		$location=mysqli_real_escape_string($connect,$_POST['location']);
		$country=mysqli_real_escape_string($connect,$_POST['country']);
		$phone=mysqli_real_escape_string($connect,$_POST['phone']);
		$email=mysqli_real_escape_string($connect,$_POST['email']);
		$facebook=mysqli_real_escape_string($connect,$_POST['facebook']);
		$twitter=mysqli_real_escape_string($connect,$_POST['twitter']);
		$instagram=mysqli_real_escape_string($connect,$_POST['instagram']);
		$google=mysqli_real_escape_string($connect,$_POST['google']);

				$modified=time();
				$insert=mysqli_query($connect,"UPDATE settings SET website='$website',location='$location',country='$country',phone='$phone',email_address='$email',facebook_url='$facebook',twitter_url='$twitter',instagram_url='$instagram',googleplus_url='$google',modified='$modified' WHERE id=$id");
				if($insert==TRUE || $insert==1){
					$alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> settings have successfully been updated</center><hr/>";
					header('Refresh:2; url=./configurations.php');
               }else{
					$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Unable to update Settings, Try again!</center><hr/>";
				}
		
	}

 ?>