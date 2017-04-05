<?php

add_action( 'wp_enqueue_scripts', 'pique_parent_theme_enqueue_styles' );

function pique_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'pique-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'pique-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'pique-style' )
	);

}