<?php get_template_part('parts/header'); ?>

<div class="winery-header">
	 <div class="winery-info">
	<div class="container">
	  <div class="row">
	 <div class="col-md-5">
		 <img src="<?php echo CFS()->get('winery_image'); ?>" />
	 </div><!-- /col-md-5 -->
	<div class="col-md-7">
		<h2><?php the_title(); ?></h2>
		<table class="table">
			<tr>
				<td>Contact:</td>
				<td><?php echo CFS()->get('contact'); ?></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><?php echo CFS()->get('address'); ?></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><?php echo CFS()->get('phone'); ?></td>
				<td>Fax:</td>
				<td><?php echo CFS()->get('fax'); ?></td>
			</tr>
			<tr>
				<td>Web:</td>
				<td><?php echo CFS()->get('web'); ?></td>
				<td>Email:</td>
				<td><?php echo CFS()->get('email'); ?></td>
			</tr>
		</table>
			<table class="table">
			<tr>
				<td>Year of Foundation:</td>
				<td><?php echo CFS()->get('year_of_foundation'); ?></td>
				<td><div class="winery-social">
			<?php if(''!= $cfs->get('facebook')):?><a target="_blank" href="<?php echo CFS()->get('facebook'); ?>"><i class="fa fa-facebook fa-2x"></i></a>
<?php endif; ?>

<?php if(''!= $cfs->get('twitter')):?><a target="_blank" href="<?php echo CFS()->get('twitter'); ?>"><i class="fa fa-twitter fa-2x"></i></a>
<?php endif; ?>


<?php if(''!= $cfs->get('linkedin')):?><a target="_blank" href="<?php echo CFS()->get('linkedin'); ?>"><i class="fa fa-linkedin fa-2x"></i></a>
<?php endif; ?>

			</div>
				</td>
			</tr>
			<tr>
				<td>Vineyard Size:</td>
				<td><?php echo CFS()->get('vineyard_size'); ?></td>
			</tr>
			<tr>
				<td>Annual Volume:</td>
				<td><?php echo CFS()->get('annual_volume'); ?></td>
				
			</tr>
			</table>
			
						
			
				</div><!-- /col-md-7 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /winery-info -->
</div><!-- /winery-header -->

	
	<div class="about-winery">
		<div class="container">
	<div class="row">
	 <div class="col-md-5"><img src="<?php echo CFS()->get('about_the_winery_photo'); ?>"></div>
	 <div class="col-md-7">
		 <h3>About the Winery</h3>
		 <p><?php echo CFS()->get('about_the_winery_text'); ?></p>
	 </div><!-- /col-md-5 -->
	  </div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /about-winery -->
	
	<div class="about-vineyard">
		<div class="container">
	<div class="row">
	 <div class="col-md-5"><img src="<?php echo CFS()->get('about_the_vineyard_photo'); ?>"></div>
	 <div class="col-md-7">
		 <h3>About the Vineyard</h3>
		 <p><?php echo CFS()->get('about_the_vineyard_text'); ?></p>
	 </div><!-- /col-md-5 -->
	  </div><!-- /row -->
	  </div><!-- /container -->
	</div><!-- /about-vineyard -->
	
						<div class="more-wines">
							<div class="container">
						<div class="row">
							
							 <div class="col-md-12">
								 <h4>Wines From This Winery</h4>
							 </div><!-- /col-md-12 -->
						</div><!-- /row -->
						<div class="row">
							    <?php
	                     $fields = CFS()->get('more_wines');
	                     foreach ($fields as $field) { ?>
	                     <?php echo '<div class="col-md-3">' ?>
	                      <?php echo '<div class="more-wine-ind">' ?>
	                     
	                     <?php echo '<img src="'.$field['wine-image'].'">' ?>
	                      <?php echo '<h4>'.$field['wine-text'].'</h4>' ?>
	                     <?php echo '</div>' ?>
	                        <?php echo '</div>' ?>
	                      <?php $counter++;
	                    if ($counter % 4 == 0) {
	                    echo '</div><div class="divide20"></div><div class="row">';
	                        } ?>
	                    
	                  <?php   }  ?>
	


</div><!-- /row -->
							</div><!-- /container -->
						</div><!-- /more-wines -->
	

			

		
	
<?php get_template_part('parts/footer'); ?>
