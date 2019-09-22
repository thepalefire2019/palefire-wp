<?php 
 get_header();
 require get_template_directory(). '/palefire-header.php';
 while (have_posts()) {
 	the_post();
 	the_content();
 }
 require get_template_directory(). '/palefire-footer.php';
 get_footer();