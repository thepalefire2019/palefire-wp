<?php
	/*
	Template Name: Film Review 
	Template Post Type: pf_bengali
	*/
	get_header();
	require get_template_directory(). '/palefire-header.php';
?>

<?php
get_header();
while( have_posts() ){
	the_post();
	$beng_post_id = get_the_ID();
 	$beng_title = get_the_title();
	//wp_trim_words( get_the_content(),18 )
	$beng_content = get_the_content();
	$beng_postUrl = get_the_permalink();
	$beng_postImg = get_the_post_thumbnail_url($beng_post_id, 'pf-regular');
	$beng_category = get_the_terms($beng_post_id, 'bengali_category');
	if($beng_category){
		$beng_color_id = "beng_category_" . $beng_category[0]->term_id;
		$beng_color = get_option($beng_color_id);
		if($beng_color){
		  $beng_bgcolor = $beng_color['color'];
		}else{
		   $beng_bgcolor = '#c8d6e5';
		}
	}
	$date = get_the_time('Y-m-d H:i:s');
	$author_youtube_url = esc_attr( get_the_author_meta( 'youtube', get_the_author_meta('ID') ));
	$author_twitter_url  = esc_attr( get_the_author_meta( 'twitter', get_the_author_meta('ID') ));
	$author_facebook_url  = esc_attr( get_the_author_meta( 'facebook', get_the_author_meta('ID') ));
	$author_instagram_url  = esc_attr( get_the_author_meta( 'instagram', get_the_author_meta('ID') ));

	$social_add = get_post_meta( $beng_post_id,"social_add",true );
  	$author_facebook = get_post_meta( $beng_post_id,"author_facebook",true );
  	$author_twitter = get_post_meta( $beng_post_id,"author_twitter",true );
  	$author_instagram = get_post_meta( $beng_post_id,"author_instagram",true );
  	$author_youtube = get_post_meta( $beng_post_id,"author_youtube",true );



  $ua = get_post_meta( $beng_post_id,"bengali_ua",true );
  $production = get_post_meta( $beng_post_id,"bengali_production",true );
  $director = get_post_meta( $beng_post_id,"bengali_director",true );
  $release = get_post_meta( $beng_post_id,"bengali_release",true );
  $cast = get_post_meta( $beng_post_id,"bengali_cast",true );
  $rating = get_post_meta( $beng_post_id,"bengali_rating",true );
  $time = get_post_meta( $beng_post_id,"bengali_time",true );
	?>
	
	<div class="container">
		<div class="left-container-single">
			<div class="row top-part">
				<div class="col-md-12">
						<div class="feature-img" >
							<img src="<?php echo $beng_postImg; ?>" class="img-fluid">
						

							<div class="single-head" style="">
								<div class="row index-cat">
									<div class="col-md-12">
										<a href="#" style="background:<?php echo $beng_bgcolor; ?>;"><?php echo $beng_category[0]->name; ?></a>
									</div>
								</div>
								<h1><?php echo $beng_title; ?></h1>
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
			<div class="container">
			<div class="phone-film">
         		<p class="text-left"><span class="bold">বয়েস সীমা   : </span> <?php echo $ua ; ?> </p>
				<p class="text-left"><span class="bold"> রেটিং : </span> <?php echo $rating; ?>/5 </p>
				<p class="text-left"><span class="bold">পরিচালক : </span> <?php echo $director; ?> </p>
				<p class="text-left"><span class="bold">প্রযোজনা  : </span> <?php echo $production; ?> </p>
				<p class="text-left"><span class="bold">অভিনেতা  : </span> <?php echo $cast; ?> </p>
				<p class="text-left"><span class="bold">সময় সীমা  : </span> <?php echo $time; ?> </p>
         	</div>
         	</div>
			<div class="row content-area">
				<div class="col-md-12">
					<div class="content-p-film" >
					<p><?php echo $beng_content;  ?></p>
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
			
				<!-- ends if ....starts else -->
				<div class="row ">
					<div class="col-md-12 ml-auto mr-auto">
						<h4 class="right-head">
							<span>মুভি রিভিউ</span>
						</h4>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-12 ml-auto mr-auto">
						<h4 class="right-head">
							<span><?php echo $beng_title; ?></span>
						</h4>
					</div>	
				</div>
				
				<div class="right-content-box" style="border:1px solid #000">
					<div class="row ">
					<div class="col-md-12">
						<p class="text-center"><span class="bold">বয়েস সীমা   : </span> <?php echo $ua ; ?> </p>
						<p class="text-center"><span class="bold"> রেটিং : </span> <?php echo $rating; ?>/5 </p>
						<p class="text-center"><span class="bold">পরিচালক : </span> <?php echo $director; ?> </p>
						<p class="text-center"><span class="bold">প্রযোজনা  : </span> <?php echo $production; ?> </p>
						<p class="text-center"><span class="bold">অভিনেতা  : </span> <?php echo $cast; ?> </p>
						<p class="text-center"><span class="bold">সময় সীমা  : </span> <?php echo $time; ?> </p>
					</div>
						
					</div>
				</div>
				
				<!-- end else -->


		</div>
		<div class="clearfix"></div>
		<?php 
			$posts_by_author = new WP_Query(array(
                  'author' => get_the_author_meta('ID'),
                  'posts_per_page' => 3,
                  'post__not_in' => array($beng_post_id),
                  'post_type' => 'pf_bengali',
                ));
			if( $posts_by_author->have_posts()){
                ?>
			
            <div class="postbyauthor">
            	<div class="row author-post-header">
                  <div class="col-md-12 col-12">
                     <h1>Related Posts By <?php echo get_the_author_meta('first_name')  ?> </h1>
                     <p></p>
                  </div>
               </div>
				<div class="row">    
                <?php
			while( $posts_by_author->have_posts() ){
				$posts_by_author->the_post();

				$author_post_id = get_the_ID();
				$author_post_title = get_the_title();
				$author_post_content = get_the_content();
				$author_postUrl = get_the_permalink();
				$author_postImg = get_the_post_thumbnail_url($author_post_id, 'pf-medium');

		?>
		
				<div class="col-md-4 col-12 ">
					<a href="#">
						<div class="author-post-box">
							<img src="<?php echo $author_postImg  ?>" class="img-fluid">
							<div class="author-post-box-shade">
								<h1><?php echo $author_post_title; ?></h1>
								<p><?php echo wp_trim_words( $author_post_content, 18 ); ?></p>
								<h6>Read More</h6>
								<div class="clearfix"></div>
							</div>
						</div>
					</a>
				</div>
				<?php  
				 } //while
				}//if
				 wp_reset_postdata();
				 ?>
			</div>
		</div>
	</div>
	<!-- container -->




	<?php
}

get_footer();