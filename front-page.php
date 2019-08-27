<?php 
get_header();
?>


	<!--BANNER-->
      <section class="banner_part" style="background-image:url(<?php echo get_theme_file_uri('img/banner_bg.jpg'); ?>);">
         <div class="container">
            <div class="row align-items-center justify-content-end">
               <div class="col-lg-5">
                  <div class="banner_text text-center">
                     <div class="banner_text_iner">
                        <!-- <h5>Model Photography</h5>
                        <h1>Creative <span>Studio</span></h1>
                        <p>Capturing moments from today</p>
                        <a href="#" class="btn_1">view work</a> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>



      <!--ABOUT US-->
      <section class="about_us padding_top">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="col-lg-8">
                  <div class="about_us_text text-center">
                     <h5>About Us</h5>
                     <h2>How we Started
                     </h2>
                     <p>
                     	The mighty tales of origin are crazy, right? Overrated, perhaps?
						Pale Fire is a well resourced group of friends wanting to change the way websites are made. At
						Pale Fire, we do not vouch for a sky-high, blood-curling pageturner; our history suffices to be
						quite simple. The effortless idea seems plain for the first timers who loiter here - 'we dare keep it
						simple'. We call ourselves artists, for the sole purpose that we at Pale Fire never intend to design, we CREATE.
                     </p>
                     <a href="#" class="btn_2">read more</a>
                  </div>
               </div>
            </div>
         </div>
      </section>


      <!--PORTFOLIO-->
      <section class="gallery_part section_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-5 offset-lg-2">
                  <div class="section_tittle">
                     <p>recent project</p>
                     <h2>Check latest work</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="portfolio-filter filters">
                     <ul>
                        <li class="active" data-filter="all">All projects</li>
                        <li data-filter="1">websites</li>
                        <li data-filter="2">mobile applications</li>
                        <li data-filter="3">web applications</li>
                        <li data-filter="4">logo design</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="gallery_part_item filtr-container">

                     
                     <a href="portfolio_details.html" class="img-gal filtr-item" data-category="1" style="">
                        <div class="single_gallery_item">
                           Image
                           <div class="single_gallery_item_iner">
                              <div class="gallery_item_text">
                                 <p>PaleFire</p>
                                 <h4>Project Name 1</h4>
                              </div>
                           </div>
                        </div>
                     </a>


                     <a href="portfolio_details.html" class="img-gal width-1 filtr-item" data-category="2" style="">
                        <div class="single_gallery_item">
                           Image
                           <div class="single_gallery_item_iner">
                              <div class="gallery_item_text">
                                 <p>PaleFire</p>
                                 <h4>Project Name 2</h4>
                              </div>
                           </div>
                        </div> 
                     </a>

                     <a href="portfolio_details.html" class="img-gal width-2 filtr-item" data-category="3" style="">
                        <div class="single_gallery_item">
                           Image
                           <div class="single_gallery_item_iner">
                              <div class="gallery_item_text">
                                 <p>PaleFire</p>
                                 <h4>Project Name 3</h4>
                              </div>
                           </div>
                        </div>
                     </a>

                     <a href="portfolio_details.html" class="img-gal width-2 filtr-item" data-category="4" style="">
                        <div class="single_gallery_item">
                           Image
                           <div class="single_gallery_item_iner">
                              <div class="gallery_item_text">
                                 <p>PaleFire</p>
                                 <h4>Project Name 4</h4>
                              </div>
                           </div>
                        </div>
                     </a>

                     <a href="portfolio_details.html" class="img-gal width-1 filtr-item" data-category="1" style="">
                        <div class="single_gallery_item">
                           Image
                           <div class="single_gallery_item_iner">
                              <div class="gallery_item_text">
                                 <p>PaleFire</p>
                                 <h4>Project Name5</h4>
                              </div>
                           </div>
                        </div>
                     </a>

                     <a href="portfolio_details.html" class="img-gal filtr-item" data-category="2" style="">
                        <div class="single_gallery_item">
                           Image
                           <div class="single_gallery_item_iner">
                              <div class="gallery_item_text">
                                 <p>PaleFire</p>
                                 <h4>Project Name6</h4>
                              </div>
                           </div>
                        </div>
                     </a>


                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- portfolio -->

      <!--TESTIMONIALS-->
      <section class="review_part">
         <div class="container">
            <div class="row align-items-center justify-content-between">
               <div class="col-md-5">
                  <div class="review_img">
                     <img src=" <?php echo get_theme_file_uri('img/review_bg.png'); ?> " alt="">
                  </div>
               </div>
               <div class="col-md-6">
                  <h5>Testimnonials</h5>
                     
                  <div class="review_slider owl-carousel">
                     <div class="review_part_text">
                        
                        <h2>Title
                        </h2>
                        <p>Boht Hard Boht Hard
                        </p>
                        <h3>Priya, <span>Android Developer</span> </h3>
                     </div>
                     <div class="review_part_text">
                        <h2>Title
                        </h2>
                        <p>Mandir yahi banega...
                        </p>
                        <h3>Sakir, <span>Web Developer</span> </h3>
                     </div>
                     <div class="review_part_text">
                        <h2>Title
                        </h2>
                        <p>Chup MotherBoard
                        </p>
                        <h3>Saikat, <span>Web Developer</span> </h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--TESTIMONIALS-->


       <!--BLOG-->
      <section class="catagory_post padding_bottom">
         <div class="container">
            <div class="row">
               <div class="col-xl-4">
                  <div class="section_tittle">
                     <p>our blog</p>
                     <h2>Latest story</h2>
                  </div>
               </div>
            </div>
            <div class="row">

            	<!-- loop start -->
               <div class="col-sm-6 col-lg-4">
                  <div class="single_catagory_post post_2">
                     <div class="category_post_img">
                        <img src="<?php echo get_theme_file_uri('img/blog/blog_1.png'); ?>" alt="image">  
                     </div>
                     <div class="post_text_1 pr_30">
                        <h5><span> By Name</span> / Date</h5>
                        <a href="blog.html">
                           <h3>title</h3>
                        </a>
                        <p>Content 
                        </p>
                     </div>
                  </div>
               </div>
               <!-- loop end -->
               
               <div class="col-sm-6 col-lg-4">
                  <div class="single_catagory_post post_2">
                     <div class="category_post_img">
                        <img src="img/blog/blog_2.png" alt="image">
                     </div>
                     <div class="post_text_1 pr_30">
                        <h5><span> By Name</span> / date</h5>
                        <a href="blog.html">
                           <h3>title</h3>
                        </a>
                        <p>Content 
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-4">
                  <div class="single_catagory_post post_2">
                     <div class="category_post_img">
                        <img src="img/blog/blog_3.png" alt="image">
                     </div>
                     <div class="post_text_1 pr_30">
                        <h5><span> By Name</span> / date</h5>
                        <a href="blog.html">
                           <h3>Title</h3>
                        </a>
                        <p>Content 
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>








<?php
get_footer();