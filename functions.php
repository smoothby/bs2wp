<?php

/*
 ENQUEUE SCRIPTS AND STYLES
*/

if (!function_exists('bs2wp_theme_setup')) {

    /* INITIALIZE THE THEME */
    function bs2wp_theme_setup()
    {

        load_theme_textdomain('bs2wp', get_template_directory() . '/languages');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption'
            )
        );
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('responsive-embeds');

        register_nav_menus(
            array(
                'primary' => esc_html__('Primary Menu', 'bs2wp')
            )
        );

    }
}

add_action('after_setup_theme', 'bs2wp_theme_setup');


function bs2wp_assets()
{

    // CSS STYLES
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'), array(), 'v5.1.1', 'all');
    wp_enqueue_style('flaticon', get_theme_file_uri('assets/font/flaticon.css'), array(), '', 'all');

    // MAIN THEME CSS
    wp_enqueue_style('bs2wp', get_stylesheet_uri(), array('bootstrap'), 'v1.0', 'all');

    // JAVASCRIPT
    wp_enqueue_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'), array(), 'v5.1.1', true);
    wp_enqueue_script('bs2wp-js', get_theme_file_uri('assets/js/main-script.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectmenu'), '1.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {

        wp_enqueue_script('comment-reply');

    }

}

add_action('wp_enqueue_scripts', 'bs2wp_assets');

