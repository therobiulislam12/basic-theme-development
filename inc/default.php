<?php


/**
 * 
 * This file for wordpress default function call
 * 
 */



// Enable Theme Title
 add_theme_support( 'title-tag' );


// Add theme support for post thumbnails
add_theme_support('post-thumbnails', ['page', 'post']);
add_image_size('post-thumbnails', 970, 350,true);