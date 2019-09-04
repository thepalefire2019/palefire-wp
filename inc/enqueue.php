<?php

function tg_load_scripts(){
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'4.2.1','all');
	wp_enqueue_style('style',get_stylesheet_uri(),array(),microtime(),'all');
	wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css',array(),'3.7.0','all');
	wp_enqueue_style('owl-carousel',get_template_directory_uri().'/css/owl.carousel.min.css',array(),'2.3.4','all');
	wp_enqueue_style('swiper',get_template_directory_uri().'/css/swiper.min.css',array(),'4.5.0','all');
	wp_enqueue_style('slick',get_template_directory_uri().'/css/slick.css',array(),'1.0','all');

	

	
	wp_enqueue_media();
	wp_deregister_script('jquery');
	wp_register_script('jquery',get_template_directory_uri().'/js/jquery.js',false,'3.3.1',true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('swiper',get_template_directory_uri().'/js/swiper.min.js',array('jquery'),'4.2.1',true);
	wp_enqueue_script('filterizr',get_template_directory_uri().'/js/jquery.filterizr.min.js',array('jquery'),'4.2.1',true);
	wp_enqueue_script('carousel',get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery'),'4.2.1',true);
	wp_enqueue_script('slick',get_template_directory_uri().'/js/slick.min.js',array('jquery'),'4.2.1',true);
	
	wp_enqueue_script('ajaxchimp',get_template_directory_uri().'/js/jquery.ajaxchimp.min.js',array('jquery'),'4.2.1',true);
	wp_enqueue_script('custom',get_template_directory_uri().'/js/custom.js',array('jquery'),'4.2.1',true);


	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'4.2.1',true);
	wp_enqueue_script('pf',get_template_directory_uri().'/js/pf.js',array('jquery'),microtime(),true);
	
} 
add_action('wp_enqueue_scripts','tg_load_scripts');

/*------------- Admin Enqueue Functions -------------*/

function tg_load_admin_scripts( $hook ){
	wp_enqueue_media();
	wp_register_script('pf-admin-script',get_template_directory_uri().'/js/pf-admin.js',array('jquery'),microtime(), true);
	wp_enqueue_script('pf-admin-script');
}

add_action('admin_enqueue_scripts','tg_load_admin_scripts');

?>