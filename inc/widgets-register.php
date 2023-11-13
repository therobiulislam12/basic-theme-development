<?php


// Sidebar register function
function ramify_widgets_function(){
    register_sidebar(array(
        'name'          => __('Main Widget Area', 'ramify'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'ramify'),
        'before_widget' => '<div class="widget child_widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title">',
        'after_title'   => '</h2>',
    ));    
    register_sidebar(array(
        'name'          => __('Footer 1 Area', 'ramify'),
        'id'            => 'footer-1',
        'description'   => __('What you want add here for your footer one', 'ramify'),
        'before_widget' => '<div class="widget child_widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'          => __('Footer 2 Area', 'ramify'),
        'id'            => 'footer-2',
        'description'   => __('What you want add here for your footer two', 'ramify'),
        'before_widget' => '<div class="widget child_widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'          => __('Footer 3 Area', 'ramify'),
        'id'            => 'footer-3',
        'description'   => __('What you want add here for your footer three', 'ramify'),
        'before_widget' => '<div class="widget child_widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title">',
        'after_title'   => '</h2>',
    ));
};
add_action('widgets_init', 'ramify_widgets_function');