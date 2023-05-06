<?php
// 吹き出しショートコード
get_template_part('inc/fukidashi');


// css js 読み込み
add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_js');

function add_styles()
{
    wp_enqueue_style(
        'bootstrap_css',
        get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css'
    );
    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'
    );
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/style.css',
        array('bootstrap_css'),
        '1.0'
    );
    wp_enqueue_style(
        'footer_css',
        get_template_directory_uri() . '/assets/css/footer.css',
        array('bootstrap_css'),
        '1.0'
    );
    wp_enqueue_style(
        'nav_css',
        get_template_directory_uri() . '/assets/css/navbar.css',
        array('bootstrap_css'),
        '1.0'
    );

    // ホームのcss
    if (is_home()) {
        wp_enqueue_style(
            'home_css',
            get_template_directory_uri() . '/assets/css/home.css',
            array('bootstrap_css'),
            '1.0'
        );
    }
    // single.phpのcss
    if (is_single()) {
        wp_enqueue_style(
            'single_css',
            get_template_directory_uri() . '/assets/css/single.css',
            array('bootstrap_css','nav_css'),
            '1.0'
        );
    }
    // archive.phpのcss
    if (is_archive()) {
        wp_enqueue_style(
            'archive_css',
            get_template_directory_uri() . '/assets/css/archive.css',
            array('bootstrap_css','nav_css'),
            '1.0'
        );
    }
}

function add_js()
{
    wp_enqueue_script(
        'bootstrap_js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'
    );
    wp_enqueue_script(
        'fadeInAni_js',
        get_template_directory_uri() . '/assets/js/fadeInAni.js',
        array(),
        false,
        true
    );
    // navのcss
    wp_enqueue_script(
        'navbar_js',
        get_template_directory_uri() . '/assets/js/navbar.js',
        array(),
        false,
        true
    );
}

// theme support

add_action('after_setup_theme', 'custom_theme_support');

function custom_theme_support()
{

    add_theme_support('automatic-feed-links');

    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    add_theme_support(
        'html5',
        array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script'
        )
    );

    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');

    add_theme_support('align-wide');
    add_theme_support('wp_block-styles');

    add_theme_support('responsive-embeds');

    global $content_width;
    if ( ! isset($content_width) ){
        $content_width = 960;
    }

}
