<?php 
include_once 'db.php';
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $title=mysqli_real_escape_string($connect,$_POST['title']);
    $menu_id=mysqli_real_escape_string($connect,$_POST['menu_id']);
    $summary=mysqli_real_escape_string($connect,$_POST['summary']);
    $content=mysqli_real_escape_string($connect,$_POST['content']);
    $image_caption=mysqli_real_escape_string($connect,$_POST['image_caption']);
    $status=mysqli_real_escape_string($connect,$_POST['status']);

    $target_dir = "assets/uploads/contents/";
    $image = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($image,PATHINFO_EXTENSION);

         $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> File is an image - " . $check["mime"] . ".</center><hr/>";
            $uploadOk = 1;
        } else {
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> File is not an image!</center><hr/>";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($image)) {
             $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, image already exists!</center><hr/>";
            $uploadOk = 0;
        }
        // Check file size
        elseif ($_FILES["image"]["size"] > 10000000) {
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, your image is too large!</center><hr/>";
            $uploadOk = 0;
        }
        else {
            //Inserting image 
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $image)) {
                $created=time();
                $modified=$created;
                $insert=mysqli_query($connect, "INSERT INTO contents 
                    (id,title,menu_id,summary,content,image,image_caption,deleted,status,created,modified) 
                    VALUES('','$title','$menu_id','$summary','$content','$image','$image_caption','0','$status','$created','$modified') ") or die('Unable to process request!');
                if($insert==TRUE){
                $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Content has been added.</center><hr/>";
                header('Refresh:2; url=./content.php');
               }else{
                 $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Content could not be added.</center><hr/>";
               }
            }else {
                $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, there was an error uploading your file.</center><hr/>";
            }
        }
}

if(isset($_POST["update"])) {
    $id=$_GET['edit'];
    $title=mysqli_real_escape_string($connect,$_POST['title']);
    $menu_id=mysqli_real_escape_string($connect,$_POST['menu_id']);
    $summary=mysqli_real_escape_string($connect,$_POST['summary']);
    $content=mysqli_real_escape_string($connect,$_POST['content']);
    $image_caption=mysqli_real_escape_string($connect,$_POST['image_caption']);
    $status=mysqli_real_escape_string($connect,$_POST['status']);

        if($_FILES['image']['name']!=''){

            $target_dir = "assets/uploads/contents/";
            $image = $target_dir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($image,PATHINFO_EXTENSION);

             $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> File is an image - " . $check["mime"] . ".</center><hr/>";
                $uploadOk = 1;
            } else {
                $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> File is not an image!</center><hr/>";
                $uploadOk = 0;
            }
            // Check if file already exists
            if (file_exists($image)) {
                 $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, image already exists!</center><hr/>";
                $uploadOk = 0;
            }
            // Check file size
            elseif ($_FILES["image"]["size"] > 10000000) {
                $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, your image is too large!</center><hr/>";
                $uploadOk = 0;
            }
            else {
                //Inserting image 
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $image)) {
                    $created=time();
                    $modified=$created;
                    $insert=mysqli_query($connect, "UPDATE contents SET menu_id='$menu_id', title='$title',summary='$summary',content='$content',image='$image',image_caption='$image_caption',status='$status',modified='$modified' WHERE id=$id") or die('Unable to process request!');
                    if($insert==TRUE){
                    $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Content has been added.</center><hr/>";
                    header('Refresh:2; url=./content.php');
                   }else{
                 $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Content could not be added.</center><hr/>";
                     }
                } else {
                    $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, there was an error uploading your file.</center><hr/>";
                }
            }
        }else{
            $check=mysqli_query($connect, "SELECT * FROM contents WHERE id=$id")or die('Unable to process request!');
            $info=mysqli_fetch_array($check);
            $image1=$info['image'];
        
            //Inserting image 
                $modified=time();
                $insert=mysqli_query($connect, "UPDATE contents SET menu_id='$menu_id', title='$title',summary='$summary',content='$content',image='$image1',image_caption='$image_caption',status='$status',modified='$modified' WHERE id=$id") or die('Unable to process request!');
                if($insert==TRUE){
                $alert="<center class='alert alert-success'><i class='fa fa-check-circle'></i> Content has been Updated.</center><hr/>";
                header('Refresh:2; url=./content.php');
               } else {
                $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> Sorry, there was an error uploading your file.</center><hr/>";
            }

        }
}
 ?>