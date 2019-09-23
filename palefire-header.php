 <div class="ws-pimary-navbar">
   <a class="ws-p-navbar-brand" href="<?php echo site_url(); ?>">
      <img src="<?php echo get_theme_file_uri('img/pf_trans.png'); ?>" class="ws-p-logo" alt="pf">
   </a>
   <input type="checkbox" id="ws-p-toggle" class="ws-p-toggle">
   <label for="ws-p-toggle" class="ws-p-toggle-label">
      <span class="ws-p-span"></span>
   </label>
   <nav class="ws-p-nav">
      <ul class="ws-p-menu">

        <li class="ws-p-item">
          <a class="ws-p-link first" href="<?php echo site_url(); ?>">Home</a>
        </li>

         <li class="ws-p-item">
          <a class="ws-p-link second" href="#">Blog</a>
          <ul class="drop">
            <li class="custom-dropdown">
              <a href="<?php echo site_url('/blog'); ?>">English</a>
              <a href="<?php echo site_url('/bengali'); ?>">Bengali</a>
              
            </li>
          </ul>
          
        </li>

        <li class="ws-p-item">
          <a class="ws-p-link third" href="<?php echo site_url('/palefire-books'); ?>">Palefire Books</a>
        </li>

        <li class="ws-p-item">
          <a class="ws-p-link fourth" href="<?php echo site_url('/palefire-software'); ?>">Palefire Software</a>
        </li>
        
        <li class="ws-p-item">
          <a class="ws-p-link fifth" href="<?php echo site_url('/about-us'); ?>">About Us</a>
        </li>
     <!-- <li class="ws-p-item">
       <a class="ws-p-link third" href="#">Contact Us</a>
     </li> -->
    
      </ul>
   </nav> 
</div>