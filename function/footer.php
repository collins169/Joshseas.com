<div class="row" style="margin-top: 50px">
    	<div class="col-md-12">
    		  <div class="search-text"> 
       <div class="container">
         <div class="row text-center">
           <div class="form">
               <h4>SIGN UP TO OUR NEWSLETTER</h4>
                <form id="subscribe" class="form-search form-horizontal" method="post">
                	<div class="message"  ></div>
                    <input type="email" class="input-search" name="email" id="email" placeholder="Email Address" required>
                    <input type="submit" id='submit' name="submit" class="btn-search" value="SUBSCRIBE">
                </form>
            </div>
          </div>         
       </div>     
	</div>
    <footer class="footer">				
		<div class="container">
			<div class="row">
				<div class="col-md-4 m-b-30">
					<?php $check2=mysqli_query($connect, "SELECT * FROM sub_menus ORDER BY title ASC")or die("Unable to retrieve Sub Menu");
					if(!empty($check2)){
					 ?>
					<div class="footer-title m-t-5 m-b-20 p-b-8">
						Services
					</div>	
					<div class="footer-links">
						<?php foreach($check2 as $service){ ?>
						<a href="<?php echo $service['path'] ?>">
							<?php echo $service['title'] ?>
						</a>
						<?php } } ?>
					</div>
				</div>
				<div class="col-md-4 m-b-30">
					<div class="footer-title m-t-5 m-b-20 p-b-8">
						Quick Links
					</div>	
					<div class="footer-links">
						<a href="home.php">
							Home
						</a>
						<?php $check3=mysqli_query($connect, "SELECT * FROM navigations ORDER BY id ASC LIMIT 4")or die("Unable to retrieve Navigation"); 
							if(!empty($check3)){
								foreach($check3 as $link){
						?>
						<a href="<?php echo $link['path'] ?>">
							<?php echo $link['title'] ?>
						</a>
						<?php }} ?>
					</div>
				</div>
				<div class="col-md-4 m-b-30">
					<div class="footer-title m-t-5 m-b-20 p-b-8">
						Contact
					</div>	
					
					<div class="footer-links">
                           <a href="tel:<?php echo $settings['phone'] ?>" target="_top"><i class="fa fa-phone" aria-hidden="true" style="margin-right: 5px;"></i> <?php echo $settings['phone'] ?></a>
                           <p style="font-family: 'Montserrat'; border-bottom: 0px; padding-bottom: 1px"><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 6px;"></i> <?php echo $settings['location'] ?></p><p><span style="border-top: 0px;  padding-top: 1px; margin-left: 17px;"><?php echo $settings['country'] ?></span></p>
                           <a href="mailto:<?php echo $settings['email_address'] ?>" target="_top"><i class="fa fa-envelope" aria-hidden="true" style="margin-right: 5px;"></i> <?php echo $settings['email_address'] ?></a>
					</div>
					<br>
					<div class="footer-social-links m-t-30">
						<li>
							<?php if(!empty($social_link)){ ?>
							<a href="<?php echo $settings['facebook_url'] ?>" target='_blank'>
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
							<a href="<?php echo $settings['instagram_url'] ?>" target='_blank'>
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
							<a href="<?php echo $settings['twitter_url'] ?>" target='_blank'>
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
							<a href="<?php echo $settings['googleplus_url'] ?>" target='_blank'>
								<i class="fa fa-pinterest" aria-hidden="true"></i>
							</a>
							<?php } ?>
						</li>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="footer-bottom">
		Copyright &copy;<?php echo date('Y', time()) ?> All Rights Reserved, Josh-Seas | Created by <a href="http://www.facebook.com/kosicollins" style="color: skyblue;">Kedstudios</a>
	</div>
    	</div>
	</div>