<?php 
function custom_wordpress_error_message ( ) {
  return "To nie było całkiem poprawne logowanie ..." ;
}
add_filter ( 'login_errors' , 'custom_wordpress_error_message' ) ;  
add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'wp_generator');

function my_secure_generator( $generator, $type ) {
	return '';
}
add_filter( 'the_generator', 'my_secure_generator', 10, 2 );

function my_remove_src_version( $src ) {
	global $wp_version;

	$version_str = '?ver='.$wp_version;
	$offset = strlen( $src ) - strlen( $version_str );

	if ( $offset >= 0 && strpos($src, $version_str, $offset) !== FALSE )
		return substr( $src, 0, $offset );

	return $src;
}
add_filter( 'script_loader_src', 'my_remove_src_version' );
add_filter( 'style_loader_src', 'my_remove_src_version' );
add_action('admin_head', 'my_styles');

function my_styles() {
  echo '<style>
  .post-type-appartment .edit-post-visual-editor,.post-type-appartment .menu-icon-appartment .wp-submenu-wrap,#adminmenu li.menu-icon-appartment.wp-not-current-submenu:hover:after{
    display:none !important;
  }
 
    
  </style>';
}

function menus_register(){
  register_nav_menus(
    array(
     'header-menu' => 'header',
     'language-menu' => 'language',
     'social-menu' => 'social',
     'footer-menu' => 'footer'
   )
 );
}
add_action('init', 'menus_register');


add_action('init', 'appartment');
function appartment() {
    
    $hotels_labels = array(
        'name'               => 'Appartment',
        'singular_name'      => 'Appartment',
        'menu_name'          => 'Appartment'
		
    );
    $hotels_labels = array(
        'labels'             => $hotels_labels,
        'public'             => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
		'show_in_rest' => true,
        'supported' => array ( 'editor' )
    );
    register_post_type('Appartment', $hotels_labels);
}


function load_scripts() {
  wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/scripts.js', '', '', true );
}

add_action('wp_enqueue_scripts', 'load_scripts');

