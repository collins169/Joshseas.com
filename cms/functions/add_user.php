<?php 
	require_once 'db.php';
	if (isset($_POST['add_user'])) {
		$first_name=mysqli_real_escape_string($connect,$_POST['first_name']);
		$last_name=mysqli_real_escape_string($connect,$_POST['last_name']);
		$username=mysqli_real_escape_string($connect,$_POST['username']);
		$email=mysqli_real_escape_string($connect,$_POST['email']);
		$password=md5(mysqli_real_escape_string($connect,$_POST['password']));
		$cpassword=md5(mysqli_real_escape_string($connect,$_POST['cpassword']));
		$role=mysqli_real_escape_string($connect,$_POST['role']);
		$profile_pic=mysqli_real_escape_string($connect,$_POST['profile_pic']);

		if($password==$cpassword){
			//Username Check
			$check=mysqli_query($connect, "SELECT * FROM users WHERE username='$username'")or die('Unable To Process Request');
			if(mysqli_num_rows($check)>0){
				$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Username Already Exist, Please try a new username!</center><hr/>";
			}else{
			//Email Address Check
			$check1=mysqli_query($connect, "SELECT * FROM users WHERE email='$email'")or die('Unable To Process Request');
			if(mysqli_num_rows($check1)>0){
					$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i>  Email Address Already Exist, Please try a new email address!</center><hr/>";
			}else{

					$created= time();
					$modified=$created;
					$insert=mysqli_query($connect, "INSERT INTO users 
					(id,first_name,last_name,username,email,password,role,profile_pic,active,created,modified) 
					VALUES('','$first_name','$last_name','$username','$email','$password','$role','assets/uploads/profiles/default.png','1','$created','$modified')");

					if($insert==TRUE || $insert==1){
						header('location: ./add_user.php#tab_1_2');
					}else{
						$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> An Error Occurred, Unable to add New User!</center><hr/>";
					}
				}
		}
	}else{
			$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Password and Confirm Password Not Correct!</center><hr/>";
		}
		
}

if (isset($_POST['edit_user'])) {
		$id=$_GET['edit'];
		$first_name=mysqli_real_escape_string($connect,$_POST['first_name']);
		$last_name=mysqli_real_escape_string($connect,$_POST['last_name']);
		$username=mysqli_real_escape_string($connect,$_POST['username']);
		$email=mysqli_real_escape_string($connect,$_POST['email']);
		$role=mysqli_real_escape_string($connect,$_POST['role']);

					$modified= time();
					$insert=mysqli_query($connect, "UPDATE users SET ,first_name='$first_name',last_name='$last_name',email='$email',role='$role',modified='$modified' WHERE id=$id");

					if($insert==TRUE || $insert==1){
						header('location: ./add_user.php#tab_1_2');
					}else{
						$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> An Error Occurred, Unable to add New User!</center><hr/>";
					}
		
}

if(isset($_POST['change_password'])){
		$id=$_SESSION['login_id'];
		$old_password=md5(mysqli_real_escape_string($connect,$_POST['old_password']));
		$password=md5(mysqli_real_escape_string($connect,$_POST['password']));
		$password2=md5(mysqli_real_escape_string($connect,$_POST['password2']));
		
		/*old password check*/
		$check=mysqli_query($connect,"SELECT * FROM users WHERE password='$old_password' AND id='$id'")or die('Unable To Process Request');
		if(mysqli_num_rows($check)==1){
			/*password entry confirmation*/
			if($password==$password2){
				$modified=time();
				$check=mysqli_query($connect,"UPDATE users SET password='$password' WHERE id='$id'")or die('Unable To Process Request');
				if($check==1||$check==true){
					$alert2="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Password Updated.</center><hr/>";
				}else{
					$alert2="<center class='alert alert-danger'><i class='fa fa-warning'></i> Try Again Later.</center><hr/>";
				}
			}else{
				$alert2="<center class='alert alert-danger'><i class='fa fa-warning'></i> New Password and Confirm Password Mismatch!</center><hr/>";
			}
		}else{
			$alert2="<center class='alert alert-danger'><i class='fa fa-warning'></i> Current Password Incorrect!</center><hr/>";
		}
	}
 ?>