<?php


/* Registering Scripts */
function tcc_enqueue_scripts() { 
	$js_dir = get_template_directory_uri() . '/js/'; 
	wp_register_script( 'sourcejs', $js_dir . 'source.js', 'jquery', '1.0' );

	wp_enqueue_script( 'jquery' );
	
	if(!is_admin())
	{
		wp_enqueue_script( 'sourcejs' ); 
	}
} 


/* Registering Styles */
function tcc_styles()
{
	wp_register_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0', 'all');
    wp_enqueue_style('reset');
	
	wp_register_style('base_style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('base_style');
    
	wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0', 'all');
    wp_enqueue_style('responsive');
    
}

/* Adding custom headers support */
$defaults = array(
	'width'                  => 150,
	'height'                 => 60,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
	'default-image' => get_template_directory_uri() . '/images/basta.jpg',
);
add_theme_support( 'custom-header', $defaults );

/* Registering navigation menus */
function tcc_register_menus()
{
    register_nav_menus(
		array( 
        'header-menu' => __('Header Menu', 'tcc_test'), // Main menu
        'sidebar-menu' => __('Sidebar Menu', 'tcc_test'), // Sidebar menu
        'footer-menu' => __('Extra Menu', 'tcc_test') // Footer menu
    ));
}

/* Adding actions */
add_action('init', 'tcc_enqueue_scripts'); // Adding the header scripts
add_action('wp_enqueue_scripts', 'tcc_styles'); // Adding Theme Stylesheet
add_action('init', 'tcc_register_menus'); // Adding the menus


?>