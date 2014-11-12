<?php

// Add parent style stylesheet
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


// Register menus
register_nav_menus( array(
	'header_menu' => 'Header Menu'
) );

?>