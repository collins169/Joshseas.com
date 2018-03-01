<?php 
include 'db.php';
	if (isset($_GET['id'])) {
		$id=$_GET['id'];

		$check=mysqli_query($connect, "SELECT * FROM galleries WHERE id='$id'")or die("Unable to process request");
		$info=mysqli_fetch_array($check);
		$path="$info[image]";

		$delete=mysqli_query($connect, "DELETE FROM galleries WHERE id='$id'")or die("Unable to process request");
		if($delete==TRUE || $delete==1){
			if(file_exists($path)){
				if(unlink($path)){
				echo "<script>alert('File has been deleted')
				window.location.href='gallery.php'<script>";
				}
			}
		}
	}
 ?>