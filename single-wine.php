<?php get_template_part('parts/header'); ?>

<div class="wine-content">
<div class="container">
  <div class="row">
	  <div class="col-md-4">
		   <img src="<?php echo CFS()->get('wine_image'); ?>" />
	  </div><!-- /co-md-4 -->
	   <div class="col-md-8">
		   <div class="wnbox">
			   <h1><?php the_title(); ?></h1>
		   </div><!-- /wnbox -->
		   
		   <div class="row">
			   <div class="col-md-8">
				    <div class="wnbox-sm">
			  <table>
				  <tr>
					  <td><h3>Winery:</h3></td>
					  <td><?php echo CFS()->get('winery'); ?></td>
				  </tr>
			  </table>
		   </div><!-- /wnbox -->
				   
				     <div class="wnbox-sm">
			  <table>
				  <tr>
					  <td><h3>Winemaker:</h3></td>
					  <td><?php echo CFS()->get('winemaker'); ?></td>
				  </tr>
			  </table>
		   </div><!-- /wnbox -->
		   
		     <div class="wnbox-sm">
			  <table>
				  <tr>
					  <td><h3>Country:</h3></td>
					  <td><?php echo CFS()->get('country'); ?></td>
				  </tr>
			  </table>
		   </div><!-- /wnbox -->
		   
		   <div class="wnbox-sm">
			  <table>
				  <tr>
					  <td><h3>Region:</h3></td>
					  <td><?php echo CFS()->get('region'); ?></td>
				  </tr>
			  </table>
		   </div><!-- /wnbox -->
		   
		    <div class="wnbox-sm">
			  <table>
				  <tr>
					  <td><h3>Type of Wine:</h3></td>
					  <td><?php echo CFS()->get('type_of_wine'); ?></td>
				  </tr>
			  </table>
		   </div><!-- /wnbox -->
		   
		   <div class="wnbox">
			  <h3>Composition & Aging:</h3></td>
					  <p><?php echo CFS()->get('composition_aging'); ?></p>
				
		   </div><!-- /wnbox -->
		   
		  
				    </div><!-- /co-md-8 -->
			     <div class="col-md-4">
				     
				      
				       <div class="wnbox">
				     <h3>Wine Ratings</h3>
				        <?php
				                         $fields = CFS()->get('wine_rating');
				                         foreach ($fields as $field) { ?>
				                         <?php echo '<div class="wine_rating">' ?>
				                         <?php echo '<span class="rating">'.$field['rating'].'</span>'; ?>
				                            <?php echo '<span class="publication">'.$field['publication'].'</span>'; ?>
				                         <?php echo '</div>' ?>
				                      <?php   }  ?>
				    
				      </div><!-- /wnbox -->
				     
				      </div><!-- /co-md-4 -->
		   </div><!-- /row -->
		   
		     <div class="wnbox">
				     <h2>Notes For Consumers</h2>
				     <p><?php echo CFS()->get('notes_for_consumers'); ?></p>
				      </div><!-- /wnbox -->
		     <div class="wnbox">
				     <h2>Wine Description</h2>
				     <p><?php echo CFS()->get('wine_description'); ?></p>
				      </div><!-- /wnbox -->
				      
				        <div class="wnbox">
				     <h2>Tasting Notes</h2>
				     <p><?php echo CFS()->get('tasting_notes'); ?></p>
				      </div><!-- /wnbox -->
				      
				        
				      
				   
				     		   
		   
	  </div><!-- /co-md-8 -->
       
  </div><!-- /.row -->
   <div class="downloads">
				      <h3>Downloads</h3>
				      <div class="row">
					      <div class="col-md-4"><img src="<?php echo CFS()->get('bottle_image_download'); ?>" /></div>
					       <div class="col-md-4"><img src="<?php echo CFS()->get('label_image_download'); ?>" /></div>
					        <div class="col-md-4"><a href="<?php echo CFS()->get('tech_sheet'); ?>"></a></div>
				      </div><!-- /row -->
				      </div>

</div><!-- /.container -->
</div><!-- /wine-content -->
<?php get_template_part('parts/footer'); ?>
