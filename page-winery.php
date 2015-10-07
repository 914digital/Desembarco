<?php
/*
Template Name: Wineries
*/
?>
<?php get_template_part('parts/header'); ?>


<div class="wines-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
			
	<div class="wines-banner-text">
		<h1>Explore Spain's Wineries</h1>
	</div><!-- /wines-banner-text -->
	</div><!-- /col-md-10 -->
	<div class="col-md-1"></div>
		</div><!-- /row -->
	</div><!-- /container -->
	
</div><!-- /wines-banner -->

<div class="wines-main">
	<div class="container">
  <div class="row">
	  <?php
										// WP_Query arguments
									$args = array (
										'post_type' => 'Winery',	
										'posts_per_page' => '24',
										'order' => 'ASC',
										 ); ?>
									
									<?php
									// The Query
									$query = new WP_Query( $args ); ?>
									
									<?php
									// The Loop
									if ( $query->have_posts() ) {
										while ( $query->have_posts() ) {
											$query->the_post();	?>
											<div class="col-md-3">
		  								<a href="<?php the_permalink(); ?>" class="main-winery">
			  								<img src="<?php echo CFS()->get('winery_image'); ?>" /><br />
			  								
		  								</a><!-- /more-wine-ind -->
		  								<div class="mdivide40"></div>
	  								</div><!-- /col-md-3 -->
	  								
	        
        
     	  								

	  								
	  								
	  								   <?php $counter++;
	                    if ($counter % 4 == 0) {
	                    echo '</div><div class="divide40"></div><div class="row">';
	                        } ?>

	  								
	  								
	  						<?php	} ?>
									<?php } else { ?>
										// no posts found
									 <?php } ?>
																		
									
									<?php wp_reset_query(); ?>	
  </div><!-- /row  -->
	</div><!-- /container  -->
</div><!-- /wines-main  -->
	
	
	
	




<?php get_template_part('parts/footer'); ?>
