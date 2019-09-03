<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146921449-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-146921449-1');
  </script>

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
                     <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('img/pf_font.jpg'); ?>" height='50'></a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="menu_icon"><i class="fas fa-bars"></i></span>
                     </button>
                     <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo site_url(); ?>">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('/about-us'); ?>">about us</a>
                           </li>
                           <!-- <li class="nav-item">
                              <a class="nav-link" href="#">services</a>
                           </li> -->
                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('/portfolio'); ?>">portfolio</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('/blog'); ?>">blog</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('/contact'); ?>">contact</a>
                           </li>
                        </ul>
                     </div>
                     
                  </nav>
               </div>
            </div>
         </div>
      </header>
</body>