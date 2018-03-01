<?php 
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
//Connection to the Database
    // $connect= @mysqli_connect('localhost','root','','joshseas') or die('Could Not Connect to the Database, Please Contact the Administrator of KED Systems.');
$connect= @mysqli_connect('localhost','root','','joshseas') or die('Could Not Connect to the Database, Please Contact the Administrator of KED Systems.');
    if (isset($_SESSION["login_id"]) && isset($_SESSION["time_login_token"])) {
        if(time() > $_SESSION['time_login_token']){
            $lock_username=$_SESSION['locked'];
            header('location:./lock.php');
            exit();
        }
    }else{
        header('location:./functions/logout.php');
        exit();
    }

     $id=$_SESSION['login_id'];
    $check= mysqli_query($connect, "SELECT * FROM users WHERE id=$id")or die("Unable to process request");
    if (mysqli_num_rows($check)>0) {
        $user_info=mysqli_fetch_array($check);
    }
    $firstname=$user_info['first_name'];
    $lastname=$user_info['last_name'];
    $name=$user_info['first_name'] .'&nbsp;'. $user_info['last_name'];
    $role=$user_info['role'];
    $username=$user_info['username'];
    $email=$user_info['email'];
    $profile=$user_info['profile_pic'];

    $sql=mysqli_query($connect,"SELECT COUNT(*) AS COUNT FROM users ")or die("Unable to process request");
    $total=mysqli_fetch_array($sql);

    $sql1=mysqli_query($connect,"SELECT COUNT(*) AS COUNT FROM galleries ")or die("Unable to process request");
    $total1=mysqli_fetch_array($sql1);

    $sql2=mysqli_query($connect,"SELECT COUNT(*) AS COUNT FROM notifications ")or die("Unable to process request");
    $total2=mysqli_fetch_array($sql2);
 ?>
