<?php 
	get_header();
	?>
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

					$book_post_id = get_the_ID();
				 	$book_title = get_the_title();
					//wp_trim_words( get_the_content(),18 )
					$book_content = get_the_content();
					$book_postUrl = get_the_permalink();
					$book_postImg = get_the_post_thumbnail_url($book_post_id, 'pf-regular');
			?>

			<div class="col-md-3">
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