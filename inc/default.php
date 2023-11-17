<?php


/**
 * 
 * This file for wordpress default function call
 * 
 */



// Enable Theme Title
add_theme_support('title-tag');


// Add theme support for post thumbnails
add_theme_support('post-thumbnails', ['page', 'post', 'service']);
add_image_size('post-thumbnails', 970, 350, true);

// Excerpt Length
function ramify_excerpt_more($more)
{
    global $post;
    $html = ' [...] <br/> <br/> <a href="' . get_permalink($post->ID) . '" class="btn btn-primary readmore-btn">' . 'Read More' . '</a>';
    return $html;
}
add_filter('excerpt_more', 'ramify_excerpt_more');


function ramify_excerpt_length($length) {
    $custom = get_theme_mod( 'ramify_theme_post_excerpt_length' );
    if (is_admin()) {
        return $length;
    }
    return $custom;
}

add_filter('excerpt_length', 'ramify_excerpt_length', 999);


// Enable Pagination 
function ramify_pagination(){
    global $wp_query;

    $big = 999999999;
    $paginate_links = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => __('Previous', 'ramify'),
        'next_text' => __('Next', 'ramify'),
        'type' => 'array', // Return an array instead of HTML
    ));

    if ($paginate_links) {
        echo '<nav aria-label="..." class="mt-5"><ul class="pagination">';
        
        foreach ($paginate_links as $link) {
            // Add Bootstrap classes to each link
            $link = str_replace('page-numbers', 'page-link', $link);
            $link = str_replace('prev', 'page-item', $link);
            $link = str_replace('next', 'page-item', $link);
            $link = str_replace('current', 'page-item active', $link);

            echo '<li class="page-item">' . $link . '</li>';
        }

        echo '</ul></nav>';
    }
}
