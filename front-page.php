<?php 
   get_header() ;

   require get_template_directory(). '/palefire-header.php';
?>

<!---------------------------------- 1st Navbar--------------------------------->

     
<!---------------------------// 1st Navbar---------------------------------------->
    


<!---------------------------Primary Banner---------------------------------------->

        <div class="ws-primary-banner" style="background: url(<?php echo get_theme_file_uri('img/front-banner.jpg'); ?>) center/cover no-repeat fixed ;">
          <div class="ws-banner-info">
            <div class="ws-banner-content">
               <h1>Know Us?</h1>
               <p>
                  The mighty tales of origin are crazy, right? Overrated, perhaps?
                  Pale Fire is a well resourced group of friends wanting to change the way websites are made. At Pale Fire, we do not vouch for a sky-high, blood-curling page turner; our history suffices to be quite simple....... 
               </p>
            </div>
            <div class="ws-link">
              <a href="<?php echo site_url('/about-us'); ?>" class="ws-discover">
                <span></span> 
                Discover Here
              </a>
              <div class="ws-arrow">
                <span class="one"></span>
                <span class="two"></span>
              </div>
            </div>  
          </div>
        </div>
<!------------------------- // Primary banner---------------------------------->



<!--------------------------- 2nd Navbar----------------------------------------->

    <input id="ws-s-tab1" class="ws-input" type="radio" name="ws-s-navtab" checked="checked">
    <input id="ws-s-tab2" class="ws-input" type="radio" name="ws-s-navtab">
    <input id="ws-s-tab3" class="ws-input" type="radio" name="ws-s-navtab">
    <input id="ws-s-tab4" class="ws-input" type="radio" name="ws-s-navtab">
     <div class="ws-secondary-navbar">
        <nav class="ws-s-nav">  
          <ul class="ws-s-menu">
            <li class="ws-s-item ws-silver">
              <span></span>
              <label for="ws-s-tab1">English</label>
            </li>
            <li class="ws-s-item ws-gold">
              <span></span>
              <label for="ws-s-tab2">Bengali</label>
            </li>
            <!-- <li class="ws-s-item ws-diamond">
              <span></span>
              <label for="ws-s-tab3">Diamond</label>
            </li>
            <li class="ws-s-item ws-platinum">
              <span></span>
              <label for="ws-s-tab4">Platinum</label>
            </li> -->
          </ul>
        </nav>  
      </div>
<!---------------------------- // 2nd Navbar--------------------------------->



<!--------------------------- Content ----------------------------------------->

    <div class="ws-content  ws-grid-content">

      <!---English Content---->

      <?php 

      $blog = new WP_Query(array(
                     
                     'posts_per_page' => 4
                           
                         ));

      while ( $blog->have_posts() ) {
         $blog->the_post();
         $post_url = get_the_permalink(); 
         $post_id = get_the_ID();
         $featured_img = get_the_post_thumbnail_url($post_id,'pf-regular'); 
         $post_title = get_the_title();
         $port_content = get_the_content();
         $categories= get_the_category();
         if($categories){
            $color_id = "category_" . $categories[0]->term_id;
             $color = get_option($color_id);
             if($color){
               $bgcolor = $color['color'];
             }else{
                $bgcolor = '#c8d6e5';
             }
         }
      ?>

      <div class="ws-con-s2 ws-content1 ws-col-con ws-col-1">
         <div class="ws-con-card">
         <div class="ws-con-img" style="background: url(<?php echo $featured_img; ?>) center/cover no-repeat  ;"></div>
            <div class="ws-card-container">
               <div class="ws-card-info">
                  <!-- <p><b>By</b></p> -->
                  <div class="row index-cat-front">
                     <div class="col-md-12">
                        <a href="#" style="background:<?php echo $bgcolor; ?>;"><?php echo $categories[0]->cat_name; ?></a>
                     </div>
                  </div>
                  <h4><b><?php echo get_the_author_meta('first_name')." ".get_the_author_meta('last_name'); ?></b></h4> 
                  <p><?php echo $post_title ?></p>
               </div>
               <div class="ws-link">
                  <a href="<?php echo $post_url ?>" class="ws-discover">
                  <span></span> 
                  Read More
                  </a>

                  <div class="ws-arrow">
                     <span class="one"></span>
                     <span class="two"></span>
                  </div>
               </div>  
            </div>
         </div>
      </div>
   <?php } ?>

    <!---//English Content---->  







      <!-----Bengali Content------>
      <div class="ws-con-g1 ws-content2 ws-col-con ws-col-1">
      <?php
         $all_bengali = new WP_Query(array(
                           'post_type' => 'pf_bengali',
                           'posts_per_page' => 2
                         ));

         while( $all_bengali->have_posts() ){
            $all_bengali->the_post();
            $beng_post_id  = get_the_ID();
            $beng_title    = get_the_title();
            $beng_content  = get_the_content();
            $beng_postUrl  = get_the_permalink();
            $beng_postImg  = get_the_post_thumbnail_url($beng_post_id, 'pf-regular');
            $beng_category = get_the_terms($beng_post_id, 'bengali_category');
            $beng_date     = get_the_time('Y-m-d H:i:s');
         

       ?>

       
          <div class="ws-con-card">
            <div class="ws-con-img" style="background: url(<?php echo $beng_postImg; ?>) center/cover no-repeat  ;"></div>
            <div class="ws-card-container">
              <div class="ws-card-info">
                <h4><b><?php echo $beng_title; ?></b></h4> 
                <p><?php echo wp_trim_words( $beng_content, 50 )  ?></p>
              </div>
              <div class="ws-link">
              <a href="<?php echo $beng_postUrl; ?>" class="ws-discover">
                <span></span> 
                আরো পড়ুন
              </a>
              <div class="ws-arrow">
                <span class="one"></span>
                <span class="two"></span>
              </div>
            </div>  
            </div>
          </div>

         
       <?php } ?>
        </div>

       
     

        
       
      <!---//Gold Content---->  

      

        
    </div> 

  <!----------- // ws-content-------------------->
   
    


 
     
      

















<!------------------------ Footer ----------------------------------->

<?php 


require get_template_directory(). '/palefire-footer.php';
get_footer();






