<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="site-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu-container" aria-controls="main-menu-container" aria-expanded="false" aria-label="<?php _e('Toggle navigation', 'bootblank') ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div id="main-menu-container" class="collapse navbar-collapse">
                
                <?php wp_nav_menu(
                    array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => false,
                        'menu_class'        => 'navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'menu_id'           => 'main-menu',
                        'walker'            => new wp_bootstrap_navwalker()
                    )
                ); ?>
            </div>
        </nav>
    </div>
</header>
<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12">