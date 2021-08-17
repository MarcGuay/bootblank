<?php 
if ( ! function_exists( 'bootblank_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function bootblank_setup() {

    // Add html5 behavior for some theme elements
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

    /**
     * Add default posts and comments RSS feed links to head
    */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for Post Thumbnails on posts and pages
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
    */
    add_theme_support( 'post-thumbnails' );

    /**
     * Make theme available for translation
     * Translations can be filed in the /languages/ directory
     * If you're building a theme based on bootblank, use a find and replace
     * to change 'bootblank' to the name of your theme in all the template files
    */
    load_theme_textdomain( 'bootblank', THEME_DIR_PATH . '/languages' );

    /**
     * This theme uses wp_nav_menu() in one location.
    */
    register_nav_menus( array(
        'primary'  => __( 'Main Menu', 'bootblank' ),
    ) );

}
endif; // bootblank_setup
add_action( 'after_setup_theme', 'bootblank_setup' );