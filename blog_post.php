<?php include 'function/db.php';
GLOBAL $display;  
$read=read();
if (isset($_GET['id'])){
  $id=$_GET['id'];
  $check=mysqli_query($connect, "SELECT * FROM views WHERE ip_address='$read' AND blog_id='$id'")or die("Unable to process request check");
  if (mysqli_num_rows($check)==0) {
      $modified=time();
      $insert=mysqli_query($connect, "INSERT INTO views (id,ip_address,blog_id,created,modified) VALUES('','$read','$id','$modified', '$modified') ")or die("Unable to process request insert");
      if($insert==TRUE){
      $update=mysqli_query($connect,"UPDATE blogs SET view_count=view_count+1, modified='$modified' WHERE id=$id")or die("Unable to process request update");
      }
  }
}
$t=mysqli_query($connect, "SELECT * FROM blogs WHERE id=$id")or die("Unable to process request blog");
$t2=mysqli_fetch_assoc($t);
$title_main=$t2['title'];
$pic=$t2['image'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="author" content="kedstudios.com" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="referrer" content="origin" />
<link rel="canonical" href="https://joshseas.com/blog_post?id=<?php echo $id ?>" />
<meta name="robots" content="all" />
<meta name="keywords" content="Josh Seas Photography <?php echo $title_main ?> ghanaphotography ghana @joshseasgh joshseas josh-seasgh joshseasgh josh-seas Josh-Seas" />
<meta name="description" content="<?php echo $t2['summary']; ?> ..." />
<meta name="dcterms.Identifier" content="https://joshseas.com/blog_post?id=<?php echo $id ?>" />
<meta name="dcterms.Format" content="text/html" />
<meta name="dcterms.Relation" content="Josh-Seas" />
<meta name="dcterms.Language" content="en" />
<meta name="dcterms.Publisher" content="Josh-Seas" />
<meta name="dcterms.Type" content="text/html" />
<meta name="dcterms.Coverage" content="https://joshseas.com/blog_post?id=<?php echo $id ?>" />
<meta name="dcterms.Rights" content="Copyright &copy;<?php echo date('Y', time()); ?> Joshseas." />
<meta name="dcterms.Title" content="Joshseas | <?php echo $t2['title'];?>" />
<meta name="dcterms.Subject" content="Josh Seas Photography <?php echo $title_main ?> ghanaphotography ghana @joshseasgh joshseas josh-seasgh joshseasgh josh-seas Josh-Seas" />
<meta name="dcterms.Contributor" content="Josh-Seas" />
<meta name="dcterms.Date" content="<?php echo date('Y-m-d', time()) ?>" />
<meta name="dcterms.Description" content="<?php echo $t2['summary']; ?> ..." />
<meta name="dcterms.Creator" content="Josh-Seas" />
<meta property="fb:profile_id" content="joshseasgh" />
<meta property="fb:app_id" content="joshseasgh" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="en_us" />
<meta property="og:url" content="https://joshseas.com/blog_post?id=<?php echo $id ?>" />
<meta property="og:title" content="Josh-Seas | <?php echo $t2['title'];?>" />
<meta property="og:description" content="<?php echo $t2['summary']; ?> ..." />
<meta property="og:image" content="https://www.joshseas.com/cms/<?php echo $t2['image']?>" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="862" />
<meta property="og:image:height" content="252" />
<meta property="og:site_name" content="Josh-Seas" />
<meta property="og:see_also" content="https://twitter.com/joshseasgh" />
<meta property="og:see_also" content="https://www.facebook.com/joshseasgh" />
<meta property="og:see_also" content="https://plus.google.com/joshseasgh" />
<meta property="og:see_also" content="https://www.instagram.com/joshseasgh" />
<meta property="og:see_also" content="https://www.pinterest.com/joshseasgh" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@joshseasgh" />
<meta name="twitter:title" content="Josh-Seas | <?php echo $t2['title'];?>" />
<meta name="twitter:description" content="<?php echo $t2['summary']; ?> ..." />
<meta name="twitter:image" content="https://www.joshseas.com/cms/<?php echo $pic ?>" />
<link rel="publisher" href="https://joshseas.com/blog_post?id=<?php echo $id ?>" />
<meta name="google-site-verification" content="google48533112b47b86e4.html" />
	<meta http-equiv="cleartype" content="on">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
<title>Josh-Seas | <?php echo $title_main ?> </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"  href="css/font-awesome.min.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="css/normalize.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="css/hamburgers.min.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="css/bootstrap.min.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="css/loader.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="css/style.min.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/mystyle.css" media="screen">
<link rel="stylesheet"  href="css/skin-skyblue.min.css" type="text/css" media="screen"/>
<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body class="home blog" id='demo' style="background: white">
<div id="loader-wrapper">
			<div id="loader"></div>
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>

		</div>
<div class="totopshow">
<a href="#" class="back-to-top"><img alt="Back to Top" src="images/gototop0.png"/></a>
</div>
<?php include 'function/header.php'; ?>    
<div id="page" class="site">
      <!-- content -->
      <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <?php 
                
                  if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                      $check=mysqli_query($connect, "SELECT * FROM blogs WHERE id=$id")or die('Unable to process request');
                        if(mysqli_num_rows($check)>0 || !empty($check)){ 
                          foreach ($check as $info ) {
                                        ?>
                  <article class="post format-standard hentry">
                    <header class="entry-header">
                      <div class="heading-title">
                        <h1 class="entry-title" style="font-family: 'Montserrat' "><?php echo $info['title'] ?></h1>
                      </div>
                      <div class="entry-meta">
                        <span class="posted-on">Posted on <?php echo date('M d, Y', ($info['created'])) ?></span>
                        <span class="reading-estimation"><?php echo ago($info['created']) ?></span>
                        <span class="meta-viewer"><?php if($info['view_count']<=1){ echo "$info[view_count] View"; }else{echo "$info[view_count] Views";} ?></span>
                        <span class="reading-estimation"><i class='count2'></i></span>
                      </div><!-- .entry-meta -->
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                      <p><img src="cms/<?php echo $info['image'] ?>" alt="<?php echo $info['image_caption'] ?>" width='1200' height='800'></p>
                      <p style="font-family: 'Montserrat'; letter-spacing: 1.2px; word-spacing: 2px;line-height: 500%"><?php echo $info['content'] ?></p>
                    </div><!-- .entry-content -->
                    
                    <footer class="entry-footer">
                      <span class="cat-links">Posted in <a href="https://joshseas.com">Josh Seas</a></span> <?php if(!empty($info['tags'])){ ?><span class="tags-links">Tags <a href="#"><?php echo $info['tags']?></a></span> <?php }else{}; ?>
                      <div class="container">
                      <div class="row">
                        <div class="col-md-10">
                          <a data-mobile-iframe="true" href="http://www.facebook.com/sharer.php?u=https://joshseas.com/blog_post?id=<?php echo $info['id'] ?>" target="_blank"><div class="facebook-hover social-slide"></div></a>
                          <a data-mobile-iframe="true" href="https://twitter.com/share?url=https://joshseas.com/blog_post?id=<?php echo $info['id'] ?>&amp;text=<?php echo $info['summary']?>&amp;hashtags=Joshseasgh Photography" target="_blank"><div class="twitter-hover social-slide"></div></a>
                          <a data-mobile-iframe="true" href="https://intstagram.com/joshseasgh" target='_blank'><div class="instagram-hover social-slide"></div></a>
                          <a data-mobile-iframe="true" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://joshseas.com/blog_post?id=<?php echo $info['id'] ?>" target='_blank'><div class="linkedin-hover social-slide"></div></a>
                          <a data-mobile-iframe="true" href="https://plus.google.com/share?url=https://joshseas.com/blog_post?id=<?php echo $info['id'] ?>" target='_blank'><div class="google-hover social-slide"></div></a>
                        </div>
                      </div>
                    </div>
                    </footer><!-- .entry-footer -->

                    <!-- Selecting all comments for current post -->
                    
                     <input type="hidden" id="idValue" value="<?php echo $id ?>"></input>
                                    <div class="blog-comments container" style="background: white; padding-bottom: 40px">
                                        <h3 class="sbold blog-comments-title"><div class='count'></div></h3>
                                      <div id=comments>
                                        
                                      </div>
                                      <!-- <button id='more'> Show More Comment</button> -->
                                      </div>

                  <div id="comments" class="comments-area">
                    <div id="respond" class="comment-respond">
                      <h3 id="reply-title" class="comment-reply-title">Leave a Comment </h3>
                      <form method="post" id="commentform" action="comment.php"  class="form-horizontal comment-form" novalidate="">
                      <div class="loader"></div>
                        <div class="alert"></div>
                        <div class="form-group">
                          <input type="hidden" id="blog_id" name="blog_id" value="<?php echo $id ?>"></input>
                          <div class="col-sm-12">
                            <input type="text" name="name" id="name" class="form-control" placeholder="*Name :" aria-required="true">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <input type="email" name="email" id="email" class="form-control" placeholder="*Email :" aria-required="true">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <textarea id="comment" class="form-control" rows="6" name="comment" aria-required="true" placeholder=" Your Message : "></textarea>
                          </div>
                        </div>
                        <p class="form-submit">
                          <input name="submit" type="submit" id="submit" class="btn btn-danish btn-lg btn-block" value="Submit">
                        </p>
                      </form><!-- #commentform -->
                    </div><!-- #respond -->
                  </div><!-- #comments -->
                  </article><!-- .post -->
<?php 
// ------------------------ Previous Navigation ------------------------
$pres=mysqli_query($connect, "SELECT * FROM blogs WHERE id<$id ORDER BY id DESC")or die("Unable to process request");
$pre=mysqli_fetch_assoc($pres);
// ------------------------ Next Navigation ------------------------
$nexts=mysqli_query($connect, "SELECT * FROM blogs WHERE id>$id ORDER BY id ASC")or die("Unable to process request");
$next=mysqli_fetch_assoc($nexts);
?>
                  <nav class="navigation post-navigation" role="navigation">
                    <h2 class="screen-reader-text">Post navigation</h2>
                    <div class="nav-links">
                      <?php if(!empty($pre)){?>
                      <div class="nav-previous"><a href="blog_post?id=<?php echo $pre['id'] ?>" rel="prev"><?php echo $pre['title'] ?></a></div><?php }if(!empty($next)){?><div class="nav-next"><a href="blog_post?id=<?php echo $next['id'] ?>" rel="next"><?php echo $next['title'] ?></a></div>
                      <?php } ?>
                    </div>
                  </nav><!-- .navigation -->
    <?php }} else{ ?> 
    <br>
    <br>
                <div class='heading-title'>
                        <h1 class='entry-title' style="font-family: 'Montserrat'; font-size: 40px; text-align: center; letter-spacing: 2px">Sorry!!!</br>
                        The Post you are looking for cannot be found or has be deleted from the server</h1>
                      </div>
                      <br>
                      <br>
                    <?php } }else{?>

    <br>
    <br>
                <div class='heading-title'>
                        <h1 class='entry-title' style="font-family: 'Montserrat'; font-size: 40px; text-align: center; ">Sorry!!!</br>
                        The Post you are looking for cannot be found or has be deleted from the server</h1>
                      </div>
                      <br>
                      <br><?php } ?>
<?php $recents=mysqli_query($connect, "SELECT * FROM blogs ORDER BY rand() LIMIT 4")or die("Unable to process request");
  if (!empty($recents)) { ?>
   
                  <div class="related-posts">
                    <h3>You may also like</h3>
                    <div class="row">
                     <?php  foreach($recents as $recent){?>
                      <div class="col-md-3 col-sm-6">
                        <div class="post-container">
                          <div class="post-thumbnail">
                            <a href="blog_post?id=<?php echo $recent['id'] ?>"><img src="cms/<?php echo $recent['image'] ?>" alt="<?php echo $recent['title'] ?>"></a>
                          </div><!-- .post-thumbnail -->
                          <span class="post-meta"><a href="blog_post?id=<?php echo $recent['id'] ?>"><?php echo date('M d, Y', ($recent['created'])) ?></a></span>
                          <h2 class="post-title"><a href="blog_post?id=<?php echo $recent['id'] ?>"><?php echo $recent['title'] ?></a></h2>
                        </div><!-- .post-container -->
                      </div><!-- .col-md-3 -->
                      <?php } ?>
                    </div><!-- .row -->
                  </div><!-- .related-posts -->
<?php } ?>
                </div><!-- .col-md-8 -->
<?php $populars=mysqli_query($connect, "SELECT * FROM blogs ORDER BY view_count LIMIT 3")or die("Unable to process request"); ?>

                <div class="col-md-4"><?php if(!empty($populars)){?>
                  <section class="widget danish_widget_popular_entries">
                    <h2 class="widget-title">Popular Posts</h2>
                    <ul>
                      <?php foreach ($populars as $popular) {?>
                      <li>
                        <div class="popular-entry-container">
                          <div class="entry-image">
                            <img src="cms/<?php echo $popular['image'] ?>" alt="<?php echo $popular['title'] ?>" style="max-height:150px; max-width:150px">
                          </div><!-- .entry-image -->
                          <div class="entry-content">
                            <h4 class="entry-title">
                              <a href="blog_post?id=<?php echo $popular['id'] ?>" rel="bookmark"><?php echo $popular['title'] ?></a>
                            </h4>
                            <span class="entry-category"><a href="blog_post?id=<?php echo $popular['id'] ?>"><?php echo ago($popular['created']) ?></a></span>
                            <span class="entry-datetime"><?php echo date('M d, Y', ($popular['created'])) ?></span>
                          </div><!-- .entry-content -->
                        </div><!-- .popular-entry-container -->
                      </li><?php } ?>
                    </ul>
                  </section><!-- .danish_widget_popular_entries --><?php } ?>
<?php $posts=mysqli_query($connect, "SELECT * FROM blogs ORDER BY created DESC LIMIT 4")or die("Unable to process request"); ?>
                  <section class="widget widget_recent_entries">    
                    <h2 class="widget-title">Recent Posts</h2>
                    <?php if(mysqli_num_rows($posts)>0){ ?>
                    <ul>
                      <?php foreach($posts as $post){ ?>
                      <li>
                        <a href="blog_post?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a>
                        <span class="post-date"><?php echo date('M d, Y', ($post['created'])) ?></span>
                      </li><?php } ?>
                    </ul><?php }else{echo "No post has be published";} ?>
                  </section><!-- .widget_recent_entries -->
                    <!-- Script for Recent comments Start-->
        <?php  
                $recents=mysqli_query($connect, "SELECT *  FROM comments LEFT JOIN blogs ON (comments.blog_id = blogs.id) ORDER BY comments.created DESC LIMIT 7")or die('unable to process request');
        ?>
                    <!-- Script for Recent comments Stop-->
                  <section class="widget widget_recent_comments">
                    <h2 class="widget-title">Recent Comments</h2>
                    <?php if(mysqli_num_rows($recents)>0){ ?>
                    <ul id="recentcomments">
                      <?php foreach($recents as $recent){ ?>
                      <li>
                        <span class="comment-author-link"><?php echo $recent['name'] ?> commented</span> 
                        on <a href="blog_post?id=<?php echo $recent['blog_id']?>"><?php echo $recent['title'] ?></a>
                      </li>
                      <?php } ?>
                    </ul>
                    <?php }else{echo "No commennt has be posted ";} ?>
                  </section><!-- .widget_recent_comments -->

                </div><!-- .col-md-4 -->
              </div><!-- .row -->
            </div><!-- .container -->

          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- #content -->
    </div><!-- #page -->

<?php include 'function/footer.php'; ?>

<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle2.swipe.min.js"></script>
<script type="text/javascript" src="js/modernizr-2.8.3.min.js"></script>
<script type="text/javascript" src="js/respond.min.js"></script>
<script type="text/javascript" src="js/scrollreveal.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/Customjs.js"></script>
<script type="text/javascript" src="js/totop.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    comment();
    count();
    count2();
    // Printing out the comme
    function comment(){
    var idValue = $("#idValue").val();
      setInterval(function(){
        $.ajax({
          url: "ajax.php",
          type: "POST",
          async: false,
          data: {
            "idValue":idValue,
            "display":1
          },
          success: function(d){
            $("#comments").html(d);
          }
        })
      // $("#comments").load("ajax.php", {
      //   id: idnew,
      // },3000);
      },3000);
    }
// counting the number of comments
    function count(){
    var idValue = $("#idValue").val();
      setInterval(function(){
        $.ajax({
          url: "count.php",
          type: "POST",
          async: false,
          data: {
            "idValue":idValue,
            "count":1
          },
          success: function(d){
            $(".count").html(d);
          }
        })
      // $("#comments").load("ajax.php", {
      //   id: idnew,
      // },3000);
      },3000);
    }

    // counting the number of comments
    function count2(){
    var idValue = $("#idValue").val();
      setInterval(function(){
        $.ajax({
          url: "count2.php",
          type: "POST",
          async: false,
          data: {
            "idValue":idValue,
            "count":1
          },
          success: function(d){
            $(".count2").html(d);
          }
        })
      // $("#comments").load("ajax.php", {
      //   id: idnew,
      // },3000);
      },3000);
    }

/*Submitting Visistor Comment*/
   $("form").submit(function(event){
        // Stop form from submitting normally
        event.preventDefault();
        $('.loader').fadeIn(1000).html('<img id="loader-img" alt="" src="loading.gif" width="80" height="80" align="center" style="position: absolute;left: 50%;margin: -50px 0px 0px -50px;"/>');
        // Get action URL

        /* Serialize the submitted form control values to be sent to the web server with the request */
        var blog_id = $("#blog_id").val();
        var name = $("#name").val();
        var email = $("#email").val();
        var comment = $("#comment").val();
        
        // Send the form data using post
        $.ajax({ 
          
            url: "comment.php",
            type: "POST",
            async: false,
            data: {
           "blog_id": blog_id,
            "name": name,
            "email": email,
            "comment": comment
          }
          , success: function(data){
            // Display the returned data in browser
            $(".loader").fadeOut(1000);
            setTimeout(function (){

            $(".alert").html(data);
            $("#name").val('');
            $("#email").val('');
            $("#comment").val('');
            }, 1000);
        },
            complete:function(){
            $('body, html').animate({scrollTop:$('.alert').offset().top}, 'slow');
        }
    });
   });

   $("#subscribe").submit(function(event){
          // Stop form from submitting normally
            event.preventDefault();
            
            // Get action URL

            /* Serialize the submitted form control values to be sent to the web server with the request */
            var email = $("#email").val();
            
            // Send the form data using post
            $.ajax({ 
              
                url: "subscribe.php",
                type: "POST",
                async: false,
                data: {
                "email": email
              }
              , success: function(data){
                // Display the returned data in browser
                $(".message").html(data);
                $("#email").val('');
            }
        });
     });

  });
</script>
<script type="text/javascript">
WebFontConfig = {
google: { families: [ 'Montserrat','Montserrat:700','Varela+Round','Droid+Serif'] }
};
(function() {
var wf = document.createElement('script');
wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.0.31/webfont.js';
wf.type = 'text/javascript';
wf.async = 'true';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(wf, s);
})();
</script>
</body>
</html>
