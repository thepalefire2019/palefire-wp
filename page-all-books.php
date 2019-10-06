<?php 
	get_header();
	?>
	<div class="bk-all-header">
		<a href="<?php echo site_url('palefire-books'); ?>"><div class="bk-head-logo">
			<img class="img-fluid" src="<?php echo get_theme_file_uri('img/float.png'); ?>">
		</div></a>
		<ul>
			<a href="<?php echo site_url(); ?>"><li>Home</li></a>
			<a href="https://instagram.com/palefire_books?igshid=1c92cl7ce9gdx"><li>Instagram</li></a>
		</ul>
	</div>
	<div class="bk-all-body">
	<div class="container-fluid">
		<div class="row">
			<?php 
				$ourCurrentPage = get_query_var('paged');

				$all_books = new WP_Query(array(
                           'post_type' => 'pf_book',
                           'posts_per_page' => 12,
                           'paged' => $ourCurrentPage 
                           
                         ));
				while( $all_books->have_posts() ){
					$all_books->the_post();

					$book_id = get_the_ID();
				 	$book_title = get_the_title();
					//wp_trim_words( get_the_content(),18 )
					$book_content = get_the_content();
					$book_postUrl = get_the_permalink();
					$book_postImg = get_the_post_thumbnail_url($book_post_id, 'pf-medium');
					$book_price = get_post_meta( $book_id,"book_price",true );
			?>

			<div class="col-md-3 col-12">
				<div class="bk-parent-box">
					<div class="bk-all-img img-fluid">
						<img src="<?php echo $book_postImg ?>">
					</div>
					<div class="bk-all-title">
						<a href="#"><h1><?php echo $book_title; ?></h1></a>
					</div>
					<div class="bk-all-desc">
						<p><?php echo wp_trim_words( get_the_content(),18 )  ?> </p>
					</div>
					<div class="bk-all-price">
						<p><i>&#8377; 100.00</i></p>
					</div>
					<div class="bk-all-buy"></div>
					
				</div>
			</div>
			<?php 
				}
				
				echo paginate_links(array(
					'total' => $all_books->max_num_pages
				)); 



				wp_reset_postdata();
			?>



			
			
	</div>
	</div>
	</div>
	<?php
	get_footer();
?>