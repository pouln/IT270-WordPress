<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// unregister the original blanksate sidebar
function remove_my_widgets(){
   unregister_sidebar( 'primary-widget-area' );
}
// Important, used pirority 11 (lower priority) because the child is called before
// the parent theme
add_action( 'widgets_init', 'remove_my_widgets', 11 );

// register my sidebar
function new_blankslate_widgets_init() {
   register_sidebar( array(
   'name' => esc_html__( 'Sidebar Blog', 'blankslate' ),
   'id' => 'sidebar-blog',
   'before_widget' => '<div class="inner-widget">',
   'after_widget' => '</div>',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
   ));

   // Sidebar Seattle
   register_sidebar( array(
   'name' => esc_html__( 'Sidebar Seattle', 'blankslate' ),
   'id' => 'sidebar-seattle',
   'before_widget' => '<div class="inner-widget">',
   'after_widget' => '</div>',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
   ));

   // Sidebar Denver
   register_sidebar( array(
   'name' => esc_html__( 'Sidebar Denver', 'blankslate' ),
   'id' => 'sidebar-denver',
   'before_widget' => '<div class="inner-widget">',
   'after_widget' => '</div>',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
   ));

}
add_action( 'widgets_init', 'new_blankslate_widgets_init' );

// add a body class
// allow to style Company ABC's home page differently from your Branches' pages
function customBodyClass( $classes ) {
global $current_blog;
$classes[] = 'website-'.$current_blog->blog_id;
return $classes;
}
add_filter( 'body_class', 'customBodyClass' );