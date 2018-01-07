<?php

/**
 * Base Theme functions and definitions
 *
 */


/***Sidebar***/
function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Secondary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'themename_widgets_init' );

/***Register menu***/
register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'BaseTheme' ),
    'secondary' => __( 'Secondary Menu', 'BaseTheme' )
) );

/**Add options page***/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
?>