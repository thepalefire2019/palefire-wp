<?php
  require get_template_directory(). '/inc/enqueue.php';
	require get_template_directory(). '/portfolio/register.php';



//  ======================================= theme setup and register========================
function site_setup(){

//registering the nav menus
   register_nav_menus(array(
     'primary' => ('Primary Menu'),
     'secondary' =>('Secondary Menu'),
   ));

   //Add fearured image
   add_theme_support('post-thumbnails');
   add_image_size('pf-large', 1200, 675 );
   add_image_size('pf-regular',820,461 );
   add_image_size('pf-medium',560,315 );
   add_image_size('pf-small', 160,90 );
   add_theme_support('html5',array('comment-list','comment-form','search-form','gallery'));

   //Add Custom Title    
   add_theme_support('title-tag');
}

add_action('after_setup_theme','site_setup');

//  ======================================= End of theme setup and register========================



