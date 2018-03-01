<?php 
include 'function/db.php';
if(isset($_POST['count'])){

		$id=htmlspecialchars($_POST['idValue'],ENT_QUOTES);
		$id=mysqli_real_escape_string($connect,$_POST['idValue']);

        $sql=mysqli_query($connect,"SELECT COUNT(*) AS COUNT FROM comments WHERE blog_id=$id ")or die("Unable to process request");
        $total=mysqli_fetch_array($sql);

             if($total['COUNT']<=1){ 
                echo "Comment($total[COUNT])";
                    }else{ 
                        echo "Comments($total[COUNT])";
                    }          
            	exit();
}
