<?php
//my functions page:

function my_excerpt_length() {

    return 25;
}

add_filter('excerpt_length', 'my_excerpt_length');

set_post_thumbnail_size(200, 200);
add_theme_support('post-thumbnails');

// Resgister our navigation
register_nav_menus(array(
    'primary'=> 'Primary Menu',
    'footer' => 'Footer Menu'
));

// enqueuing my scripts
function my_theme_scripts() {
wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

// sidebar, registering widget
function init_widgets() {
register_sidebar(array(
'name' => 'Sidebar Blog',
'id' => 'sidebar-blog',
'before_widget' => '<div class="inner-widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));

register_sidebar(array(
'name' => 'Sidebar About',
'id' => 'sidebar-about',
'before_widget' => '<div class="inner-widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));

register_sidebar(array(
'name' => 'Sidebar Contact',
'id' => 'sidebar-contact',
'before_widget' => '<div class="inner-widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));

register_sidebar(array(
'name' => 'Sidebar Footer',
'id' => 'sidebar-footer',
'before_widget' => '<div class="row">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));

register_sidebar(array(
'name' => 'Sidebar Fantasy',
'id' => 'sidebar-fantasy',
'before_widget' => '<div class="inner-widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));

register_sidebar(array(
'name' => 'Sidebar Fiction',
'id' => 'sidebar-fiction',
'before_widget' => '<div class="inner-widget">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));

register_sidebar(array(
'name' => 'Sidebar Others',
'id' => 'sidebar-others',
'before_widget' => '<div class="inner-widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));

} // end function init widgets
// add action AFTER the function

add_action('widgets_init', 'init_widgets');

//  Functions to display a list of all the shortcodes
function diwp_get_list_of_shortcodes(){
 
    // Get the array of all the shortcodes
    global $shortcode_tags;
     
    $shortcodes = $shortcode_tags;
     
    // sort the shortcodes with alphabetical order
    ksort($shortcodes);
     
    $shortcode_output = "<ul>";
     
    foreach ($shortcodes as $shortcode => $value) {
        $shortcode_output = $shortcode_output.'<li>['.$shortcode.']</li>';
    }
     
    $shortcode_output = $shortcode_output. "</ul>";
     
    return $shortcode_output;
 
}
add_shortcode('get-shortcode-list', 'diwp_get_list_of_shortcodes');

function today_date() {
    return date('l\, F jS Y');
}

add_shortcode('current_date', 'today_date');

add_filter('widget_text', 'do_shortcode');

// Fix to remove additional CLOSING </p> tag after our image:
remove_filter( 'the_content', 'wpautop' );

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );