<?php 
GLOBAL $alert;
 // $connect= @mysqli_connect('localhost','root','','joshseas') or die('Could Not Connect to the Database, Please Contact the Administrator of KED Systems.');
$connect= @mysqli_connect('localhost','root','','joshseas') or die('Could Not Connect to the Database, Please Contact the Administrator of KED Systems.');
    session_start();
    if (isset($_SESSION["login_id"])=="") {
        header('location: functions/logout.php');
    }
    if(time() < $_SESSION['time_login_token']){
            header('location:dashboard.php');
            exit();
        }
    $username=$_SESSION['locked'];
    $sql=mysqli_query($connect,"SELECT * FROM users WHERE username='$username'")or die("Unable to process request");
    $profile=mysqli_fetch_array($sql);

    if (isset($_POST['submit'])) {
        $username=$_SESSION['locked'];
        $password=md5(mysqli_real_escape_string($connect,$_POST['password']));

        $check=mysqli_query($connect,"SELECT * FROM users WHERE username='$username' AND password='$password'")or die("Unable to process request");
        if(mysqli_num_rows($check)>0){
            $info=mysqli_fetch_array($check);
                    $time=time()+1800;
                    session_start();
                    $_SESSION["locked"]=$info['username'];
                    $_SESSION["login_id"]=$info['id'];
                    $_SESSION["time_login_token"]=$time;
                    header("location: ".$_SESSION['current_page']);
        }else{
            $alert="<center class='alert alert-danger'><i class='fa fa-warning'></i> You are not ".$_SESSION['locked']." !</center><hr/>";
        }
    }

 ?>
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Josh Seas | Lock Screen</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
         <meta content="Josh Joshseas Josh-seas CMS Content Management System" name="description" />
        <meta content="author" name="Collins Onyetube" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="assets/pages/css/lock.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff"> 
    </head>
    <!-- END HEAD -->

    <body class="">
        <div class="page-lock">
            <div class="page-logo">
                <a class="brand" href="index.html">
                    <img src="assets/logo/logo-black.png" alt="logo" /> </a>
            </div>
            <div class="page-body">
                <div class="lock-head"><center style='color:#e8e8e8;'>Locked</center>  </div>

                <div class="lock-body"><?php echo $alert; ?>
                    <div class="pull-left lock-avatar-block">
                        <img src="<?php echo $profile['profile_pic']; ?>" class="lock-avatar" width='120'> </div>
                    <form class="lock-form pull-left" method="post">
                        <h4><?php echo $_SESSION['locked']; ?></h4>
                        <div class="form-group">
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                        <div class="form-actions">
                            <button type="submit" name="submit" class="btn white uppercase">Login</button>
                        </div>
                    </form>
                </div>
                <div class="lock-bottom">
                    <a href="functions/logout.php" style="color: #e8e8e8;">Not <?php echo $_SESSION['locked']; ?>?</a>
                </div>
            </div>
            <div class="page-footer-custom" style="color:#3a3a3a;"> Copyright &copy; Josh Seas 2017 | <a href="#" style="color: #353535;">KED</a> Systems. </div>
        </div>
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/lock.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>