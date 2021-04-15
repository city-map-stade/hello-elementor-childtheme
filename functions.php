<?php

/* Function to enqueue stylesheet from parent theme */

function child_enqueue__parent_scripts() {

wp_enqueue_style( ‘parent’, get_template_directory_uri().’/style.css’ );

}

add_action( ‘wp_enqueue_scripts’, ‘child_enqueue__parent_scripts’);

/* FUNCTION TO DEACTIVATE GOOGLE FONT LOADING FROM AN EXTERNAL SOURCE */
add_filter( 'elementor/frontend/print_google_fonts', '__return_false' );