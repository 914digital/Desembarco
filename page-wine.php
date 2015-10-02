<?php
/*
Template Name: Wines
*/
?>
<?php get_template_part('parts/header'); ?>


<div class="wines-banner">
	<div class="wines-banner-text">
	</div><!-- /wines-banner-text -->
</div><!-- /wines-banner -->

<div class="wines-main">
	<div class="container">
  <div class="row">
	  <?php
										// WP_Query arguments
									$args = array (
										'post_type' => 'Wine',	
										'posts_per_page' => '16',
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
		  								<a href="#myModal-<?php the_ID(); ?>" data-toggle="modal" data-target="#myModal-<?php the_ID(); ?>" class="main-wine-ind">
			  								<img src="<?php echo CFS()->get('wine_image'); ?>" /><br />
			  								<h3><?php the_title(); ?></h3>
			  								<?php echo CFS()->get('type_of_wine'); ?>
		  								</a><!-- /more-wine-ind -->
		  								<div class="mdivide40"></div>
	  								</div><!-- /col-md-3 -->
	  								
	<div class="modal fade" id="myModal-<?php the_ID(); ?>">>
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	         <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="..." alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="..." alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
        
       <div class="wine-content-modal">

  <div class="row">
	  <div class="col-md-4">
		   <img src="<?php echo CFS()->get('wine_image'); ?>" />
	  </div><!-- /co-md-4 -->
	   <div class="col-md-8">
		   <div class="wnbox">
			   <h1><?php the_title(); ?></h1>
		   </div><!-- /wnbox -->
		   
		  
				    <div class="wnbox-sm">
			  <table>
				  <tr>
					  <td><h3>Winery:</h3></td>
					  <td><?php echo CFS()->get('winery'); ?></td>
				  </tr>
			  </table>
		   </div><!-- /wnbox -->
				   
				   
				    </div><!-- /co-md-8 -->
				   </div>

</div><!-- /wine-content -->
 <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
       
           </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	  								

	  								
	  								
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
