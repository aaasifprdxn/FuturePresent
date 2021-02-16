<?php
/**
* functions
 */

//linking to html
function eventtheme_enqueue_style() {
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), [],filemtime(get_template_directory().'/style.css') );
} 
add_action( 'wp_enqueue_scripts', 'eventtheme_enqueue_style' );
//adding menu
add_theme_support('menus');

register_nav_menus(
		array(
				'top-menu'=> 'Top Menu Location',
		)
);


//Video custom post type
function video_post_type() { 
	$args = array(
			'labels' => array(
					'name' => 'Video Post',
					'singular_name' => 'Video Post',
					'add_new' => 'Add New Video Post',
					'add_new_item' => 'Add New Video Post',
					'edit_item' => 'Edit Video Post',
					'new_item' => 'New Video Post',
					'all_items' => 'All Video Post',
					'view_item' => 'View Video Post',
					'search_items' => 'Search Video Post',
					'not_found' =>  'No Video Post Found',
					'not_found_in_trash' => 'No Video Post found in Trash', 
					'parent_item_colon' => '',
					'menu_name' => 'Video Post',
			),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-format-video',
			'supports' => array('title','editor','thumbnail' ),
			'capability_type' => 'post',
      'taxonomies'  => array( 'category' ),
			'menu_position' => 6,
	);
	register_post_type('video_post', $args);
}
add_action('init', 'video_post_type');


//Infographic custom post type 
function infographic_post_type() { 
	$args = array(
			'labels' => array(
					'name' => 'Infographic Post',
					'singular_name' => 'Infographic Post',
					'add_new' => 'Add New Infographic Post',
					'add_new_item' => 'Add New Infographic Post',
					'edit_item' => 'Edit Infographic Post',
					'new_item' => 'New Infographic Post',
					'all_items' => 'All Infographic Post',
					'view_item' => 'View Infographic Post',
					'search_items' => 'Search Infographic Post',
					'not_found' =>  'No Infographic Post Found',
					'not_found_in_trash' => 'No Infographic Post found in Trash', 
					'parent_item_colon' => '',
					'menu_name' => 'Infographic Post',
			),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-images-alt',
			'supports' => array('title','editor','thumbnail' ),
			'capability_type' => 'post',
      'taxonomies'  => array( 'category' ),
			'menu_position' => 5,
	);

	register_post_type('infographic_post', $args);
}
add_action('init', 'infographic_post_type');

// Feature image
add_theme_support( 'post-thumbnails' );



?>