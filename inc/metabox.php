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



//  ===========================post metabox for bengali film review=====================

add_action("add_meta_boxes", "bengali_film_review");
function bengali_film_review(){
  add_meta_box( 
        'benali-film-review',
        'Film Review Details',
        'bengali_film_review_mbx_fn',
        'pf_bengali',
        'normal',
        'high'
    );
}
function bengali_film_review_mbx_fn( $post ){
  $post_id = $post->ID;

  $ua = get_post_meta( $post_id,"bengali_ua",true );
  $check_ua = get_post_meta( $post_id,"bengali_check_ua",true );
 
  $production = get_post_meta( $post_id,"bengali_production",true );
  $check_production = get_post_meta( $post_id,"bengali_check_production",true );

  $director = get_post_meta( $post_id,"bengali_director",true );
  $check_director = get_post_meta( $post_id,"bengali_check_director",true );

  $release = get_post_meta( $post_id,"bengali_release",true );
  $check_release = get_post_meta( $post_id,"bengali_check_release",true );

  $cast = get_post_meta( $post_id,"bengali_cast",true );
  $check_cast = get_post_meta( $post_id,"bengali_check_cast",true );

  $rating = get_post_meta( $post_id,"bengali_rating",true );
  $check_rating = get_post_meta( $post_id,"bengali_check_rating",true );

  $time = get_post_meta( $post_id,"bengali_time",true );
  $check_time = get_post_meta( $post_id,"bengali_check_time",true );
  

  ?>
    <table>
      <tr>
        <td></td>
        <td></td>
        <td>Show in Front End</td>
      </tr>
      <tr>
        <td>Age :</td>
        <td><input type="radio" name="ua" value="A" <?php if( $ua == 'A' ){ echo 'checked'; } ?>>A <input type="radio" name="ua" value="U/A" <?php if( $ua == 'U/A' ){ echo 'checked'; } ?>>U/A</td>
        <td align="center"><input type="checkbox" name="check_ua" value="1" <?php if( $check_ua==1 ){ echo 'checked'; } ?>></td>
      </tr>
      <tr>
        <td>Production House :</td>
        <td><input type="input" name="production" value="<?php echo $production ?>"></td>
        <td align="center"><input type="checkbox" name="check_production" value="1" <?php if( $check_production==1 ){ echo 'checked'; } ?>></td>
      </tr>
      <tr>
        <td>Director :</td>
        <td><input type="input" name="director" value="<?php echo $director ?>"></td>
        <td align="center"><input type="checkbox" name="check_director" value="1" <?php if( $check_director==1 ){ echo 'checked'; } ?>></td>
      </tr>
      <tr>
        <td>Cast :</td>
        <td><input type="input" name="cast" value="<?php echo $cast ?>"></td>
        <td align="center"><input type="checkbox" name="check_cast" value="1" <?php if( $check_cast==1 ){ echo 'checked'; } ?>></td>
      </tr>
      <tr>
        <td>Release Date :</td>
        <td><input type="date" name="release" value="<?php echo $release ?>"></td>
        <td align="center"><input type="checkbox" name="check_release" value="1" <?php if( $check_release==1 ){ echo 'checked'; } ?>></td>
      </tr>
      <tr>
        <td>Rating:</td>
        <td><input type="text" name="rating" value="<?php echo $rating ?>"> /5</td>
        <td align="center"><input type="checkbox" name="check_rating" value="1" <?php if( $check_rating==1 ){ echo 'checked'; } ?>></td>
      </tr>
      <tr>
        <td>Total Timing:</td>
        <td><input type="text" name="time" value="<?php echo $time ?>"></td>
        <td align="center"><input type="checkbox" name="check_time" value="1" <?php if( $check_time==1 ){ echo 'checked'; } ?>></td>
      </tr>

      
    </table>


  <?php

}
add_action("save_post","save_bengali_film_review_mbx");
function save_bengali_film_review_mbx( $post_id ){
  $ua  = isset( $_REQUEST['ua'])?trim($_REQUEST['ua'] ):"";
  $check_ua  = isset( $_REQUEST['check_ua'])?trim($_REQUEST['check_ua'] ):"";

  $production  = isset( $_REQUEST['production'])?trim($_REQUEST['production'] ):"";
  $check_production  = isset( $_REQUEST['check_production'])?trim($_REQUEST['check_production'] ):"";

  $director  = isset( $_REQUEST['director'])?trim($_REQUEST['director'] ):"";
  $check_director  = isset( $_REQUEST['check_director'])?trim($_REQUEST['check_director'] ):"";

  $release  = isset( $_REQUEST['release'])?trim($_REQUEST['release'] ):"";
  $check_release  = isset( $_REQUEST['check_release'])?trim($_REQUEST['check_release'] ):"";

  $cast  = isset( $_REQUEST['cast'])?trim($_REQUEST['cast'] ):"";
  $check_cast  = isset( $_REQUEST['check_cast'])?trim($_REQUEST['check_cast'] ):"";

  $rating  = isset( $_REQUEST['rating'])?trim($_REQUEST['rating'] ):"";
  $check_rating  = isset( $_REQUEST['check_rating'])?trim($_REQUEST['check_rating'] ):"";

  $time  = isset( $_REQUEST['time'])?trim($_REQUEST['time'] ):"";
  $check_time  = isset( $_REQUEST['check_time'])?trim($_REQUEST['check_time'] ):"";


  if(!empty($ua)){
    update_post_meta( $post_id,"bengali_ua",$ua );
  }else{
    update_post_meta( $post_id,"bengali_ua","" ); 
  }
  if(!empty($check_ua)){
    update_post_meta( $post_id,"bengali_check_ua",$check_ua );
  }else{
    update_post_meta( $post_id,"bengali_check_ua","0" ); 
  }



  if(!empty($production)){
    update_post_meta( $post_id,"bengali_production",$production );
  }else{
    update_post_meta( $post_id,"bengali_production","" ); 
  }
  if(!empty($check_production)){
    update_post_meta( $post_id,"bengali_check_production",$check_production );
  }else{
    update_post_meta( $post_id,"bengali_check_production","0" ); 
  }




  if(!empty($director)){
    update_post_meta( $post_id,"bengali_director",$director );
  }else{
    update_post_meta( $post_id,"bengali_director","" ); 
  }
   if(!empty($check_director)){
    update_post_meta( $post_id,"bengali_check_director",$check_director );
  }else{
    update_post_meta( $post_id,"bengali_check_director","0" ); 
  }



  if(!empty($release)){
    update_post_meta( $post_id,"bengali_release",$release );
  }else{
    update_post_meta( $post_id,"bengali_release","" ); 
  }
  if(!empty($check_release)){
    update_post_meta( $post_id,"bengali_check_release",$check_release );
  }else{
    update_post_meta( $post_id,"bengali_check_release","0" ); 
  }




  if(!empty($cast)){
    update_post_meta( $post_id,"bengali_cast",$cast );
  }else{
    update_post_meta( $post_id,"bengali_cast","" ); 
  }
  if(!empty($check_cast)){
    update_post_meta( $post_id,"bengali_check_cast",$check_cast );
  }else{
    update_post_meta( $post_id,"bengali_check_cast","0" ); 
  }




  if(!empty($rating)){
    update_post_meta( $post_id,"bengali_rating",$rating );
  }else{
    update_post_meta( $post_id,"bengali_rating","" ); 
  }
  if(!empty($check_rating)){
    update_post_meta( $post_id,"bengali_check_rating",$check_rating );
  }else{
    update_post_meta( $post_id,"bengali_check_rating","0" ); 
  }




  if(!empty($time)){
    update_post_meta( $post_id,"bengali_time",$time );
  }else{
    update_post_meta( $post_id,"bengali_time","" ); 
  }
  if(!empty($check_time)){
    update_post_meta( $post_id,"bengali_check_time",$check_time );
  }else{
    update_post_meta( $post_id,"bengali_check_time","" ); 
  }

  



}

//  ===========================//post metabox for bengali film review=====================


//  ===========================post metabox for books=====================
add_action("add_meta_boxes", "book_metaboxes");
function book_metaboxes(){
  add_meta_box( 
        'book-metabox',
        'Book  Details',
        'book_metabox_fn',
        'pf_book',
        'normal',
        'high'
    );
}
function book_metabox_fn($book){
  $book_id = $book->ID;
  $book_price = get_post_meta( $book_id,"book_price",true );
  $show_book_price = get_post_meta( $book_id,"show_book_price",true );

  $book_author = get_post_meta( $book_id,"book_author",true );
  $show_book_author = get_post_meta( $book_id,"show_book_author",true );

  $book_publisher = get_post_meta( $book_id,"book_publisher",true );
  $show_book_publisher = get_post_meta( $book_id,"show_book_publisher",true );

  $book_pages = get_post_meta( $book_id,"book_pages",true );
  $show_book_pages = get_post_meta( $book_id,"show_book_pages",true );

  $book_format = get_post_meta( $book_id,"book_format",true );
  $show_book_format = get_post_meta( $book_id,"show_book_format",true );
  ?>
  <table>
    <tr>
      <td><label>Price (Rs):</label></td>
      <td><input type="text" name="book_price" style="border:1px solid #000000" value="<?php echo $book_price; ?>"></td>
      <td><input type="checkbox" name="show_book_price" style="border:1px solid #000000" value="1" <?php if( $show_book_price == 1 ){ echo 'checked';} ?>></td>
    </tr> 
    <tr>
      <td><label>Author : </label></td>
      <td><input type="text" name="book_author" style="border:1px solid #000000" value="<?php echo $book_author; ?>"></td>
      <td><input type="checkbox" name="show_book_author" style="border:1px solid #000000" value="1" <?php if( $show_book_author == 1 ){ echo 'checked';} ?>></td>
    </tr>
    <tr>
      <td><label>Publisher : </label></td>
      <td><input type="text" name="book_publisher" style="border:1px solid #000000" value="<?php echo $book_publisher; ?>"></td>
      <td><input type="checkbox" name="show_book_publisher" style="border:1px solid #000000" value="1" <?php if( $show_book_publisher == 1 ){ echo 'checked';} ?>></td>
    </tr>
    <tr>
      <td><label>Pages : </label></td>
      <td><input type="text" name="book_pages" style="border:1px solid #000000" value="<?php echo $book_pages; ?>"></td>
      <td><input type="checkbox" name="show_book_pages" style="border:1px solid #000000" value="1" <?php if( $show_book_pages == 1 ){ echo 'checked';} ?>></td>
    </tr>

    <tr>
      <td><label>Format : </label></td>
      <td>
        <select name="book_format">
          <option value="Paperback" <?php if( $book_format == 'Paperback' ){ echo 'selected'; } ?> >Paperback</option>  
          <option value="Hardcover" <?php if( $book_format == 'Hardcover' ){ echo 'selected'; } ?>  >Hardcover</option>  
          <option value="Both" <?php if( $book_format == 'Both' ){ echo 'selected'; } ?>  >Both</option>  
        </select>
      </td>
      <td><input type="checkbox" name="show_book_format" style="border:1px solid #000000" value="1" <?php if( $show_book_format == 1 ){ echo 'checked';} ?>></td>
    </tr>

  </table>
  <?php
}
add_action("save_post","save_book_mbx");

function save_book_mbx($book_id){
  $book_price  = isset( $_REQUEST['book_price'])?trim($_REQUEST['book_price'] ):"";
  $show_book_price  = isset( $_REQUEST['show_book_price'])?trim($_REQUEST['show_book_price'] ):"";

  $book_author = isset( $_REQUEST['book_author'])?trim($_REQUEST['book_author'] ):"";
  $show_book_author  = isset( $_REQUEST['show_book_author'])?trim($_REQUEST['show_book_author'] ):"";

  $book_publisher = isset( $_REQUEST['book_publisher'])?trim($_REQUEST['book_publisher'] ):"";
  $show_book_publisher  = isset( $_REQUEST['show_book_publisher'])?trim($_REQUEST['show_book_publisher'] ):"";

  $book_pages = isset( $_REQUEST['book_pages'])?trim($_REQUEST['book_pages'] ):"";
  $show_book_pages  = isset( $_REQUEST['show_book_pages'])?trim($_REQUEST['show_book_pages'] ):"";

  $book_format = isset( $_REQUEST['book_format'])?trim($_REQUEST['book_format'] ):"";
  $show_book_format  = isset( $_REQUEST['show_book_format'])?trim($_REQUEST['show_book_format'] ):"";


  if(!empty($book_price)){
    update_post_meta( $book_id,"book_price",$book_price );
  }else{
    update_post_meta( $book_id,"book_price","" ); 
  }

  if(!empty($show_book_price)){
    update_post_meta( $book_id,"show_book_price",$show_book_price );
  }else{
    update_post_meta( $book_id,"show_book_price","0" ); 
  }



  if(!empty($book_author)){
    update_post_meta( $book_id,"book_author",$book_author );
  }else{
    update_post_meta( $book_id,"book_author","" ); 
  }

  if(!empty($show_book_author)){
    update_post_meta( $book_id,"show_book_author",$show_book_author );
  }else{
    update_post_meta( $book_id,"show_book_author","0" ); 
  }




  if(!empty($book_publisher)){
    update_post_meta( $book_id,"book_publisher",$book_publisher );
  }else{
    update_post_meta( $book_id,"book_publisher","" ); 
  }

  if(!empty($show_book_publisher)){
    update_post_meta( $book_id,"show_book_publisher",$show_book_publisher );
  }else{
    update_post_meta( $book_id,"show_book_publisher","0" ); 
  }



  if(!empty($book_pages)){
    update_post_meta( $book_id,"book_pages",$book_pages );
  }else{
    update_post_meta( $book_id,"book_pages","" ); 
  }

  if(!empty($show_book_pages)){
    update_post_meta( $book_id,"show_book_pages",$show_book_pages );
  }else{
    update_post_meta( $book_id,"show_book_pages","0" ); 
  }


    if(!empty($book_format)){
    update_post_meta( $book_id,"book_format",$book_format );
  }else{
    update_post_meta( $book_id,"book_format","" ); 
  }

  if(!empty($show_book_format)){
    update_post_meta( $book_id,"show_book_format",$show_book_format );
  }else{
    update_post_meta( $book_id,"show_book_format","0" ); 
  }


}
//  ===========================post metabox for books=====================