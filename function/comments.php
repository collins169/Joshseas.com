<?php 
                    $id=$_GET['id'];
                    $comments=mysqli_query($connect, "SELECT * FROM comments WHERE blog_id=$id")or die('Unable to process request');
                    if (mysqli_num_rows($comments)>0) {
                     ?>
                                    <div class="blog-comments container" style="background: white; padding-bottom: 40px">
                                        <h3 class="sbold blog-comments-title">Comments(30)</h3>
                                        <?php foreach ($comments as $comment) {?>
                                        <div class="c-comment-list">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#"><?php echo $comment['name']; ?></a> on
                                                        <span class="c-date"><?php echo date('M d Y, g:iA', ($comment['created'])) ?></span>
                                                    </h4><?php echo $comment['comment']; ?></div>
                                            </div>
                                        </div><?php }; ?>
                                        <?php }else{ echo "No comment";} ?>
                                      </div>
