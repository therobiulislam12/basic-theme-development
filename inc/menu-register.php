<?php 


/**
 * 
 * This file used for menu registration
 * 
 */

 /**
  * WordPress Menu Register
  */
  function ramify_register_nav_menu(){
    register_nav_menu('main_menu', __('Header', 'ramify'));
}
add_action('after_setup_theme', 'ramify_register_nav_menu');