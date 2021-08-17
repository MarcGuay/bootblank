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
        <div class="row">
            <div class="col-12">
                <div class="site-branding">
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="navbar-container">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#main-menu-container" aria-controls="main-menu-container" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-label"><?php _e('Menu', '_tk') ?></span>
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div id="main-menu-container" class="navbar-collapse offcanvas-collapse">
            
            <div class="mobile-menu-header d-lg-none">
                <a href="#" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#main-menu-container" aria-controls="main-menu-container" aria-expanded="true" aria-label="Toggle navigation">×</a>
                <?php get_search_form() ?>
            </div>
            
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
      </div>
    </nav>
</div>

<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
