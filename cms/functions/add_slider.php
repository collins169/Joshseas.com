<?php 
include_once 'db.php';
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $slider_caption=mysqli_real_escape_string($connect,$_POST['slider_caption']);
    $target_dir = "assets/uploads/sliders/";
    $slider = $target_dir . basename($_FILES["slider"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($slider,PATHINFO_EXTENSION);

            //check if file is an image file
         $check = getimagesize($_FILES["slider"]["tmp_name"]);
        if($check !== false) {
            $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> File is an image - " . $check["mime"] . ".</center><hr/>";
            $uploadOk = 1;
        } else {
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> File is not an image!</center><hr/>";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($slider)) {
             $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, image already exists!</center><hr/>";
            $uploadOk = 0;
        }
        // Check file size
        elseif ($_FILES["slider"]["size"] > 90000000) {
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, your image is too large!</center><hr/>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        elseif($imageFileType != "png" && $imageFileType != "jpg" && $imageFileType != "gif" && $imageFileType != "jpeg") {
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, only JPG, JPEG, PNG & GIF files are allowed!</center><hr/>";
            $uploadOk = 0;
        }
        else {
            //Inserting image into database and server folder
            if (move_uploaded_file($_FILES["slider"]["tmp_name"], $slider)) {
                $created=time();
                $modified=$created;
                $update=mysqli_query($connect, "INSERT INTO sliders (id,slider_caption,slider,status,created,modified) VALUES ('','$slider_caption','$slider','1','$created','$modified' )");
                if($update==TRUE){
                $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> The file ". basename( $_FILES["slider"]["name"]). " has been uploaded.</center><hr/>";
                header('Refresh:2; url=./slider.php');
               }
            } else {
                $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, there was an error uploading your file.</center><hr/>";
            }
        }
}

// Update or edit function
if(isset($_POST["update"])) {
    $id=$_GET['edit'];
    $slider_caption=mysqli_real_escape_string($connect,$_POST['slider_caption']);
    $target_dir = "assets/uploads/sliders/";
    $slider = $target_dir . basename($_FILES["slider"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($slider,PATHINFO_EXTENSION);

        // Check if file already exists
        if (file_exists($slider)) {
             $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, image already exists!</center><hr/>";
            $uploadOk = 0;
        }
        // Check file size
        elseif ($_FILES["slider"]["size"] > 2000000) {
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, your image is too large!</center><hr/>";
            $uploadOk = 0;
        }
        else {
            //Inserting image into database and server folder
            if (move_uploaded_file($_FILES["slider"]["tmp_name"], $slider)) {
                $modified=time();
                $update=mysqli_query($connect, "UPDATE sliders SET slider_caption='$slider_caption', slider='$slider', modified='$modified' WHERE id=$id");
                if($update==TRUE){
                $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> The file ". basename( $_FILES["slider"]["name"]). " has been uploaded.</center><hr/>";
                header('Refresh:2; url=./slider.php');
               }
            } else {
                $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, there was an error uploading your file.</center><hr/>";
            }
        }
}
 ?>