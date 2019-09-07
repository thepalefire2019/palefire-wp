<?php
  require get_template_directory(). '/inc/enqueue.php';
  require get_template_directory(). '/portfolio/register.php';
	require get_template_directory(). '/services/register.php';



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
   add_image_size('pf-portrait', 446,650,true);
   add_theme_support('html5',array('comment-list','comment-form','search-form','gallery'));

   //Add Custom Title    
   add_theme_support('title-tag');
}

add_action('after_setup_theme','site_setup');

//  ======================================= End of theme setup and register========================



//  ========================================= Widget register=============================

add_action( 'widgets_init', 'pf_widgets' );

function pf_widgets(){

  register_sidebar(array(
      'name'      =>'Cookie Consent',
      'id'      =>'cookie_consent',
      'before_widget' => '<div class="cookie-consent">',
      'after_widget'  => '</div>',
      //'before_title'  => '<h4>',
      //'after_title'   => '</h4>'
    ));
}



//  ======================================= End of Widget register========================


//  =======================================register language taxonomy========================

add_action( 'init', 'create_tax_language' );
function create_tax_language(){

  register_taxonomy(
        'language',
        'post',
        array(
            'labels'              =>array(
                                        'name'              =>'Languages',
                                        'singular_name'     => 'Language',
                                        'search_items'      => 'Search Language',
                                        'all_items'         => 'All Language',
                                        'parent_item'       => 'Parent Language',
                                        'parent_item_colon' => 'Parent Language :',
                                        'edit_item'         => 'Edit Language',
                                        'update_item'       => 'Update Language',
                                        'add_new_item'      => 'Add New Language',
                                        'new_item_name'     => 'New Language Name',
                                        'menu_name'         => 'Language',
                                        'not_found'         =>'No Language found',
                                        ) ,
            'rewrite'             => array( 'slug' => 'languages'),
            'hierarchical'        => true,
            'show_ui'             => true,
            'show_admin_column'   =>true,
            'show_in_menu'        => true,
            'query_var'           => true,
            'show_in_nav_menus'   => true,
            'show_in_quick_edit'  => true,
            'public'              => true,
            'publicly_queryable'  => true,
            'show_in_rest'        => true

        )
    );

}
//  =======================================register language taxonomy========================







