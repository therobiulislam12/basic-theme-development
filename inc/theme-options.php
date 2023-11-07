<?php 

/**
 * 
 * This file contains the theme options and manage theme customizer option
 * 
 */


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


    /**
     * 
     * Create footer area section
     * 
     */

    $wp_customize->add_section('ramify_footer_area', [
      'title' => __('Footer Area', 'ramify'),
      'description' => 'Customize Your Footer Area'
    ]);

    $wp_customize->add_setting('ramify_copyright_text', [
      'default' => 'Copyright © 2020 Ramify Digital | All Rights Reserved'
    ]);

    $wp_customize->add_control('ramify_copyright_text', [
      'label'=> 'Change your copyright text',
       'description'=> 'Make your theme what you want',
       'section'=> 'ramify_footer_area',
       'setting'=> 'ramify_copyright_text',
    ]);
  };
  add_action('customize_register', 'ramify_customizar_register');