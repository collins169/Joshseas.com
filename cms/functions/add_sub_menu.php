<?php 
	require_once'db.php';
	if (isset($_POST['submit'])) {
		$menu_id=mysqli_real_escape_string($connect,$_POST['menu_id']);
		$nav_title=mysqli_real_escape_string($connect,$_POST['nav_title']);
		$nav_path=mysqli_real_escape_string($connect,$_POST['nav_path']);

		$check=mysqli_query($connect, "SELECT * FROM sub_menus WHERE title='$nav_title'") or die('Unable to process request!');
		if(mysqli_num_rows($check)>0){
			$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sub Menu Already Exist!</center><hr/>";
		}else{
			if(!empty($nav_title) || !empty($nav_path)){
				$created=time();
				$modified=$created;
				$insert=mysqli_query($connect,"INSERT INTO sub_menus VALUES ('','$menu_id','$nav_title','$nav_path','$created','$modified')");
				if($insert==TRUE || $insert==1){
					$alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Sub Menu has been added successfully</center><hr/>";
					header('Refresh:2; url=./sub_menus.php');
               }else{
					$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Unable to add sub menu, Try again!</center><hr/>";
				}
			}else{
				echo "<script>alert('Please the input field is empty!')</script>";
			}
		}
	}

	if (isset($_POST['update'])) {
		$id=$_GET['edit'];
		$menu_id=mysqli_real_escape_string($connect,$_POST['menu_id']);
		$nav_title=mysqli_real_escape_string($connect,$_POST['nav_title']);
		$nav_path=mysqli_real_escape_string($connect,$_POST['nav_path']);

				$modified=time();
				$insert=mysqli_query($connect,"UPDATE sub_menus SET menu_id='$menu_id',title='$nav_title',path='$nav_path',modified='$modified' WHERE id=$id");
				if($insert==TRUE || $insert==1){
					$alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Sub Menu has been updated successfully</center><hr/>";
					header('Refresh:2; url=./sub_menus.php');
               }else{
					$alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Unable to update Sub menu, Try again!</center><hr/>";
				}
		
	}

 ?>