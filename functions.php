<?php

/**
 * Theme Functions
 * 
 * @package AmilasMinCV
 */

if (!defined('AMILASMINCV_DIR_PATH')) {
   define('AMILASMINCV_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('AMILASMINCV_DIR_URI')) {
   define('AMILASMINCV_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
// echo '<pre>';
// print_r(AMILAMINCV_DIR_PATH);
// echo '</br>';
// print_r(AMILAMINCV_DIR_URI);

// wp_die();

// get autoloader 
require_once AMILASMINCV_DIR_PATH . '/inc/helpers/autoloader.php';

// Bootsrap Theme
function amilasmincv_get_theme_instance()
{
   \AMILASMINCV\Inc\Theme::get_instance();
}
amilasmincv_get_theme_instance();
