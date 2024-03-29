<?php
  require get_template_directory(). '/inc/enqueue.php';
  require get_template_directory(). '/portfolio/register.php';
  require get_template_directory(). '/services/register.php';
  require get_template_directory(). '/bengali/register.php';
  require get_template_directory(). '/books/register.php';
	require get_template_directory(). '/inc/metabox.php';



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
   add_image_size('pf-porfolio-portrait', 612,580);
   add_theme_support('html5',array('comment-list','comment-form','search-form','gallery'));

   //Add Custom Title    
   add_theme_support('title-tag');

   //woocommerce
   add_theme_support('woocommerce');
}

add_action('after_setup_theme','site_setup');



//  ======================================= End of theme setup and register========================



//  ========================================= Widget register=============================

add_action( 'widgets_init', 'pf_widgets' );

function pf_widgets(){

  register_sidebar(array(
      'name'            =>'Cookie Consent',
      'id'              =>'cookie_consent',
      'before_widget'   => '<div class="cookie-consent">',
      'after_widget'    => '</div>',
      //'before_title'  => '<h4>',
      //'after_title'   => '</h4>'
    ));

    register_sidebar(array(
      'name'            =>'Content Bottom',
      'id'              =>'content_bottom',
      //'before_widget' => '<div class="cookie-consent">',
      //'after_widget'  => '</div>',
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
//  =======================================//register language taxonomy========================






//  =======================================color option for category========================

add_action ( 'edit_category_form_fields', 'category_color_fields');
function category_color_fields( $tag ) {    //check for existing featured ID
    $t_id = $tag->term_id;
    $cat_meta = get_option( "category_$t_id");
?>

<tr class="form-field">
<th scope="row" valign="top"><label><?php _e('Color'); ?></label></th>
<td>
<input type="text" name="Cat_meta[color]" id="Cat_meta[color]" size="25" style="width:60%;" value="<?php echo $cat_meta['color'] ? $cat_meta['color'] : ''; ?>"><br />
        <span class="description"><?php _e('Color'); ?></span>
    </td>
</tr>

<?php
}
add_action ( 'edited_category', 'save_category_color_fields');
function save_category_color_fields( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
        $t_id = $term_id;
        $cat_meta = get_option( "category_$t_id");
        $cat_keys = array_keys($_POST['Cat_meta']);
            foreach ($cat_keys as $key){
            if (isset($_POST['Cat_meta'][$key])){
                $cat_meta[$key] = $_POST['Cat_meta'][$key];
            }
        }
        //save the option array
        update_option( "category_$t_id", $cat_meta );
    }
} 

//Cat color column

add_filter('manage_edit-category_columns' , 'cat_color_taxonomy_columns');
function cat_color_taxonomy_columns( $columns )
{
  $columns['cat_color'] = __('Color');

  return $columns;
}
add_filter( 'manage_category_custom_column', 'cat_color_taxonomy_columns_content', 10, 3 );
function cat_color_taxonomy_columns_content( $content, $column_name, $term_id )
{
    if ( 'cat_color' == $column_name ) {
      $color_id = "category_" . $term_id;
      $color = get_option($color_id);
      $category_color = $color['color'];
      if($category_color){
        $content = '<span style="color:'.$category_color.'">&#11044;</span>';
      }
    }
  return $content;
}



//  =======================================//color option for category========================



//  =================================//custom profile picture author=====================
add_filter( 'get_avatar', 'slug_get_avatar', 10, 5 );
function slug_get_avatar($avatar, $id_or_email, $size, $default, $alt){
  $avatar_url = get_the_author_meta( 'profile_picture', $id_or_email ) ;
  if($avatar_url){
      $avatar = '<img alt="Author for Palefire" src="'.$avatar_url.'" style="max-width:30px"/>';
  }
  return $avatar;
}



add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
    <h3><?php _e("Extra profile information", "blank"); ?></h3>

    <table class="form-table">
    <tr>
        <th><label for="facebook"><?php _e("Facebook"); ?></label></th>
        <td>
            <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your facebook url."); ?></span>
        </td>
    </tr>

    <tr>
        <th><label for="twitter"><?php _e("Twitter"); ?></label></th>
        <td>
            <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your twitter url."); ?></span>
        </td>
    </tr>

     <tr>
        <th><label for="youtube"><?php _e("Youtube"); ?></label></th>
        <td>
            <input type="text" name="youtube" id="youtube" value="<?php echo esc_attr( get_the_author_meta( 'youtube', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your youtube channel url."); ?></span>
        </td>
    </tr>

    <tr>
        <th><label for="instagram"><?php _e("Instagram"); ?></label></th>
        <td>
            <input type="text" name="instagram" id="instagram" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your instagram url."); ?></span>
        </td>
    </tr>

    <tr>
      <th><label ><?php _e("Profile Picture"); ?></label></th>
    <td>
      
    
        <input type = "button" class="button button secondary" value = "Upload Profile Picture" id = "upload-button">
      <input type="button" class="button button-secondary" value="Remove " id="remove-picture">
        <input type = "hidden" id="profile-picture" name = "profile_picture" value="<?php echo esc_attr( get_the_author_meta( 'profile_picture', $user->ID ) ); ?>"  />
      <br>
      <span class="description"><?php _e("Please click update after uploading."); ?></span>
    </td>

    </tr>
  
    </table>
<?php }


add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
    update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
    update_user_meta( $user_id, 'youtube', $_POST['youtube'] );
    update_user_meta( $user_id, 'instagram', $_POST['instagram'] );
    update_user_meta( $user_id, 'profile_picture', $_POST['profile_picture'] );
  
}
//  =================================//custom profile picture author=====================




//  =================================//No of product per page in woocomerce=====================
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 12;
  return $cols;
}
//  =================================//No of product per page in woocomerce=====================











