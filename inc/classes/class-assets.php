<?php

/**
 * Enque theme assets
 * 
 * @package AmilasMinCV
 */

namespace AMILASMINCV\INC;

use AMILASMINCV\Inc\Traits\Singleton;

class Assets
{
    use Singleton;
    protected function __construct()
    {

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // action and filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        $main_css_path = AMILASMINCV_DIR_URI . '/assets/css/main.css';
        $boxicons = 'https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css';
        // $unicons = 'https://unicons.iconscout.com/release/v4.0.8/css/line.css';
        // $swiper = 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css';

        wp_register_style('main', $main_css_path, [], filemtime(AMILASMINCV_DIR_PATH . '/assets/css/main.css'), 'all');
        wp_register_style('boxicons', $boxicons, [], 10, 'all');
        // wp_register_style('unicons', $unicons, [], 4, 'all');
        // wp_register_style('swiper', $swiper, [], 10, 'all');

        // Enqueue styles
        wp_enqueue_style('main');
        wp_enqueue_style('boxicons');
        // wp_enqueue_style('unicons');
        // wp_enqueue_style('swiper');
    }
    public function register_scripts()
    {
        $main_js = AMILASMINCV_DIR_URI . '/assets/js/main.js';
        // $swiper_js = 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js';

        wp_register_script('main', $main_js, [], filemtime(AMILASMINCV_DIR_PATH . '/assets/js/main.js'), true);
        // wp_register_script('swiper', $swiper_js, [], 10, ['strategy'  => 'defer', 'in_footer' => true]);

        // Enqueue Scripts.
        wp_enqueue_script('main');
        // wp_enqueue_script('swiper');
    }
}
