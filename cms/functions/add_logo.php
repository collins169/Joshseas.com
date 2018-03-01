<?php 
include_once 'db.php';
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $logo_caption=mysqli_real_escape_string($connect,$_POST['logo_caption']);
    $target_dir = "assets/uploads/logos/";
    $logo = $target_dir . basename($_FILES["logo"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($logo,PATHINFO_EXTENSION);

            //check if file is an image file
         $check = getimagesize($_FILES["logo"]["tmp_name"]);
        if($check !== false) {
            $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> File is an image - " . $check["mime"] . ".</center><hr/>";
            $uploadOk = 1;
        } else {
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> File is not an image!</center><hr/>";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($logo)) {
             $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, image already exists!</center><hr/>";
            $uploadOk = 0;
        }
        // Check file size
        elseif ($_FILES["logo"]["size"] > 4000000) {
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, your image is too large!</center><hr/>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        elseif($imageFileType != "png" ) {
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, only PNG file is allowed!</center><hr/>";
            $uploadOk = 0;
        }
        else {
            //Inserting image into database and server folder
            if (move_uploaded_file($_FILES["logo"]["tmp_name"], $logo)) {
                $created=time();
                $modified=$created;
                $update=mysqli_query($connect, "INSERT INTO logos (id,logo_caption,logo,created,modified) VALUES ('','$logo_caption','$logo','$created','$modified' )");
                if($update==TRUE){
                $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> The file ". basename( $_FILES["logo"]["name"]). " has been uploaded.</center><hr/>";
               header('Refresh:2; url=./logo.php');
               }
            } else {
                $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, there was an error uploading your file.</center><hr/>";
            }
        }
}

//Update or edit function
if(isset($_POST["update"])) {
    $id=$_GET['id'];
    $logo_caption=mysqli_real_escape_string($connect,$_POST['logo_caption']);
    $target_dir = "assets/uploads/logos/";
    $logo = $target_dir . basename($_FILES["logo"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($logo,PATHINFO_EXTENSION);

           
        // Check if file already exists
        if (file_exists($logo)) {
             $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, image already exists!</center><hr/>";
            $uploadOk = 0;
        }
        // Check file size
        elseif ($_FILES["logo"]["size"] > 100000) {
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, your image is too large!</center><hr/>";
            $uploadOk = 0;
        }
        else {
            //Inserting image into database and server folder
            if (move_uploaded_file($_FILES["logo"]["tmp_name"], $logo)) {
                $modified=time();
                $update=mysqli_query($connect, "UPDATE logos SET logo='$logo', logo_caption='$logo_caption', modified='$modified' WHERE id=$id");
                if($update==TRUE){
                $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> The file ". basename( $_FILES["logo"]["name"]). " has been uploaded.</center><hr/>";
               header('Refresh:2; url=./logo.php');
               }
            } else {
                $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, there was an error uploading your file.</center><hr/>";
            }
        }
}
 ?>