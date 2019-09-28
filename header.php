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

  <!-- Global site tag (gtag.js) - Google Analytics -->

  <!-- Google adSense -->
  <script data-ad-client="ca-pub-7597294505833419" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- Google adSense -->


  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="pingback" href="<?php esc_url(bloginfo( 'pingback_url' )); ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <?php wp_head(); ?>
</head>
<body>
  <div class="cookie" style="background-image: url('<?php echo get_theme_file_uri("img/cookie-bck.jpg"); ?>'); ">
            <?php if(is_active_sidebar('cookie_consent')) :?>
            <?php dynamic_sidebar('cookie_consent'); ?>
            <?php endif; ?>
  </div>
	  <!--HEADER-->
      
