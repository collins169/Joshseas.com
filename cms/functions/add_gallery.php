<?php 
include_once 'db.php';
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $category=mysqli_real_escape_string($connect,$_POST['category']);
    $status=mysqli_real_escape_string($connect,$_POST['status']);
    $gallery_caption=mysqli_real_escape_string($connect,$_POST['gallery_caption']);
    $target_dir = "assets/uploads/galleries/";
    $gallery = $target_dir . basename($_FILES["gallery"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($gallery,PATHINFO_EXTENSION);

         $check = getimagesize($_FILES["gallery"]["tmp_name"]);
        if($check !== false) {
            $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> File is an image - " . $check["mime"] . ".</center><hr/>";
            $uploadOk = 1;
        } else {
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> File is not an image!</center><hr/>";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($gallery)) {
             $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, image already exists!</center><hr/>";
            $uploadOk = 0;
        }
        // Check file size
        elseif ($_FILES["gallery"]["size"] > 10000000) {
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
            if (move_uploaded_file($_FILES["gallery"]["tmp_name"], $gallery)) {
                $created=time();
                $modified=$created;
                 $insert=mysqli_query($connect, "INSERT INTO galleries (id,cat_id,image_caption,image,status,created,modified) VALUES ('','$category','$gallery_caption','$gallery','$status','$created','$modified' )");
                if($insert==TRUE){
                $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> The file ". basename( $_FILES["gallery"]["name"]). " has been uploaded.</center><hr/>";
                header('Refresh:2; url=./gallery.php');
               }else{
                 $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Image could not be uploaded.</center><hr/>";
               }
            } else {
                $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, there was an error uploading your file.</center><hr/>";
            }
        }
}
//Update or edit function
if(isset($_POST["update"])) {
    $id=$_GET['edit'];
    $category=mysqli_real_escape_string($connect,$_POST['category']);
    $gallery_caption=mysqli_real_escape_string($connect,$_POST['gallery_caption']);
    $status=mysqli_real_escape_string($connect,$_POST['status']);

        if($_FILES['gallery']['name']!=''){

            $target_dir = "assets/uploads/contents/";
            $gallery = $target_dir . basename($_FILES["gallery"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($gallery,PATHINFO_EXTENSION);

             $check = getimagesize($_FILES["gallery"]["tmp_name"]);
            if($check !== false) {
                $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> File is an image - " . $check["mime"] . ".</center><hr/>";
                $uploadOk = 1;
            } else {
                $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> File is not an image!</center><hr/>";
                $uploadOk = 0;
            }
            // Check if file already exists
            if (file_exists($gallery)) {
                 $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, image already exists!</center><hr/>";
                $uploadOk = 0;
            }
            // Check file size
            elseif ($_FILES["gallery"]["size"] > 10000000) {
                $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, your image is too large!</center><hr/>";
                $uploadOk = 0;
            }
            else {
                //Inserting image 
                if (move_uploaded_file($_FILES["gallery"]["tmp_name"], $gallery)) {
                    $created=time();
                    $modified=$created;
                    $insert=mysqli_query($connect, "UPDATE galleries SET cat_id='$category',image='$gallery',image_caption='$gallery_caption',status='$status',modified='$modified' WHERE id=$id") or die('Unable to process request!');
                    if($insert==TRUE){
                    $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Gallery has been added.</center><hr/>";
                    header('Refresh:2; url=./gallery.php');
                   }else{
                 $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Gallery could not be added.</center><hr/>";
                     }
                } else {
                    $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, there was an error uploading your file.</center><hr/>";
                }
            }
        }else{
            $check=mysqli_query($connect, "SELECT * FROM galleries WHERE id=$id")or die('Unable to process request!');
            $info=mysqli_fetch_array($check);
            $image1=$info['image'];
        
            //Inserting image 
                $modified=time();
                $insert=mysqli_query($connect, "UPDATE galleries SET cat_id='$category',image='$image1',image_caption='$gallery_caption',status='$status',modified='$modified' WHERE id=$id") or die('Unable to process request! ');
                if($insert==TRUE){
                $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Gallery has been Updated.</center><hr/>";
                header('Refresh:2; url=./gallery.php');
               } else {
                $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, there was an error uploading your file.</center><hr/>";
            }

        }
}
 ?>