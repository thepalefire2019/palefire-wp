<?php
get_header();
while( have_posts() ){
	the_post();
	$post_id = get_the_ID();
	$title = get_the_title();
	//wp_trim_words( get_the_content(),18 )
	$content = get_the_content();
	$postUrl = get_the_permalink();
	$postImg = get_the_post_thumbnail_url($post_id, 'pf-regular');
	$categories= get_the_category();
	if($categories){
		$color_id = "category_" . $categories[0]->term_id;
	    $color = get_option($color_id);
	    if($color){
	      $bgcolor = $color['color'];
	    }else{
	       $bgcolor = '#c8d6e5';
	    }
	}
	$date = get_the_time('Y-m-d H:i:s');
	$author_youtube_url = esc_attr( get_the_author_meta( 'youtube', get_the_author_meta('ID') ));
	$author_twitter_url  = esc_attr( get_the_author_meta( 'twitter', get_the_author_meta('ID') ));
	$author_facebook_url  = esc_attr( get_the_author_meta( 'facebook', get_the_author_meta('ID') ));
	$author_instagram_url  = esc_attr( get_the_author_meta( 'instagram', get_the_author_meta('ID') ));

	$social_add = get_post_meta( $post_id,"social_add",true );
  	$author_facebook = get_post_meta( $post_id,"author_facebook",true );
  	$author_twitter = get_post_meta( $post_id,"author_twitter",true );
  	$author_instagram = get_post_meta( $post_id,"author_instagram",true );
  	$author_youtube = get_post_meta( $post_id,"author_youtube",true );
	?>
	
	<div class="container">
		<div class="left-container-single">
			<div class="row top-part">
				<div class="col-md-12">
						<div class="feature-img" >
							<img src="<?php echo $postImg; ?>" class="img-fluid">
						

							<div class="single-head" >
								<div class="row index-cat">
									<div class="col-md-12">
										<a href="#" style="background:<?php echo $bgcolor; ?>;"><?php echo $categories[0]->cat_name; ?></a>
									</div>
								</div>
								<h1><?php echo $title; ?></h1>
									<div class="author-img">
				                		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
					                		<?php echo get_avatar(get_the_author_meta('ID')); ?>
					              		</a>
					             	</div>
					             	<div class="author-name">
					             		<h5><?php echo get_the_author_meta('first_name')." ".get_the_author_meta('last_name'); ?> </h5>
					             	</div>
					             	<div class="content-date">
					             		<p><?php echo get_gmt_from_date($date,get_option('date_format').', '.get_option('time_format')) ?></p>
					             	</div>
					             	<div class="clearfix"></div>
							</div>
						</div>
				</div>
			</div>

			<div class="row content-area">
				<div class="col-md-12">
					<div class="content-p" >
					<p><?php echo $content;  ?></p>
				</div>
				</div>
			</div>
			
			<div class="single-content-bottom">
				<?php if(is_active_sidebar('content_bottom')) :?>
            	<?php dynamic_sidebar('content_bottom'); ?>
            	<?php endif; ?>
			</div>
			
		</div>
		<!-- left-container-single -->
		<div class="right-container-single">
			<!-- starts if -->
			<?php if( $social_add == 1 ){ ?>
			<div class="row ">
					<div class="col-md-12 ml-auto mr-auto">
						<h4 class="right-head">
							<span>Follow <?php echo get_the_author_meta('first_name') ?> On</span>
						</h4>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-12 ml-auto mr-auto">
						<h4 class="right-head">
							<span></span>
						</h4>
					</div>	
				</div>

				<?php if( $author_facebook == 1 ){ ?>

				<a href="<?php echo $author_facebook_url; ?>" class="right-content-box">
					<div class="row ">
						<div class="col-md-4">
							<img class="img-fluid" src="<?php echo get_theme_file_uri('img/fb2.png'); ?>">
						</div>
						<div class="col-md-8">
							<p><span class="side-portfolio-title">Click Here!</span>: <br>Folow my work on Facebook. </p>
						</div>
						
					</div>
				</a>

				<?php }
						if( $author_twitter == 1 ){
				 ?>

				 <a href="<?php echo $author_twitter_url; ?>" class="right-content-box">
					<div class="row ">
						<div class="col-md-4">
							<img class="img-fluid" src="<?php echo get_theme_file_uri('img/twit.png'); ?>">
						</div>
						<div class="col-md-8">
							<p><span class="side-portfolio-title">Click Here!</span>: <br>Folow my work on Twitter. </p>
						</div>
						
					</div>
				</a>

				<?php } 
						if( $author_instagram == 1 ){
				?>
				<a href="<?php echo $author_instagram_url; ?>" class="right-content-box">
					<div class="row ">
						<div class="col-md-4">
							<img class="img-fluid" src="<?php echo get_theme_file_uri('img/insta.png'); ?>">
						</div>
						<div class="col-md-8">
							<p><span class="side-portfolio-title">Click Here!</span>: <br>Folow my work on Instagram. </p>
						</div>
						
					</div>
				</a>

				<?php } 
						if( $author_youtube == 1 ){
				?>
				<a href="<?php echo $author_youtube_url; ?>" class="right-content-box">
					<div class="row ">
						<div class="col-md-4">
							<img class="img-fluid" src="<?php echo get_theme_file_uri('img/youtube.png'); ?>">
						</div>
						<div class="col-md-8">
							<p><span class="side-portfolio-title">Click Here!</span>: <br>Follow my channel in Youtube. </p>
						</div>
						
					</div>
				</a>
			<?php } ?>
				<?php }else{ 
						 $all_services = new WP_Query(array(
                           'post_type' => 'pf_services',
                           'posts_per_page' => 6
                           
                         ));

					?>
				<!-- ends if ....starts else -->
				<div class="row ">
					<div class="col-md-12 ml-auto mr-auto">
						<h4 class="right-head">
							<span>Our services</span>
						</h4>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-12 ml-auto mr-auto">
						<h4 class="right-head">
							<span></span>
						</h4>
					</div>	
				</div>
				<?php while( $all_services->have_posts() ){ 
						$all_services->the_post();
						$services_id = get_the_ID();
						$services_name = get_the_title();
						$services_content = get_the_content();
 						$servicesUrl = get_the_permalink();
  						$servicesImg = get_the_post_thumbnail_url($services_id, 'pf-small');
				?>
				<a href="<?php echo $servicesUrl ; ?>" class="right-content-box">
					<div class="row ">
						<div class="col-md-4">
							<img class="img-fluid" src="<?php echo $servicesImg; ?>">
						</div>
						<div class="col-md-8">
							<p><span class="side-portfolio-title"><?php echo $services_name; ?></span>: <?php  echo wp_trim_words( $services_content, 10 ) ;?> </p>
						</div>
						
					</div>
				</a>
				<?php
					}//while loop
					wp_reset_postdata();
				 } //else?>
				<!-- end else -->


		</div>
		<div class="clearfix"></div>
	</div>




	<?php
}

get_footer();