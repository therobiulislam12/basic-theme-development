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
};
add_action('widgets_init', 'ramify_widgets_function');