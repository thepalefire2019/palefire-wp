<header class="main_menu home_menu">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-12">
                  <nav class="navbar navbar-expand-lg navbar-light">

                     <a class="navbar-brand web-view" href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('img/pf_font.jpg'); ?>" height='50' class=""></a>


                     <a class="navbar-brand phone-view" href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('img/pf_trans.png'); ?>" height='50' class="border"></a>




                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="menu_icon"><i class="fas fa-bars"></i></span>
                     </button>
                     <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">


                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo site_url(); ?>">Home</a>
                           </li>


                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#">blog</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="<?php echo site_url('/blog'); ?>">English</a>
                              
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?php echo site_url('/bengali'); ?>">Bengali</a>
                            </div>
                           </li>

                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('/palefire-books'); ?>">Palefire Books</a>
                           </li>

                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('/palefire-software'); ?>">Palefire Software</a>
                           </li>

                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('/about-us'); ?>">about us</a>
                           </li>
                           
                           <!-- <li class="nav-item">
                              <a class="nav-link" href="#">services</a>
                           </li> -->

                           <!-- <li class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('/portfolios'); ?>">portfolio</a>
                           </li> -->
                           
                          
                           <!-- <li class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('/contact'); ?>">contact</a>
                           </li> -->
                        </ul>
                     </div>
                     
                  </nav>
               </div>
            </div>
         </div>
      </header>