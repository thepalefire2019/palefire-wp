<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="pingback" href="<?php esc_url(bloginfo( 'pingback_url' )); ?>">

  <?php wp_head(); ?>
</head>
<body>
	  <!--HEADER-->
      <header class="main_menu home_menu">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-12">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <a class="navbar-brand" href="index.html">LOGO</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="menu_icon"><i class="fas fa-bars"></i></span>
                     </button>
                     <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                           <li class="nav-item">
                              <a class="nav-link" href="index.html">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">about us</a>
                           </li>
                           <!-- <li class="nav-item">
                              <a class="nav-link" href="#">services</a>
                           </li> -->
                           <li class="nav-item">
                              <a class="nav-link" href="#">portfolio</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">blog</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">contact</a>
                           </li>
                        </ul>
                     </div>
                     <div class="dropdown cart">
                        <a href="#"><img src="img/icons/user.png" alt="logo"></a>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
</body>