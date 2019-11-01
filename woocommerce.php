<?php 
	get_header();
	?>
	<div class="bk-all-header">
		<a href="<?php echo site_url('palefire-books'); ?>"><div class="bk-head-logo">
			<img class="img-fluid" src="<?php echo get_theme_file_uri('img/float.png'); ?>">
		</div></a>
		<ul>
			<a href="<?php echo site_url(); ?>"><li>Home</li></a>
			<a href="<?php echo site_url('all-genres'); ?>"><li>Genres</li></a>
			<a href="<?php echo site_url('shop'); ?>" ><li style="color:#fff">Books</li></a>
			<a href="<?php echo site_url('cart'); ?>" ><li >Cart</li></a>
			<a href="https://instagram.com/palefire_books?igshid=1c92cl7ce9gdx"><li>Instagram</li></a>
			<li id="product-search" style="cursor: pointer;"><img src="<?php echo get_theme_file_uri('img/svg/search.svg'); ?>"></li>
		</ul>
	</div>
	<div class="bk-search" style="display: none">
		<div class="bk-search-close" id="close-search"><span>Cancel Search</span></div>
		<div class="bk-search-box">
			<?php get_product_search_form(); ?>
		</div>
		
	</div>

	
	<div class="bk-all-header-mobile">
		<a href="<?php echo site_url('palefire-books'); ?>"><div class="bk-head-logo">
			<img class="img-fluid" src="<?php echo get_theme_file_uri('img/float.png'); ?>">
		</div></a>
		<div id="product-search-mobile" class="product-search"><img src="<?php echo get_theme_file_uri('img/svg/search.svg'); ?>"></div>
		<div class="bk-menu-mobile">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>


	<div class="bk-menu-mobile-screen">
		<div class="X"><p>X</p></div>
		<div class="bk-menu-mobile-list">
			<ul>
				<a href="<?php echo site_url(); ?>"><li>Home</li></a>
				<a href="<?php echo site_url('all-genres'); ?>"><li>Genres</li></a>
				<a href="<?php echo site_url('shop'); ?>" ><li style="color:#994e24 ">Books</li></a>
				<a href="<?php echo site_url('cart'); ?>" ><li >Cart</li></a>
				<a href="https://instagram.com/palefire_books?igshid=1c92cl7ce9gdx"><li>Instagram</li></a>
			</ul>
		</div>
	</div>



	<div class="bk-all-body">
	<div class="container-fluid">
		<div class="row">
			<?php 
				$ourCurrentPage = get_query_var('paged');

				// $all_books = new WP_Query(array(
    //                        'post_type' => 'product',
    //                        'posts_per_page' => 12,
    //                        'paged' => $ourCurrentPage 
                           
    //                      ));
				while( have_posts() ){
					the_post();

					$book_id = get_the_ID();
				 	$book_title = get_the_title();
					//wp_trim_words( get_the_content(),18 )
					// $book_content = get_the_content();
					// $book_postUrl = get_the_permalink();
					// $book_postImg = get_the_post_thumbnail_url($book_id, 'pf-medium');

					// $book_price = get_post_meta( $book_id,"book_price",true );
					// $show_book_price = get_post_meta( $book_id,"show_book_price",true );

					// $book_original_price = get_post_meta( $book_id,"book_original_price",true );
 				// 	$show_book_original_price = get_post_meta( $book_id,"show_book_original_price",true );

					$book_author = get_post_meta( $book_id,"book_author",true );
					$show_book_author = get_post_meta( $book_id,"show_book_author",true );

					$book_publisher = get_post_meta( $book_id,"book_publisher",true );
					$show_book_publisher = get_post_meta( $book_id,"show_book_publisher",true );

					$book_pages = get_post_meta( $book_id,"book_pages",true );
					$show_book_pages = get_post_meta( $book_id,"show_book_pages",true );

					$book_format = get_post_meta( $book_id,"book_format",true );
					$show_book_format = get_post_meta( $book_id,"show_book_format",true );

				 	// getting Sub category depending on parent cat id
					 $args = array(
				       'hierarchical' => 1,
				       'show_option_none' => '',
				       'hide_empty' => 0,
				       'parent' => 16,
				       'taxonomy' => 'product_cat'
				    );
					$subcats = get_categories($args);
					// echo '<pre>';
					// print_r($subcats);
					// echo '</pre>';
					$book_postUrl = get_the_permalink();
					$book_postImg = get_the_post_thumbnail_url($book_id, 'pf-medium');
					//global $product;
					$_product = wc_get_product( $book_id );
					// echo "<pre style=color:#fff;>";
					// print_r($_product);
					// echo "</pre>";
					$book_price = $_product->get_sale_price();
					$book_original_price = $_product->get_regular_price();
					$book_short_desc = $_product->get_short_description();
					$book_long_desc = $_product->get_description();
					$add_to_cart = do_shortcode('[add_to_cart_url id="'.$book_id.'"]');


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
					<?php if( $book_price  ){ ?>
					<div class="bk-all-price">
						<?php if( $book_original_price ){ ?>
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
						<a href="<?php echo $add_to_cart;?>">Add To Cart</a>
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
					// echo paginate_links(array(
					// 	'total' => $all_books->max_num_pages
					// )); 
					echo paginate_links();

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