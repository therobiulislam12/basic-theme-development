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

//  Theme Function
 function ramify_customizar_register($wp_customize){

   /**
    * This is default category Site Identity section control
    * Add Here Logo Option for Menu Logo Change
    * 
    */
   $wp_customize->add_setting('ramify_logo', array(
      'default' => get_bloginfo('template_directory'). '/assets/images/logo.png',
   ));

   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ramify_logo', array(
      'label' => 'Logo Upload',
      'description' => 'Upload Your Custom logo click on change image or default logo',
      'section' => 'title_tagline',
      'setting' => 'ramify_logo'
   )));

   /**
    *
    *  Create Header Area Custom Section
    *  @since 1.0.0
    *
    */
    $wp_customize->add_section('ramify_header_area', array(
      'title' => __('Header Area', 'ramify'),
      'description' => 'Customize Header Area'
   ));
   $wp_customize->add_setting('ramify_menu_position',[
      'default' => 'right_menu'
   ]);
   $wp_customize->add_control('ramify_menu_position', [
      'label'=> __('Menu Position','ramify'),
      'description'=> 'Change you menu position what you want',
      'section'=> 'ramify_header_area',
      'setting'=> 'ramify_menu_position',
      'type' => 'radio',
      'choices' => [
         'left_menu' => __('Left Menu', 'ramify'),
         'center_menu' => __('Center Menu', 'ramify'),
         'right_menu' => __('Right Menu', 'ramify')
      ]
   ]);
 };
 add_action('customize_register', 'ramify_customizar_register');



 /**
  * WordPress Menu Register
  */
 function ramify_register_nav_menu(){
     register_nav_menu('main_menu', __('Header', 'ramify'));
 }
 add_action('after_setup_theme', 'ramify_register_nav_menu');