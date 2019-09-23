<?php 
 get_header();
require get_template_directory(). '/palefire-header.php';

 	$featured_bengali = new WP_Query(array(
                           'post_type' 		=> 'pf_bengali',
                           'tag_slug__in'   => array('Bengali Featured'),
                           'posts_per_page' => 1
                         ));
 	if( $featured_bengali->have_posts() ){
 		while( $featured_bengali->have_posts() ){
 			$featured_bengali->the_post();

 			$f_beng_post_id = get_the_ID();
 			$f_beng_title = get_the_title();
 			$f_beng_content = get_the_content();
			$f_beng_postUrl = get_the_permalink();
			$f_beng_postImg = get_the_post_thumbnail_url($f_beng_post_id, 'pf-large');
			$f_beng_category = get_the_terms($f_beng_post_id, 'bengali_category');
			$f_beng_date = get_the_time('Y-m-d H:i:s');
 ?>
 		<div class="ws-primary-banner" style="background: url(<?php echo $f_beng_postImg; ?>) center/cover no-repeat fixed ;">
          <div class="ws-banner-info">
            <div class="ws-banner-content">
              <h1>Weekly Top</h1>
              <p class="bold"><?php echo $f_beng_title; ?></p>
              <p><?php echo wp_trim_words( $f_beng_content, 50 )  ?></p>
            </div>
            <div class="ws-link">
              <a href="<?php echo $f_beng_postUrl; ?>" class="ws-discover">
                <span></span> 
                আরো পড়ুন
              </a>
              <div class="ws-arrow">
                <span class="one"></span>
                <span class="two"></span>
              </div>
            </div>  
          </div>
        </div>
    <?php 	
		}//while	

	} //if for featured post 
	?>

        <!-- //'tag_slug__in'        => $tags_array, -->
 	
	
		<div class="container">
			<div class="left-container">



				<div class="bengali" id="bengali">
					<?php 

					$all_bengali = new WP_Query(array(
                           'post_type' => 'pf_bengali'
                         ));
					while ($all_bengali->have_posts()) {
 						$all_bengali->the_post();


 						$beng_post_id = get_the_ID();
 						$beng_title = get_the_title();
 						//wp_trim_words( get_the_content(),18 )
 						$beng_content = get_the_content();
 						$beng_postUrl = get_the_permalink();
  						$beng_postImg = get_the_post_thumbnail_url($beng_post_id, 'pf-medium');
  						$beng_category = get_the_terms($beng_post_id, 'bengali_category');
  						$beng_date = get_the_time('Y-m-d H:i:s');

  						$guest_author_check = get_post_meta( $beng_post_id,"bengali_guest_author_check",true );
  						$guest_author_name = get_post_meta( $beng_post_id,"bengali_guest_author_name",true );
  						//print_r($beng_category);

				?>

				<!-- the loop start here -->
				<div class="index-content-box">

					<div class="row block-head">
						<div class="col-md-12">
							<h1 class="content-head"><?php echo $beng_title; ?></h1>
						</div>
					</div>

					<?php
						
						if($beng_category){
							$beng_color_id = "beng_category_" . $beng_category[0]->term_id;
			                $beng_color = get_option($beng_color_id);
			                if($beng_color){
			                  $beng_bgcolor = $beng_color['color'];
			                }else{
			                   $beng_bgcolor = '#c8d6e5';
			                }
					 ?>
					<div class="row index-cat">
						<div class="col-md-12">
							<a href="#" style="background:<?php echo $beng_bgcolor; ?>;"><?php echo $beng_category[0]->name; ?></a>
						</div>
					</div>
					<?php 
						}
					?>

					

					<div class="row block-content">
						<div class="col-md-4">
							<img src="<?php echo $beng_postImg; ?>" class="img-fluid" alt="Responsive image">
						</div>
						<div class="col-md-8">
							<p class="content-inside"><?php echo wp_trim_words( $beng_content, 32 ) ?></p><!-- 60 charecter -->


							<p class="tag"> 
								<?php if( $guest_author_check == 1 ){ ?>
								<a href="#" class="index-author">Guest Author </a>
								<?php }else { 	?>
								<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="index-author"><?php echo get_the_author_meta('first_name')." ".get_the_author_meta('last_name'); ?> </a>
								<?php } ?>
								 | <span class="index-date"><?php echo get_gmt_from_date($beng_date,get_option('date_format').', '.get_option('time_format')) ?></span>
								</p>
						</div>
					</div>

					<div class="row continue-button">
						<div class="col-md-4"></div>
						<div class="col-md-8 ">
							<a href="<?php echo $beng_postUrl; ?>" class="ws-btn-span btn-blue">আরো পড়ুন &rarr; </a>
						</div>
					</div>
				</div>
				<!-- End of loop -->
				<?php } 
					wp_reset_postdata();
				?>
					
				</div> <!-- end of bengali -->




			</div> <!-- left-container -->
			<div class="right-container">

				<div class="row ">
					<div class="col-md-12 ml-auto mr-auto">
						<h4 class="right-head">
							<span>Our Projects</span>
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
				<?php 
					$side_posts = new WP_Query(array(
                           'post_type' => 'pf_portfolio',
                           'posts_per_page' => 4
                           
                         ));
					while( $side_posts->have_posts() ){
						$side_posts->the_post();

						$portfolio_id = get_the_ID();
						$portfolio_name = get_the_title();
						$portfolio_content = get_the_content();
 						$portfolioUrl = get_the_permalink();
  						$portfolioImg = get_the_post_thumbnail_url($portfolio_id, 'pf-small');
				?>

				<!-- loop starts here -->
				<a href="<?php echo $portfolioUrl; ?>" class="right-content-box">
					<div class="row ">
						<div class="col-md-4">
							<img class="img-fluid" src="<?php echo $portfolioImg; ?>">
						</div>
						<div class="col-md-8">
							<p><span class="side-portfolio-title"><?php echo $portfolio_name; ?></span>: <?php echo wp_trim_words( $portfolio_content, 10 ) ?> </p>
						</div>
						
					</div>
				</a>
				<?php 
					} 
					wp_reset_postdata();
				?>
				<!-- loop ends here -->

				

			</div>
			<div class="clearfix"></div>
		</div>
	

	





 	<?php
 require get_template_directory(). '/palefire-footer.php';
 get_footer();