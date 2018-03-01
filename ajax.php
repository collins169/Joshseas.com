<?php 
include 'function/db.php';
if(isset($_POST['display'])){

		$id=htmlspecialchars($_POST['idValue'],ENT_QUOTES);
		$id=mysqli_real_escape_string($connect,$_POST['idValue']);

		$comments=mysqli_query($connect, "SELECT * FROM comments WHERE blog_id=$id")or die('Unable to process request');
		if(mysqli_num_rows($comments)>0){
		while ($comment=mysqli_fetch_array($comments)){
			?>
			 <div class="c-comment-list">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#"><?php echo $comment['name']; ?></a> on
                                                        <span class="c-date"><?php echo date('M d Y, g:iA', ($comment['created'])) ?></span>
                                                    </h4><?php echo $comment['comment']; ?></div>
                                            </div>
                                        </div><br>
                                        <?php
		}
	}else{?> <div class="c-comment-list">
                                            <div class="media">
                                                <div class="media-body">
                                                  No Comment has been posted yet!
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <?php
                                   
	}
	exit();
}