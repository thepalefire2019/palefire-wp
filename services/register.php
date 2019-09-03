<?php
//  ======================================= Register Servicce post type===============================
add_action( 'init', 'services_post_type' );

function services_post_type(){
	$labels = array(
      'name'                => _x( 'Services', 'post type general name', 'your-plugin-textdomain'),
      'singular_name'       => _x( 'Service', 'post type singular name', 'your-plugin-textdomain' ), 
      'menu_name'           => _x( 'Services', 'admin menu', 'your-plugin-textdomain' ),
      'name_admin_bar'      => _x( 'Service', 'add new on admin bar', 'your-plugin-textdomain' ),
      'add_new'             => _x( 'Add New', 'Service', 'your-plugin-textdomain' ),
      'add_new_item'        => __( 'Add New Service', 'your-plugin-textdomain' ),
      'new_item'            => __( 'New Service', 'your-plugin-textdomain' ),
      'edit_item'           => __( 'Edit Service', 'your-plugin-textdomain' ),
      'view_item'           => __( 'View Service', 'your-plugin-textdomain' ),
      'all_items'           => __( 'All Services', 'your-plugin-textdomain' ),
      'search_items'        => __( 'Search Services', 'your-plugin-textdomain' ),
      'parent_item_colon'   => __( 'Parent Services:', 'your-plugin-textdomain' ),
      'not_found'           => __( 'No services found.', 'your-plugin-textdomain' ),
      'not_found_in_trash'  => __( 'No services found in Trash.', 'your-plugin-textdomain' )
	); 

	$args = array(
      'labels'              => $labels,
      'description'         => __( 'Description.', 'your-plugin-textdomain' ),
      'public'              => true,
      'publicly_queryable'  => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'query_var'           => true,
      'rewrite'             => array( 'slug' => 'services' ),
      'capability_type'     => 'post',
      'has_archive'         => true,
      'hierarchical'        => false,
      'menu_position'       => null,
      'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
      //'taxonomies'        => array('portfolio_category'),
      'show_in_rest'      => false,
      'menu_icon'     => 'dashicons-admin-generic',
      'menu_position'   => 5  
	);

	register_post_type( 'services', $args );
}

// ** ======================================= End of Register Service post type========================