<?php 
session_start();
GLOBAL $alert;
  // $connect= @mysqli_connect('localhost','root','','joshseas') or die('Could Not Connect to the Database, Please Contact the Administrator of KED Systems.');
	$connect= @mysqli_connect('localhost','root','','joshseas') or die('Could Not Connect to the Database, Please Contact the Administrator of KED Systems.');

	//---------------------------------------------------------------------------------------------
	$check=mysqli_query($connect, "SELECT * FROM contents WHERE menu_id=1 and id=4")or die('unable to process request'); 
						if(mysqli_num_rows($check)>0){ 
							$data=mysqli_fetch_array($check);};

	function ago($i){
      	$m = time()-$i; $o='just now';
      	$t = array('year'=>31556926,'month'=>2629744,'week'=>604800,
  		'day'=>86400,'hour'=>3600,'minute'=>60,'second'=>1);
      	foreach($t as $u=>$s){
          	if($s<=$m){$v=floor($m/$s); $o="$v $u".($v==1?'':'s').' ago'; break;}
      	}
      		return $o;
  	}

    function read() { 
      $client = @$_SERVER['HTTP_CLIENT_IP']; 
      $forward = @$_SERVER['HTTP_X_FORWARDED_FOR']; 
      return filter_var($client, FILTER_VALIDATE_IP) ? 
      $client : filter_var($forward, FILTER_VALIDATE_IP) ? 
      $forward : $_SERVER['REMOTE_ADDR']; }

      $_SESSION['view']=$_SERVER['REMOTE_ADDR'];

    $social_link=mysqli_query($connect, "SELECT * FROM settings")or die("Unable to retrieve Settings");
    $settings=mysqli_fetch_assoc($social_link);
      
 ?>
