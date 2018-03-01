<div id="navBackground"></div>
	  <header style="
  background-color: white;">
			<div class="innerWidth cf">
	     	<div class="logo"><?php 
						$check=mysqli_query($connect, "SELECT * FROM logos WHERE status=1")or die('unable to process request'); 
						$url='home.php';
						if(mysqli_num_rows($check)>0){  
							foreach($check as $info){ 
								echo "<a href='$url'><img src='cms/$info[logo]' alt='$info[logo_caption]' /></a></div>";}} ?>
				<button class="hamburger hamburger--spin" type="button" id="hamburger">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
    <nav id="topNav">
      <ul>
      	<?php 
      	//------------------------------- Selecting list of Navigation links in the database ---------------//
			$menus=mysqli_query($connect, "SELECT * FROM navigations ORDER BY id ASC")or die('unable to process request');
      	if(!empty($menus)){ foreach($menus as $menu){
                        $menuId = $menu['id'];
       //------------------------------- Selecting list of Submenu Links based on their Navigation links in the database ---------------//
                        $subMenu= mysqli_query($connect, "SELECT * FROM sub_menus WHERE menu_id='$menuId' ORDER BY title ASC")or die('unable to process request');
							?><li>
          <a href="<?php if($menu['path']=='#'){echo $menu['path'];} else { echo $menu['path']; }?>"><?php echo $menu['title']?><span></span><span></span></a>
          <?php 
                            if(!empty($subMenu)){
                        ?><ul>						
                        	<?php foreach ($subMenu as $sub) { ?>
                        	<li class="submenu"><a href="<?php echo $sub['path']; ?>"><?php echo $sub['title']; ?></a></li> 
                            <?php } ?> 
												</ul>
												<?php } ?>
						</a>
        </li>
						
						<?php }}; ?>
        
      </ul>
    </nav>
		<div class="social pull-right top">
			<?php if(!empty($social_link)){ ?>
						<a href="<?php echo $settings['facebook_url'] ?>" target='_blank'><i class="fa fa-facebook"></i></a>
						<a href="<?php echo $settings['instagram_url'] ?>" target='_blank'><i class="fa fa-instagram"></i></a>
						<a href="<?php echo $settings['twitter_url'] ?>" target='_blank'><i class="fa fa-twitter"></i></a>
						<a href="<?php echo $settings['googleplus_url'] ?>" target='_blank'><i class="fa fa-pinterest"></i></a>
						<?php } ?>
					</div>
	</div>
</header>