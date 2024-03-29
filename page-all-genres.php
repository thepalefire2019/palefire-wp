<?php
get_header();

 $args = array(
				       'hierarchical' => 1,
				       'show_option_none' => '',
				       'hide_empty' => 0,
				       'parent' => 73,
				       'taxonomy' => 'product_cat'
				    );
$all_genres = get_categories($args);
// $all_genres = get_terms([
//     'taxonomy' => 'book_genre',
//     'hide_empty' => false,
// ]);
// foreach( $all_genres as $all_genre ){
// 	echo $all_genre->slug;
// 	echo get_term_link( $all_genre );
// }
?>
	<div class="bk-all-header">
		<a href="<?php echo site_url('palefire-books'); ?>"><div class="bk-head-logo">
			<img class="img-fluid" src="<?php echo get_theme_file_uri('img/float.png'); ?>">
		</div></a>
		<ul>
			<a href="<?php echo site_url(); ?>"><li>Home</li></a>
			<a href="<?php echo site_url('all-genres'); ?>" ><li style="color:#994e24 ">Genres</li></a>
			<a href="<?php echo site_url('shop'); ?>" ><li>All Books</li></a>
			<a href="<?php echo site_url('cart'); ?>" ><li >Cart</li></a>
			<a href="https://instagram.com/palefire_books?igshid=1c92cl7ce9gdx"><li>Instagram</li></a>
			<li id="product-search" style="cursor: pointer;">Search</li>
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
		<div id="product-search"><span>Search</span></div>
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
				<a href="<?php echo site_url('shop'); ?>" ><li style="color:#fff">Books</li></a>
				<a href="<?php echo site_url('cart'); ?>" ><li >Cart</li></a>
				<a href="https://instagram.com/palefire_books?igshid=1c92cl7ce9gdx"><li>Instagram</li></a>
			</ul>
		</div>
	</div>
	<div class="bk-all-body">
		<div class="container">
			<div class="row ">
				<?php if( $all_genres ){ 
						foreach( $all_genres as $all_genre ){
					?>
				<div class="col-md-6 col-12 align-self-center">
					<a href="<?php echo get_term_link( $all_genre ); ?>">
						<div class="bk-genre-box">
							<h5><?php echo $all_genre->name; ?></h5>
						</div>
					</a>
				</div>
				<?php
				 	}
				} 
				?>

				<div class="col-md-6 col-12 align-self-center">
					<a href="<?php echo site_url('shop'); ?>">
						<div class="bk-genre-box">
							<h5>All Books</h5>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>



<?php

get_footer();