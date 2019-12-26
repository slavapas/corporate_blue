<?php
function my_corporate_blue(){
    //add style
    wp_enqueue_style('main_style', get_stylesheet_uri());
	wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
	wp_enqueue_style( 'font-style');
	// add script
    //wp_enqueue_script('main_script_1', '//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js');
   // wp_enqueue_script('main_script_1', '//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js');
	//wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	//wp_enqueue_script('html5-shim');

}
add_action('wp_enqueue_scripts', 'my_corporate_blue');


// ADD SITE TITLE
function university_features (){
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'university_features');

// ACTIVATE THE MENU SUPPORT
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

// Enabling Support for Featured Image
add_theme_support( 'post-thumbnails' );

//  REGISTER MENU
register_nav_menus(
	array(
		'top-menu' =>'Top Menu',
		'sidebar-menu' =>'Sidebar Menu',
		'footer-menu1' => 'Bottom Menu 1',
		'footer-menu2' => 'Bottom Menu 2',


	)
);

//REGISTER WIDGET AREA
register_sidebar(
	array(
	'name' => 'Home right sidebar',
	// the name of id is the name of widget to be called with - dynamic_sidebar('home_right_1');
	'id' => 'home_right_1',
	'before_widget' => '<div>',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="rounded">',
	'after_title' => '</h2>',
) );