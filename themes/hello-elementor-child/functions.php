<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')):
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('hello-elementor', 'hello-elementor', 'hello-elementor-theme-style', 'hello-elementor-header-footer'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);

// END ENQUEUE PARENT ACTION
function my_theme_enqueue_styles()
{
    wp_enqueue_style('frontend1', get_stylesheet_directory_uri() . '/assets/css/frontend1.output.css');
    wp_enqueue_style('frontend2', get_stylesheet_directory_uri() . '/assets/css/frontend2.output.css');

    wp_enqueue_script('cdn-tailwind', 'https://cdn.tailwindcss.com', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function add_svg_support($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'add_svg_support');
