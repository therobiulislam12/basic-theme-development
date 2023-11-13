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

// Excerpt Length
function ramify_excerpt_more( $more ) {
    global $post;
    $html = '<br/> <br/> <a href="'.get_permalink($post->ID) .'" class="btn btn-primary readmore-btn">' . 'Read More' . '</a>';
    return $html;
}
add_filter( 'excerpt_more', 'ramify_excerpt_more');