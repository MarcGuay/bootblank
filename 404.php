<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

    <section class="content-padder error-404 not-found">
        <header>
            <h2 class="page-title"><?php _e( 'Oops! Something went wrong here.', 'bootblank' ); ?></h2>
        </header>
        <div class="page-content">
            <p><?php _e( 'Nothing could be found at this location. Maybe try a search?', 'bootblank' ); ?></p>
            <?php get_search_form(); ?>
        </div>
    </section>

<?php get_footer(); ?>