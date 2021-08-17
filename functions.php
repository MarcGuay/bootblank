<?php
/**
 * Theme functions and definitions
 *
 */

define('THEME_DIR_PATH', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());

require THEME_DIR_PATH . '/includes/theme-setup.php';
require THEME_DIR_PATH . '/includes/widgets.php';
require THEME_DIR_PATH . '/includes/enqueue-scripts.php';
require THEME_DIR_PATH . '/includes/bootstrap-wp-navwalker.php';