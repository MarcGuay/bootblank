<?php 
/**
 * Enqueue scripts and styles
 */
function bootblank_scripts() {

    // load Bootstrap 
    wp_enqueue_style( 'bootblank-bootstrap', THEME_DIR_URI . '/assets/resources/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_script('bootblank-bootstrapjs', THEME_DIR_URI . '/assets/resources/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true );

    // load theme styles last so we can override
    wp_enqueue_style( 'theme-style', THEME_DIR_URI . '/assets/css/styles.css', null, filemtime(THEME_DIR_PATH.'/assets/css/styles.css') );

}
add_action( 'wp_enqueue_scripts', 'bootblank_scripts', 11 );