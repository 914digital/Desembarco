<?php
/*
Template Name: Wines
*/
?>
<?php get_template_part('parts/header'); ?>


<div class="wines-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
			
	<div class="wines-banner-text">
		<h1>Explore Spain's Wines</h1>
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
										'post_type' => 'Wine',	
										'posts_per_page' => '-1',
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
		  								<a href="#myModal-<?php the_ID(); ?>" class="main-wine-ind" data-toggle="modal" data-target="#myModal-<?php the_ID(); ?>">
			  								<img src="<?php echo CFS()->get('wine_image'); ?>" /><br />
			  								<h3><?php the_title(); ?><br />
			  								<?php echo CFS()->get('type_of_wine'); ?></h3>
		  								</a><!-- /more-wine-ind -->
		  								<div class="mdivide40"></div>
	  								</div><!-- /col-md-3 -->
	  								
	  								  <script>
	$("#next").click(function(){
    $("#myModal-<?php the_ID(); ?>").modal('hide');
    $("#myModal-<?php
$adjacent_post = get_adjacent_post(false,'',false) ;
echo $adjacent_post->ID;
?>").modal('show');
});
</script>

	  								
	        
         
	                        
	                        <div class="modal fade" id="myModal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	                          <div class="modal-dialog">
	                            <div class="modal-content">
	                              <div class="modal-header">
	                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                                <h4 class="modal-title">Modal title</h4>
	                              </div>
	                              <div class="modal-body">
	                                <p>One fine body <?php the_ID(); ?>  <?php
$adjacent_post = get_adjacent_post(false,'',false) ;
echo $adjacent_post->ID;
?></p>
	                              </div>
	                              <div class="modal-footer">
	                                <button id="next" class="btn">Next Modal</button>
	                              
	                              </div>
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
