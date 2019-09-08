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
	?>

	<div class="container">
		<div class="left-container-single">
			<div class="row top-part">
				<div class="col-md-12">
					<div class="feature-img">
						<img src="<?php echo $postImg; ?>" class="img-fluid">
					</div>

					<div class="single-head">
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
			             		<h5>Sarasij Roy </h5>
			             	</div>
			             	<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<div class="row content-area">
				<div class="col-md-12">
					<p>The Sarasij</p>
				</div>
			</div>
		</div>
		<!-- left-container-single -->
		<div class="right-container-single"></div>
		<div class="clearfix"></div>
	</div>




	<?php
}

get_footer();