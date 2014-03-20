<?php


/**
 * Hide the admin bar
 */
show_admin_bar( false );


/**
 * Enable featured images for all posts
 */
add_theme_support( 'post-thumbnails'); // Add it for everything


/**
 * Add post formats to differentiate content
 */
add_theme_support( 'post-formats', array( 'video', 'image', 'aside' ) );
add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );


/**
 * Disable Jetpack open graph tags in favor of dedicated plugin
 */
add_filter( 'jetpack_enable_opengraph', '__return_false', 99 );


/**
 * Create a custom menu
 */
function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );



/**
 * Register our widgetized areas.
 */
function custom_widgets_init() {

    register_sidebar( array(
        'name' => 'Right Widget Column Top',
        'id' => 'right_widget_col_top',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
    
    register_sidebar( array(
        'name' => 'Right Widget Column Bottom',
        'id' => 'right_widget_col_bottom',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => 'Bottom Widget Row',
        'id' => 'bottom_widget_row',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

}
add_action( 'widgets_init', 'custom_widgets_init' );



/**
 * Use shorter excerpts
 */
function custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



/**
 * Fix video embed code
 */
function add_video_wmode_transparent($html, $url, $attr) {
if ( strpos( $html, "<embed src=" ) !== false )
   { return str_replace('</param><embed', '</param><param name="wmode" value="opaque"></param><embed wmode="opaque" ', $html); }
elseif ( strpos ( $html, 'feature=oembed' ) !== false )
   { return str_replace( 'feature=oembed', 'feature=oembed&amp;wmode=opaque', $html ); }
else
   { return $html; }
}
add_filter( 'embed_oembed_html', 'add_video_wmode_transparent', 10, 3);


/**
 * Add classes to post list nav links
 */
add_filter('next_posts_link_attributes', 'posts_link_next');
add_filter('previous_posts_link_attributes', 'posts_link_previos');
function posts_link_next() { return 'class="next"'; }
function posts_link_previos() { return 'class="previous"'; }

