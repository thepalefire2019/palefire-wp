<?php 
get_header();
require get_template_directory(). '/palefire-software-header.php';
while( have_posts() ){
	the_post();
	$portfolio_id = get_the_ID();
 	$portfolio_title = get_the_title();
	//wp_trim_words( get_the_content(),18 )
	$portfolio_content = get_the_content();
	$portfolio_postUrl = get_the_permalink();
	$portfolio_postImg = get_the_post_thumbnail_url($portfolio_id, 'pf-regular');
	$portfolio_category = get_the_terms($portfolio_id, 'portfolio_category');
	$portfolio_url = get_post_meta( $portfolio_id,"portfolio_url",true );
  	$show_portfolio_url = get_post_meta( $portfolio_id,"show_url",true );

	$image_1 = get_post_meta( $portfolio_id,"image_1",true );
  	$image_2 = get_post_meta( $portfolio_id,"image_2",true );
  	$image_3_mobile = get_post_meta( $portfolio_id,"image_3",true );
  	$image_4_mobile = get_post_meta( $portfolio_id,"image_4",true );

?>

<section class="breadcrumb breadcrumb_bg">
	 <div class="container">
	    <div class="row">
	       <div class="col-lg-12">
	          <div class="breadcrumb_iner text-center">
	             <div class="breadcrumb_iner_item">
	                <h2>projects details</h2>
	             </div>
	          </div>
	       </div>
	    </div>
	 </div>
</section>


<section class="project_details section_padding">
	<div class="container-fluid">
		<div class="row justify-content-center">
		   <div class="col-lg-8">
		      <div class="single_project_item">
		         <img src="<?php echo $portfolio_postImg ?>" alt="">
		         <h2><?php echo $portfolio_title; ?>
		         </h2>
		         <p><?php echo $portfolio_content; ?>
		         </p>
		         <div class="project_time">
		            <div class="row">
		               <div class="col-lg-4 col-sm-4">
		                  <div class="single_project_details">
		                     <div class="media">
		                        <img src="https://image.flaticon.com/icons/png/512/34/34389.png" class="mr-4" alt="#">
		                        <div class="media-body">
		                           <h5 class="mt-0">Total Time Taken</h5>
		                           <p>total days</p>
		                        </div>
		                     </div>
		                  </div>
		               </div>
		               <div class="col-lg-4 col-sm-4">
		                  <div class="single_project_details">
		                     <div class="media">
		                        <img src="https://image.flaticon.com/icons/png/512/31/31773.png" class="mr-4" alt="#">
		                        <div class="media-body">
		                           <h5 class="mt-0">Project Type</h5>
		                           <p><?php echo $portfolio_category[0]->name; ?></p>
		                        </div>
		                     </div>
		                  </div>
		               </div>
					<?php if( $show_portfolio_url == 'show' ){ ?>


		               <div class="col-lg-4 col-sm-4">
		                  <div class="single_project_details">
		                     <div class="media">
		                        <img src="https://image.flaticon.com/icons/png/512/15/15105.png" class="mr-4" alt="#">
		                        <div class="media-body">
		                           <h5 class="mt-0">Visit Site</h5>
		                           <a href="<?php echo $portfolio_url ?>" target="_blank"><p><?php echo $portfolio_url ?></p></a>
		                        </div>
		                     </div>
		                  </div>
		               </div>
		           <?php } //if ?>

		            </div>
		         </div>
		         <h4>Project Description</h4>
		         <p><?php echo $portfolio_content; ?>
		         </p>
		         <br><br>
		         <h4>Project Screenshots</h4>
		         <div class="container">
		         	<div class="row">
		         		<div class="col-lg-6" style="background: gray">
		         			<img src="<?php echo $image_3_mobile; ?>">
		         		</div>
		         		<div class="col-lg-6" style="background: gray">
		         			<img src="<?php echo $image_1; ?>">
		         		</div>
		         	</div>
		         </div>
		      </div>
		   </div>
		</div>
	</div>
</section>

<?php
	} //while
get_footer();
?>

