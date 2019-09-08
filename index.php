<?php 
 get_header();
 ?>

 	<div class="english" id="english">
		<div class="container">
			<div class="left-container">
				<?php 
					while (have_posts()) {
 						the_post();
 						$post_id = get_the_ID();
 						$title = get_the_title();
 						//wp_trim_words( get_the_content(),18 )
 						$content = get_the_content();
 						$postUrl = get_the_permalink();
  						$postImg = get_the_post_thumbnail_url($post_id, 'pf-medium');

				?>

				<!-- the loop start here -->
				<div class="index-content-box">

					<div class="row block-head">
						<div class="col-md-12">
							<h1 class="content-head"><?php echo $title; ?></h1>
						</div>
					</div>

					<?php
						$categories= get_the_category();
						if($categories){
							$color_id = "category_" . $categories[0]->term_id;
			                $color = get_option($color_id);
			                if($color){
			                  $bgcolor = $color['color'];
			                }else{
			                   $bgcolor = '#c8d6e5';
			                }
					 ?>
					<div class="row index-cat">
						<div class="col-md-12">
							<a href="#" style="background:<?php echo $bgcolor; ?>;"><?php echo $categories[0]->cat_name; ?></a>
						</div>
					</div>
					<?php 
						}
					?>

					

					<div class="row block-content">
						<div class="col-md-4">
							<img src="<?php echo $postImg; ?>" class="img-fluid" alt="Responsive image">
						</div>
						<div class="col-md-8">
							<p class="content-inside"><?php echo wp_trim_words( $content, 32 ) ?></p><!-- 60 charecter -->
							<p class="tag"> <a href="#" class="index-author">Sarasij Roy</a> | <span class="index-date">Spetember 5, 2019</span></p>
						</div>
					</div>

					<div class="row continue-button">
						<div class="col-md-4"></div>
						<div class="col-md-8 ">
							<a href="<?php echo $postUrl; ?>" class="ws-btn-span btn-blue">Continue Reading &rarr; </a>
						</div>
					</div>
				</div>
				<!-- End of loop -->
				<?php } ?>


				




			</div>
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

						$portflio_id = get_the_ID();
						$portfolio_name = get_the_title();
						$portfolio_content = get_the_content();
 						$portfolioUrl = get_the_permalink();
  						$portfolioImg = get_the_post_thumbnail_url($portflio_id, 'pf-small');
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
	</div>
	<!-- english -->

	<div class="bengali" id="bengali"></div>





 	<?php
 
 get_footer();