<?php

function bst_setup() {
  add_editor_style('css/editor-style.css');
  add_theme_support('post-thumbnails');
	update_option('thumbnail_size_w', 170);
  update_option('medium_size_w', 470);
  update_option('large_size_w', 970);

}
add_action('init', 'bst_setup');

if (! isset($content_width))
	$content_width = 600;

function bst_search_form( $form ) {
    $form = '<form class="form-inline" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
    <div class="form-group">
		    <input class="form-control" type="text" value="' . get_search_query() . '" name="s" id="s" />
    </div>
		<button type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> '. esc_attr__('Search') .'</button>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'bst_search_form' );

function bst_excerpt_readmore() {
    return '&nbsp; <a href="'. get_permalink() . '">' . '&hellip; Read more <i class="glyphicon glyphicon-arrow-right"></i>' . '</a></p>';
}
add_filter('excerpt_more', 'bst_excerpt_readmore');

/*  Browser detection body_class() output
/* ------------------------------------ */ 
function bst_browser_body_class( $classes ) {
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
 
    if($is_lynx) $classes[] = 'lynx';
    elseif($is_gecko) $classes[] = 'gecko';
    elseif($is_opera) $classes[] = 'opera';
    elseif($is_NS4) $classes[] = 'ns4';
    elseif($is_safari) $classes[] = 'safari';
    elseif($is_chrome) $classes[] = 'chrome';
    elseif($is_IE) {
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $browser = substr( "$browser", 25, 8);
        if ($browser == "MSIE 7.0"  ) {
            $classes[] = 'ie7';
            $classes[] = 'ie';
        } elseif ($browser == "MSIE 6.0" ) {
            $classes[] = 'ie6';
            $classes[] = 'ie';
        } elseif ($browser == "MSIE 8.0" ) {
            $classes[] = 'ie8';
            $classes[] = 'ie';
        } elseif ($browser == "MSIE 9.0" ) {
            $classes[] = 'ie9';
            $classes[] = 'ie';
        } else {
            $classes[] = 'ie';
        }
    }
    else $classes[] = 'unknown';
 
    if( $is_iphone ) $classes[] = 'iphone';
 
    return $classes;
}
add_filter( 'body_class', 'bst_browser_body_class' );

add_theme_support( 'woocommerce' );


// Register Custom Post Type
add_action('init', 'wine_register');
 
function wine_register() {
 
	$labels = array(
		'name' => _x('Wine', 'post type general name'),
		'singular_name' => _x('Wine ', 'post type singular name'),
		'add_new' => _x('Add New', 'Wine item'),
		'add_new_item' => __('Add New Wine '),
		'edit_item' => __('Edit Wine'),
		'new_item' => __('New Wine '),
		'view_item' => __('View Wine Item'),
		'search_items' => __('Search Wines'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/wine-icon.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail'),
		'taxonomies' => array('category')
	  ); 
 
	register_post_type( 'Wine' , $args );
}

add_action('init', 'winery_register');
 
function winery_register() {
 
	$labels = array(
		'name' => _x('Winery', 'post type general name'),
		'singular_name' => _x('Winery ', 'post type singular name'),
		'add_new' => _x('Add New', 'Winery item'),
		'add_new_item' => __('Add New Winery '),
		'edit_item' => __('Edit Winery'),
		'new_item' => __('New Winery '),
		'view_item' => __('View Winery Item'),
		'search_items' => __('Search Wineries'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/winery-icon.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail'),
		'taxonomies' => array('category')
	  ); 
 
	register_post_type( 'Winery' , $args );
}

add_action('init', 'events_register');
 
function events_register() {
 
	$labels = array(
		'name' => _x('Event', 'post type general name'),
		'singular_name' => _x('Event ', 'post type singular name'),
		'add_new' => _x('Add New', 'Event item'),
		'add_new_item' => __('Add New Event '),
		'edit_item' => __('Edit Event'),
		'new_item' => __('New Event '),
		'view_item' => __('View Event Item'),
		'search_items' => __('Search Events'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/cal-icon.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail'),
		'taxonomies' => array('category')
	  ); 
 
	register_post_type( 'Events' , $args );
}


function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/login-logo.png);
            width: 207px;
			background-size: 207px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// changing the login page URL
    function put_my_url(){
    return ('/'); // putting my URL in place of the WordPress one
}
    add_filter('login_headerurl', 'put_my_url');


function get_next_post_id() {
global $wp_query;
if ($wp_query->current_post == $wp_query->post_count) return 0;
$next_post = $wp_query->posts[$wp_query->current_post + 1];
return $next_post->ID;
}
