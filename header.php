<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>

  <script data-ad-client="ca-pub-7597294505833419" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146921449-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-146921449-1');
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->

  

  

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="pingback" href="<?php esc_url(bloginfo( 'pingback_url' )); ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <?php wp_head(); ?>

</head>
<body>
 <!--  <div class="cookie" style="background-image: url('<?php echo get_theme_file_uri("img/cookie-bck.jpg"); ?>'); ">
            <?php if(is_active_sidebar('cookie_consent')) :?>
            <?php dynamic_sidebar('cookie_consent'); ?>
            <?php endif; ?>
  </div> -->
	  <!--HEADER-->
      
<?php
    
    if( is_page('cart') ){
      ?>
      <div class="bk-all-header">
        <a href="<?php echo site_url('palefire-books'); ?>"><div class="bk-head-logo">
          <img class="img-fluid" src="<?php echo get_theme_file_uri('img/float.png'); ?>">
        </div></a>
        <ul>
          <a href="<?php echo site_url(); ?>"><li>Home</li></a>
          <a href="<?php echo site_url('all-genres'); ?>"><li>Genres</li></a>
          <a href="<?php echo site_url('shop'); ?>" ><li>All Books</li></a>
          <a href="<?php echo site_url('cart'); ?>" ><li  style="color:#fff" >Cart</li></a>
          <a href="https://instagram.com/palefire_books?igshid=1c92cl7ce9gdx"><li>Instagram</li></a>
        </ul>
      </div>

      <?php
    }
    if( is_page('checkout') ){
      ?>
      <div class="bk-all-header">
        <a href="<?php echo site_url('palefire-books'); ?>"><div class="bk-head-logo">
          <img class="img-fluid" src="<?php echo get_theme_file_uri('img/float.png'); ?>">
        </div></a>
        <ul>
          <a href="<?php echo site_url(); ?>"><li>Home</li></a>
          <a href="<?php echo site_url('all-genres'); ?>"><li>Genres</li></a>
          <a href="<?php echo site_url('shop'); ?>" ><li>All Books</li></a>
          <a href="<?php echo site_url('cart'); ?>" ><li>Cart</li></a>
          <a href="https://instagram.com/palefire_books?igshid=1c92cl7ce9gdx"><li>Instagram</li></a>
        </ul>
      </div>
      <?php
    }
?>