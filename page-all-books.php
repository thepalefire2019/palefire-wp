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
					$book_postImg = get_the_post_thumbnail_url($book_id, 'pf-medium');

					$book_price = get_post_meta( $book_id,"book_price",true );
					$show_book_price = get_post_meta( $book_id,"show_book_price",true );

					$book_original_price = get_post_meta( $book_id,"book_original_price",true );
 					$show_book_original_price = get_post_meta( $book_id,"show_book_original_price",true );

					$book_author = get_post_meta( $book_id,"book_author",true );
					$show_book_author = get_post_meta( $book_id,"show_book_author",true );

					$book_publisher = get_post_meta( $book_id,"book_publisher",true );
					$show_book_publisher = get_post_meta( $book_id,"show_book_publisher",true );

					$book_pages = get_post_meta( $book_id,"book_pages",true );
					$show_book_pages = get_post_meta( $book_id,"show_book_pages",true );

					$book_format = get_post_meta( $book_id,"book_format",true );
					$show_book_format = get_post_meta( $book_id,"show_book_format",true );

			?>

			<div class="col-md-2 col-12">
				<div class="bk-parent-box">
					
					<div class="bk-all-img img-fluid">
						<img src="<?php echo $book_postImg ?>">
					</div>
					
					<div class="bk-all-title">
						<a href="#"><h1><?php echo wp_trim_words($book_title,7); ?></h1></a>
					</div>
					<div class="bk-all-desc">
						<?php
						if( $show_book_author == 1 ){
						?>
						<p>Author : <?php echo $book_author; ?> </p>
						<?php 
						}
						if( $show_book_publisher == 1 ){
						?>
						<p>Publisher : <?php echo $book_publisher; ?> </p>
						<?php 
						}
						if( $show_book_format == 1 ){
						?>
						<p> Format: <?php echo $book_format ?> </p>
						<?php
						}
						if( $show_book_pages ){
						 ?>
						
						<p> Pages: <?php echo $book_pages; ?> </p>
						<?php
						}
						 ?>

					</div>
					<?php if( $show_book_price == 1 ){ ?>
					<div class="bk-all-price">
						<?php if( $show_book_original_price == 1 ){ ?>
						<p>Original Price :<strike> &#8377; <?php echo $book_original_price; ?></strike></p>
						<?php } ?>
						<p>Our Price:<i>&#8377; <?php echo $book_price; ?></i></p>
					</div>
					<?php }else{
						?>
					<div class="bk-all-price">
						<p>Contact Us for Price</p>
					</div>
						<?php
					} ?>
					<div class="topic">
						<a href="<?php echo site_url('/buy-now'); ?>">Buy Now</a>
					</div>
					
				</div>
			</div>
			<?php 
				}
				
				
			?>



			
			
		</div>
		<?php
			?>
		<div class="row paginate-parent">
			<div class="col-md-12 text-right">
				<?php
					echo paginate_links(array(
						'total' => $all_books->max_num_pages
					)); 

				?>
			</div>
		</div>
		<?php
			wp_reset_postdata();
		 ?>
	</div>
	</div>
	<?php
	get_footer();
?>