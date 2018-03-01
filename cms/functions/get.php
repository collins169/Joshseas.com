<?php 
	/* Logo Section Begins*/
	//To Deactivate a logo
	if (isset($_GET['deactivate'])) {
		$deactivated=$_GET['deactivate'];
		$update=mysqli_query($connect, "UPDATE logos SET status=0 WHERE id='$deactivated'")or die('Unable to process request');
		if($update==TRUE ||$update==1){
			echo "<script>alert('Selected logo has been deactivated')</script>";
		}else{
			echo "<script>alert('Selected logo was unable to deactivate')</script>";
		}
	}

	//To activate a logo
	if (isset($_GET['activate'])) {
		$activated=$_GET['activate'];
		$check=mysqli_query($connect, "SELECT * FROM logos WHERE status=1") or die('Unable to process request');
		if(mysqli_num_rows($check)==1){
			echo "<script>alert('You can only activate one logo at a time')</script>";
		}else{
			
			$update=mysqli_query($connect, "UPDATE logos SET status=1 WHERE id='$activated'")or die('Unable t0 process request');
			if($update==TRUE ||$update==1){
				echo "<script>alert('Selected logo has been activated')</script>";
			}else{
				echo "<script>alert('Selected logo was unable to activate')</script>";
			}
		}
	}
	/* Logo Section End*/
 ?>