<?php 

/**
 * 
 * This file is used to register stylesheets and scripts
 * 
 */

 // Enable Theme Style and Script
 function ramify_css_and_js_file_calling(){

    // CSS 
    wp_enqueue_style( 'ramify-style', get_stylesheet_uri()); // Main Style Sheet Enable

    wp_enqueue_style( 'ramify-custom-style', get_template_directory_uri() . '/assets/css/custom.css', false, '1.0.0', 'all');

    wp_enqueue_style( 'ramify-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', false, '1.0.0', 'all');


    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'ramify-main-script', get_template_directory_uri() . '/assets/js/main.js', array( ), '1.0.0', true);

    wp_enqueue_script( 'ramify-bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.js', array( ), '1.0.0', true);

 }
 add_action('wp_enqueue_scripts', 'ramify_css_and_js_file_calling');

 /*
  * Add Google font
  *
  * @return void
  *
  * @since 1.0.0
  * */
function ramify_add_google_font() {
    wp_enqueue_style('ramify-google-font', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol:wght@400;500&family=Oswald:wght@400;600&display=swap');
}
add_action('wp_enqueue_scripts', 'ramify_add_google_font');