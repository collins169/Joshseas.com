<?php 
include_once 'db.php';
// Check if image file is a actual image or fake image
if(isset($_POST["upload"])) {
    $username=mysqli_real_escape_string($connect,$_POST['username']);
    $target_dir = "assets/uploads/profiles/";
    $profile_pic = $target_dir . basename($_FILES["profile_pic"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($profile_pic,PATHINFO_EXTENSION);

        // Check if file already exists
        if (file_exists($profile_pic)) {
             $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, image already exists!</center><hr/>";
            $uploadOk = 0;
        }
        // Check file size
        elseif ($_FILES["profile_pic"]["size"] > 5000000) {
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, your image is too large!</center><hr/>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, only JPG, JPEG, PNG & GIF files are allowed!</center><hr/>";
            $uploadOk = 0;
        }
        else {
            //Inserting image 
            if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $profile_pic)) {
                $modified=time();
                $update=mysqli_query($connect, "UPDATE users SET profile_pic='$profile_pic',modified='$modified' WHERE username='$username'");
                if($update==TRUE){
                $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> The file ". basename( $_FILES["profile_pic"]["name"]). " has been uploaded.</center><hr/>";
                
               }else{
                 $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Profile Image could not be uploaded.</center><hr/>";
               }
            } else {
                $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, there was an error uploading your file.</center><hr/>";
            }
        }
}
 ?>