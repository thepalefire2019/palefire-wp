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
						<div class="feature-img" style="position: relative;">
							<img src="<?php echo $postImg; ?>" class="img-fluid">
						

							<div class="single-head" style="position: absolute;top:350px;">
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
			</div>

			<div class="row content-area">
				<div class="col-md-12">
					<div style="margin-top: 150px">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

					</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

					</p>
				</div>
				</div>
			</div>
			<div style="">
				<div style="height:200px;width:85%;background-color:red;"></div>
			</div>
		</div>
		<!-- left-container-single -->
		<div class="right-container-single"></div>
		<div class="clearfix"></div>
	</div>




	<?php
}

get_footer();