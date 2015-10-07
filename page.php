<?php get_template_part('parts/header'); ?>

<div class="wines-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
			
	<div class="wines-banner-text">
		<h1><?php the_title(); ?></h1>
	</div><!-- /wines-banner-text -->
	</div><!-- /col-md-10 -->
	<div class="col-md-1"></div>
		</div><!-- /row -->
	</div><!-- /container -->
	
</div><!-- /wines-banner -->

<div class="wines-main">
	<div class="container">
  <div class="row">
	  <div class="col-md-8">
		  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  									<?php the_content(); ?>
		  						<?php endwhile; else : ?>
		  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		  <?php endif; ?>			
		
	  </div><!-- /col-md-8 -->
	   <div class="col-md-4">
		   Sidebar
	   </div><!-- /col-md-4 -->
  </div><!-- /row -->
	</div><!-- /container  -->
</div><!-- /wines-main  -->
	   

<?php get_template_part('parts/footer'); ?>
