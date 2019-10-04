<?php 
//  ======================================= Register Book post type===============================
add_action( 'init', 'book_post_type' );

function book_post_type(){
	$labels = array(
    'name'                => _x( 'Book', 'post type general name', 'your-plugin-textdomain'),
    'singular_name'       => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ), 
    'menu_name'           => _x( 'Book', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'      => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'             => _x( 'Add New', 'Book', 'your-plugin-textdomain' ),
    'add_new_item'        => __( 'Add New Book', 'your-plugin-textdomain' ),
    'new_item'            => __( 'New Book', 'your-plugin-textdomain' ),
    'edit_item'           => __( 'Edit Book', 'your-plugin-textdomain' ),
    'view_item'           => __( 'View Book', 'your-plugin-textdomain' ),
    'all_items'           => __( 'All Book', 'your-plugin-textdomain' ),
    'search_items'        => __( 'Search Book', 'your-plugin-textdomain' ),
    'parent_item_colon'   => __( 'Parent Book:', 'your-plugin-textdomain' ),
    'not_found'           => __( 'No book post found.', 'your-plugin-textdomain' ),
    'not_found_in_trash'  => __( 'No book post found in Trash.', 'your-plugin-textdomain' )
  ); 

  $args = array(
    'labels'              => $labels,
    'description'         => __( 'Description.', 'your-plugin-textdomain' ),
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'books' ),
    'capability_type'     => 'post',
    'has_archive'         => true,
    'hierarchical'        => false,
    'menu_position'       => null,
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','revisions'),
    'taxonomies'          => array('book_genre'),
    'show_in_rest'        => true,
    'menu_icon'           => 'dashicons-book',
    'menu_position'       => 5  
	);
  register_post_type( 'pf_book', $args );
}
//  ======================================= Register Book post type===============================

//  ======================================= Register Category Genre for Book========================

add_action( 'init', 'create_book_genre_tax' );
function create_book_genre_tax(){
	register_taxonomy(
        'book_genre',
        'pf_book',
        array(
            'labels' =>array(
                        'name' =>'Genres',
                        'singular_name' => 'Genre',
                        'search_items' => 'Search Genre',
                        'all_items' => 'All Genre',
                        'parent_item' => 'Parent Genre',
                        'parent_item_colon' => 'Parent Genre :',
                        'edit_item' => 'Edit Genre',
                        'update_item' => 'Update Genre',
                        'add_new_item' => 'Add New Genre',
                        'new_item_name'=> 'New Genre Name',
                        'menu_name' => 'Genre',
                        'not_found' =>'No Genre found',
                        ) ,
            'rewrite' => array( 'slug' => 'book-genre'),
            'hierarchical' => true,
            'show_ui'       => true,
            'show_admin_column' =>true,
            'show_in_menu' => true,
            'query_var' => true,
            'show_in_nav_menus' => true,
            'show_in_quick_edit' => true,
            'public' => true,
            'publicly_queryable' => true,
            'show_in_rest'      => true

        )
    );
}
//  ======================================= Register Category Genre for Book========================
