<?php 


//  ===========================//post metabox for author social media=====================

add_action("add_meta_boxes", "author_social_media");
function author_social_media(){
  add_meta_box( 
        'author-socail-media',
        'Author Social Media',
        'author_social_media_mbx_fn',
        'post',
        'side',
        'high'
    );
}
function author_social_media_mbx_fn( $post ){
  $post_id = $post->ID;
  $social_add = get_post_meta( $post_id,"social_add",true );
  $author_facebook = get_post_meta( $post_id,"author_facebook",true );
  $author_twitter = get_post_meta( $post_id,"author_twitter",true );
  $author_instagram = get_post_meta( $post_id,"author_instagram",true );
  $author_youtube = get_post_meta( $post_id,"author_youtube",true );

  ?>
    <table>
      <tr>
        <td><input type="checkbox" name="social_add" value="1" <?php if( $social_add == 1 ){echo 'checked';} ?>></td>
         <td>Author Social Advertisement</td>
      </tr>

      <tr>
        <td><input type="checkbox" name="author_facebook" value="1" <?php if( $author_facebook == 1 ){echo 'checked';} ?>></td>
        <td>Facebook</td>
      </tr>

      <tr>
        <td><input type="checkbox" name="author_twitter" value="1" <?php if( $author_twitter == 1 ){echo 'checked';} ?>></td>
        <td>Twitter</td>
      </tr>

      <tr>
        <td><input type="checkbox" name="author_instagram" value="1" <?php if( $author_instagram == 1 ){echo 'checked';} ?>></td>
        <td>Instagram</td>
      </tr>

      <tr>
        <td><input type="checkbox" name="author_youtube" value="1" <?php if( $author_youtube == 1 ){echo 'checked';} ?>></td>
        <td>Youtube</td>
      </tr>
    </table>


  <?php

}
add_action("save_post","save_author_socail_media_mbx");
function save_author_socail_media_mbx( $post_id ){
  $social_add  = isset( $_REQUEST['social_add'])?trim($_REQUEST['social_add'] ):"";
  $author_facebook  = isset( $_REQUEST['author_facebook'])?trim($_REQUEST['author_facebook'] ):"";
  $author_twitter  = isset( $_REQUEST['author_twitter'])?trim($_REQUEST['author_twitter'] ):"";
  $author_instagram  = isset( $_REQUEST['author_instagram'])?trim($_REQUEST['author_instagram'] ):"";
  $author_youtube  = isset( $_REQUEST['author_youtube'])?trim($_REQUEST['author_youtube'] ):"";


  if(!empty($social_add)){
    update_post_meta( $post_id,"social_add",$social_add );
  }else{
    update_post_meta( $post_id,"social_add","0" ); 
  }

  if(!empty($author_facebook)){
    update_post_meta( $post_id,"author_facebook",$author_facebook );
  }else{
    update_post_meta( $post_id,"author_facebook","0" ); 
  }

  if(!empty($author_twitter)){
    update_post_meta( $post_id,"author_twitter",$author_twitter );
  }else{
    update_post_meta( $post_id,"author_twitter","0" ); 
  }

  if(!empty($author_instagram)){
    update_post_meta( $post_id,"author_instagram",$author_instagram );
  }else{
    update_post_meta( $post_id,"author_instagram","0" ); 
  }

   if(!empty($author_youtube)){
    update_post_meta( $post_id,"author_youtube",$author_youtube );
  }else{
    update_post_meta( $post_id,"author_youtube","0" ); 
  }




}


//  ===========================//post metabox for author social media=====================





//  ===========================//post metabox for guest author bengali=====================

add_action("add_meta_boxes", "bengali_guest_author");
function bengali_guest_author(){
  add_meta_box( 
        'benali-guest-author',
        'Guest Author Details',
        'bengali_guest_author_mbx_fn',
        'pf_bengali',
        'side',
        'high'
    );
}
function bengali_guest_author_mbx_fn( $post ){
  $post_id = $post->ID;
  $guest_author_check = get_post_meta( $post_id,"bengali_guest_author_check",true );
  $guest_author_name = get_post_meta( $post_id,"bengali_guest_author_name",true );
  // $author_twitter = get_post_meta( $post_id,"author_twitter",true );
  // $author_instagram = get_post_meta( $post_id,"author_instagram",true );
  // $author_youtube = get_post_meta( $post_id,"author_youtube",true );

  ?>
    <table>
      <tr>
        <td><input type="checkbox" name="guest_author_check" value="1" <?php if( $guest_author_check == 1 ){echo 'checked';} ?>></td>
         <td>Author Social Advertisement</td>
      </tr>
  	</table>
  	<table>
      <tr>
        <td><input type="name" name="guest_author_name" value="<?php echo $guest_author_name; ?>" placeholder="Guest Author Name"></td>
        
      </tr>

      
    </table>


  <?php

}
add_action("save_post","save_bengali_guest_author_mbx");
function save_bengali_guest_author_mbx( $post_id ){
  $guest_author_check  = isset( $_REQUEST['guest_author_check'])?trim($_REQUEST['guest_author_check'] ):"";
  $guest_author_name  = isset( $_REQUEST['guest_author_name'])?trim($_REQUEST['guest_author_name'] ):"";
  // $author_twitter  = isset( $_REQUEST['author_twitter'])?trim($_REQUEST['author_twitter'] ):"";
  // $author_instagram  = isset( $_REQUEST['author_instagram'])?trim($_REQUEST['author_instagram'] ):"";
  // $author_youtube  = isset( $_REQUEST['author_youtube'])?trim($_REQUEST['author_youtube'] ):"";


  if(!empty($guest_author_check)){
    update_post_meta( $post_id,"bengali_guest_author_check",$guest_author_check );
  }else{
    update_post_meta( $post_id,"bengali_guest_author_check","0" ); 
  }

  if(!empty($guest_author_name)){
    update_post_meta( $post_id,"bengali_guest_author_name",$guest_author_name );
  }else{
    update_post_meta( $post_id,"bengali_guest_author_name","" ); 
  }

  



}


//  ===========================//post metabox for author social media=====================


