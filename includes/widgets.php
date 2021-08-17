<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function footer_text_widget() {

    register_sidebar( array(
        'name'          => 'Footer Text',
        'id'            => 'footer_text',
    ) );

}
add_action( 'widgets_init', 'footer_text_widget' );
