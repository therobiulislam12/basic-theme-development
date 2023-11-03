<?php 
/**
 * My Theme Functions
 * 
 * @package ramifydigital
 */

 // Enable Theme Title
 add_theme_support( 'title-tag' );


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



//  Theme Function
 function ramify_customizar_register($wp_customize){
   $wp_customize->add_section('ramify_header_area', array(
      'title' => __('Header Area', 'ramify'),
      'description' => __('Customize Header Area', 'ramify')
   ));

   $wp_customize->add_setting('ramify_logo', array(
      'default' => get_bloginfo('template_directory'). '/assets/images/logo.png',
   ));

   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ramify_logo', array(
      'label' => 'Logo Upload',
      'section' => 'ramify_header_area',
      'setting' => 'ramify_logo'
   )));
 };
 add_action('customize_register', 'ramify_customizar_register');