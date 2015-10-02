<!DOCTYPE html>
<html>
<head>
	<title><?php is_front_page() ? bloginfo('name') : wp_title('•', true, ''); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.png" />
   <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,700' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="/css/bootstrap-image-gallery.min.css">
   
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->    

<?php
/*
Upper menubar (at screen top)
=============================
Delete this whole <nav>...</nav> block if you don't want it, and delete the line in func/navbar.php that looks like this:
register_nav_menu('upper-bar', __('Screen-top menu'));
*/
?>
<div class="sixteen">
	<div class="top-nav-mobile">
	<div class="container">
		<div class="row">
			<div class="col-md-6"><div class="social-top"><a href="#"><i class="fa fa-facebook"></i></a> <a class="tw" href="#"><i class="fa fa-twitter"></i></a> <a class="ln" href="#"><i class="fa fa-linkedin"></i></a></div> <a class="login" href="#">LOG IN</a> </div><!-- /col-md-6 -->
			<div class="col-md-6">
				<a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory') ?>/img/logo.png"></a>

				
			 </div><!-- /col-md-4 -->
		</div><!-- /row -->
	</div><!-- /container -->
		
</div><!-- /top-nav -->

	
	
	
<div class="top-nav">
	<div class="container">
		<div class="row">
			<div class="col-md-8"> <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory') ?>/img/logo.png"></a>
</div><!-- /col-md-6 -->
			<div class="col-md-4"><div class="social-top"><a href="#"><i class="fa fa-facebook"></i></a> <a class="tw" href="#"><i class="fa fa-twitter"></i></a> <a class="ln" href="#"><i class="fa fa-linkedin"></i></a></div> <a class="login" href="#">LOG IN</a> </div><!-- /col-md-4 -->
		</div><!-- /row -->
	</div><!-- /container -->
		
</div><!-- /top-nav -->
          <nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".upper-navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div><!-- /.navbar-header -->
    <div class="collapse navbar-collapse upper-navbar">    
      <?php				
          $args = array(
            'theme_location' => 'upper-bar',
            'depth' => 0,
            'container'	=> false,
            'fallback_cb' => false,
            'menu_class' => 'nav navbar-nav',
            'walker' => new BootstrapNavMenuWalker()
          );
          wp_nav_menu($args);
      ?>
	  </div><!-- /.navbar-collapse -->
  </div>
</nav>

 
