<?php

// Add parent style stylesheet
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// Limit excerpt size
function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// Register menus
register_nav_menus( array(
	'header_menu' => 'Header Menu',
	'institute_menu' => 'Institute Menu',
	'research_menu' => 'Research Menu',
	'innovation_menu' => 'Innovation Menu',
	'infrastructures_menu' => 'Infrastructures Menu',
	'utilities_menu' => 'Utilities Menu'
) );

?>