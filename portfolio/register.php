<?php 


//  ======================================= Register Portfolio post type===============================
add_action( 'init', 'portfolio_post_type' );

function portfolio_post_type(){

  $labels = array(
    'name'                => _x( 'Portfolios', 'post type general name', 'your-plugin-textdomain'),
    'singular_name'       => _x( 'Portfolio', 'post type singular name', 'your-plugin-textdomain' ), 
    'menu_name'           => _x( 'Portfolios', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'      => _x( 'Portfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'             => _x( 'Add New', 'Portfolio', 'your-plugin-textdomain' ),
    'add_new_item'        => __( 'Add New Portfolio', 'your-plugin-textdomain' ),
    'new_item'            => __( 'New Portfolio', 'your-plugin-textdomain' ),
    'edit_item'           => __( 'Edit Portfolio', 'your-plugin-textdomain' ),
    'view_item'           => __( 'View Portfolio', 'your-plugin-textdomain' ),
    'all_items'           => __( 'All Portfolios', 'your-plugin-textdomain' ),
    'search_items'        => __( 'Search Portfolios', 'your-plugin-textdomain' ),
    'parent_item_colon'   => __( 'Parent Portfolios:', 'your-plugin-textdomain' ),
    'not_found'           => __( 'No portfolios found.', 'your-plugin-textdomain' ),
    'not_found_in_trash'  => __( 'No portfolios found in Trash.', 'your-plugin-textdomain' )
  ); 

  $args = array(
    'labels'              => $labels,
    'description'         => __( 'Description.', 'your-plugin-textdomain' ),
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'portfolio' ),
    'capability_type'     => 'post',
    'has_archive'         => true,
    'hierarchical'        => false,
    'menu_position'       => null,
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    'taxonomies'        => array('portfolio_category'),
    'show_in_rest'      => false,
    'menu_icon'     => 'dashicons-clipboard',
    'menu_position'   => 5  
);

  register_post_type( 'pf_portfolio', $args );

}
// ** ======================================= End of Register Portfolio post type========================





//  ======================================= Register New Tax for Portfoliio========================

add_action( 'init', 'create_tax' );
function create_tax(){

  register_taxonomy(
        'portfolio_category',
        'pf_portfolio',
        array(
            'labels' =>array(
                        'name' =>'Categories',
                        'singular_name' => 'Category',
                        'search_items' => 'Search Category',
                        'all_items' => 'All Category',
                        'parent_item' => 'Parent Category',
                        'parent_item_colon' => 'Parent category :',
                        'edit_item' => 'Edit Category',
                        'update_item' => 'Update category',
                        'add_new_item' => 'Add New Category',
                        'new_item_name'=> 'New category Name',
                        'menu_name' => 'Category',
                        'not_found' =>'No category found',
                        ) ,
            'rewrite' => array( 'slug' => 'portfolio-category'),
            'hierarchical' => true,
            'show_ui'       => true,
            'show_admin_column' =>true,
            'show_in_menu' => true,
            'query_var' => true,
          'show_in_nav_menus' => true,
          'show_in_quick_edit' => true,
            'public' => true,
            'publicly_queryable' => true

        )
    );

}

// ** ======================================= end of tax registration        ========================







//  ======================================= Register metabox to  Portfolio post type===============================

add_action("add_meta_boxes", "portfolio_url_mbx");
function portfolio_url_mbx(){

   add_meta_box( 
        'portfolio-url-mbx',
        'Live Url',
        'portfolio_url_mbx_fn',
        'pf_portfolio',
        'normal',
        'high'
    );

   add_meta_box( 
        'portfolio-img-mbx',
        'Screen Shot',
        'portfolio_img_mbx_fn',
        'pf_portfolio',
        'normal',
        'high'
    );

}

function portfolio_url_mbx_fn( $portfolio ){
  $portfolio_id = $portfolio->ID;
  $portfolio_url = get_post_meta( $portfolio_id,"portfolio_url",true );
  $show_url = get_post_meta( $portfolio_id,"show_url",true );
  ?>
  <table>
    <tr>
      <td></td>
      <td></td>
      <td>Show URL</td>
    </tr>
    <tr>
      <td><label style="font-weight: bold;">URL :</label></td>
      <td><input type="url" name="portfolio_url" style="border: 1px solid #000;" value="<?php echo $portfolio_url; ?>"></td>
      <td align="center"><input type="checkbox" name="show_url" value="show" <?php if( $show_url=='show' ){echo 'checked';} ?>></td>
    </tr>
  </table>
  <?php
}

function portfolio_img_mbx_fn( $portfolio ){
  $portfolio_id = $portfolio->ID;
  $image_1 = get_post_meta( $portfolio_id,"image_1",true );
  $image_2 = get_post_meta( $portfolio_id,"image_2",true );
  $image_3 = get_post_meta( $portfolio_id,"image_3",true );
  $image_4 = get_post_meta( $portfolio_id,"image_4",true );
  ?>
  <table>
    <tr>
      <td><label style="font-weight: bold;">Image 1 :</label></td>
      <td><input type="button" name="" class="button button-primary" id="add-image-btn-1" value="Add Image"></td>
      <td><input type="text" name="image_1" id="img_text_1"   value="<?php echo $image_1; ?>" hidden></td>
      <td><img src="<?php echo $image_1;  ?>" height="40" width="40" id="img_1"></td>

      <td width="135"></td>

      <td><label style="font-weight: bold;">Image 2 :</label></td>
      <td><input type="button" name="" class="button button-primary" id="add-image-btn-2" value="Add Image"></td>
      <td><input type="text" name="image_2" id="img_text_2"   value="<?php echo $image_2; ?>" hidden></td>
      <td><img src="<?php echo $image_2;  ?>" height="40" width="40" id="img_2"></td>
    </tr>

    <tr>
      <td><label style="font-weight: bold;">Image 3 :</label></td>
      <td><input type="button" name="" class="button button-primary" id="add-image-btn-3" value="Add Image"></td>
      <td><input type="text" name="image_3" id="img_text_3"   value="<?php echo $image_3; ?>" hidden></td>
      <td><img src="<?php echo $image_3;  ?>" height="40" width="40" id="img_3"></td>

      <td width="135"></td>

      <td><label style="font-weight: bold;">Image 4 :</label></td>
      <td><input type="button" name="" class="button button-primary" id="add-image-btn-4" value="Add Image"></td>
      <td><input type="text" name="image_4" id="img_text_4"   value="<?php echo $image_4; ?>" hidden></td>
      <td><img src="<?php echo $image_4;  ?>" height="40" width="40" id="img_4"></td>
    </tr>


  </table>

  <?php

}


// ** ======================================= //registration of metabox=========================================


//  ======================================= Save metabox to  Portfolio post type=================================

add_action("save_post","tg_save_mbx_value");
function tg_save_mbx_value( $portfolio_id ){
  $portfolio_url  = isset( $_REQUEST['portfolio_url'])?trim($_REQUEST['portfolio_url'] ):"";
  $show_url  = isset( $_REQUEST['show_url'])?trim($_REQUEST['show_url'] ):"";
  $image_1  = isset( $_REQUEST['image_1'])?trim($_REQUEST['image_1'] ):"";
  $image_2  = isset( $_REQUEST['image_2'])?trim($_REQUEST['image_2'] ):"";
  $image_3  = isset( $_REQUEST['image_3'])?trim($_REQUEST['image_3'] ):"";
  $image_4  = isset( $_REQUEST['image_4'])?trim($_REQUEST['image_4'] ):"";




  if(!empty($portfolio_url)){
    update_post_meta( $portfolio_id,"portfolio_url",$portfolio_url );
  }else{
    update_post_meta( $portfolio_id,"portfolio_url","" ); 
  }
  if(!empty($show_url)){
    update_post_meta( $portfolio_id,"show_url",$show_url );
  }else{
    update_post_meta( $portfolio_id,"show_url","dont" ); 
  }

  if(!empty($image_1)){
    update_post_meta( $portfolio_id,"image_1",$image_1 );
  }else{
    update_post_meta( $portfolio_id,"image_1","" ); 
  }

  if(!empty($image_2)){
    update_post_meta( $portfolio_id,"image_2",$image_2 );
  }else{
    update_post_meta( $portfolio_id,"image_2","" ); 
  }

  if(!empty($image_3)){
    update_post_meta( $portfolio_id,"image_3",$image_3 );
  }else{
    update_post_meta( $portfolio_id,"image_3","" ); 
  }

  if(!empty($image_4)){
    update_post_meta( $portfolio_id,"image_4",$image_4 );
  }else{
    update_post_meta( $portfolio_id,"image_4","" ); 
  }
}


//  ======================================= //save metabox to  Portfolio post type===============================