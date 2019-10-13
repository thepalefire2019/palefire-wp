<?php 
get_header();
?>
	<div class="bk-parent-container">
		<div class="bk-float-box">
			<img class="bk-float-img "src="<?php echo get_theme_file_uri('img/float.png'); ?>">
			
		</div>
		<div class="bk-discover">
			<a href="<?php echo site_url('all-genres'); ?>">
				<h6>Discover</h6>
				<h5>&darr;</h5>
			</a>
		</div>
		
		
		<div class="bk-content-box">
			<p class="bk-content-para" >Palefire Books is created by <a href="http://thepalefire.com/"><span style="color:#a86a2f"> THEPALEFIRE.COM</span></a>, where our aim is to make rare books affordable. The desire behind Palefire Books is to give access to those rare and beautiful people who still sit by the windows on rainy days, and read. </p>
		</div>
		<div class="bk-side-bar">
			<div class="bk-btn-menu">
				<span class="bk-menu-toggle-bar-1"></span>
				<span class="bk-menu-toggle-bar-2"></span>
			</div>
		</div>



		<div class="bk-full-screen-menu">

			<div class="bk-btn-menu-close">
				<img class="small-logo-img" src="<?php echo get_theme_file_uri('img/float.png'); ?>">

				<span class="bk-menu-toggle-bar-cls-1"></span>
				<span class="bk-menu-toggle-bar-cls-2"></span>
			</div>
			<div class="bk-border-menu-left">
				<ul>
					<a href="<?php echo site_url(); ?>"><li>Home</li></a>
					<a href="<?php echo site_url('blog'); ?>"><li>Blog</li></a>
					<a href="<?php echo site_url('/palefire-software'); ?>"><li>Palefire Software</li></a>
					<a href="<?php echo site_url('/about-us'); ?>"><li>About Us</li></a>
				</ul>
			</div>
			<div class="bk-border-menu-right">
				<a href="<?php  echo site_url('all-genres');  ?>"><h2> Continue to palefire books </h2></a>
			</div>
		</div>
	</div>
<?php
get_footer();
?>