<?php 
 get_header();
 while (have_posts()) {
 	the_post();?>

 	<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>

<a href="#">Hello</a>
 	<?php
 }
 get_footer();