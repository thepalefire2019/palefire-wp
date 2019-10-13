<?php
get_header();



$all_genres = get_terms([
    'taxonomy' => 'book_genre',
    'hide_empty' => false,
]);
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
			<a href="<?php echo site_url('all-genres'); ?>" ><li style="color:#fff">Genres</li></a>
			<a href="<?php echo site_url('all-books'); ?>" ><li>All Books</li></a>
			<a href="https://instagram.com/palefire_books?igshid=1c92cl7ce9gdx"><li>Instagram</li></a>
		</ul>
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

			

			</div>
		</div>
	</div>



<?php

get_footer();