<?php
// functions.php - Setup theme features
function custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'custom-theme'),
    ));
}
add_action('after_setup_theme', 'custom_theme_setup');

// Enqueue styles and scripts
function custom_theme_scripts() {
    wp_enqueue_style('acumin-variable', 'https://use.typekit.net/prt1jgq.css');
    wp_enqueue_style('custom-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

// Load JS
function custom_theme_enqueue_scripts() {
    // Enqueue Typekit script first
    wp_enqueue_script(
        'typekit',
        'https://use.typekit.net/rkd4qcb.js',
        array(),
        null,
        false // Load in head
    );
    wp_add_inline_script('typekit', "try{Typekit.load({ async: true });}catch(e){}", 'after');

    // wp_enqueue_script(
    //     'swup',
    //     get_template_directory_uri() . '/assets/js/Swup.umd.js',
    //     array(), 
    //     '4.8.1',
    //     true
    // );
    wp_enqueue_script(
        'gsap-core',
        get_template_directory_uri() . '/assets/js/gsap/gsap.min.js',
        array(), 
        '3.12.7',
        true
    );

    wp_enqueue_script(
        'gsap-scrolltrigger',
        get_template_directory_uri() . '/assets/js/gsap/ScrollTrigger.min.js',
        array('gsap-core'), 
        '3.12.7',
        true
    );

    wp_enqueue_script(
        'lenis',
        get_template_directory_uri() . '/assets/js/lenis.min.js',
        array(),
        null,
        true
    );

    // Enqueue Alpine.js with defer
    wp_enqueue_script(
        'alpinejs',
        get_template_directory_uri() . '/assets/js/alpine.js',
        array(), // Dependencies (if any)
        '3.14.8',
        true // Load at footer
    );

    wp_enqueue_script(
        'custom-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('gsap-core', 'gsap-scrolltrigger', 'lenis', 'alpinejs'), 
        '1.0',
        true
    );

    // add atribut defer to Alpine.js script
    add_filter('script_loader_tag', function($tag, $handle) {
        if ($handle === 'alpinejs') {
            return str_replace('src=', 'defer src=', $tag);
        }
        return $tag;
    }, 10, 2);
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_scripts');


function enqueue_swiper_on_specific_pages() {
    if (is_page(array('about', 'contact'))) { 

        wp_enqueue_style(
            'swipecss', 
            get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', 
            array(), 
            null
        );

        wp_enqueue_script(
            'swiper', 
            get_template_directory_uri() . '/assets/js/swiper-bundle.min.js',
            array(), 
            null, 
            true
        );

        wp_enqueue_script(
            'custom-swiper', 
            get_template_directory_uri() . '/assets/js/custom-swiper.js',
            array('swiper'), 
            null, 
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_on_specific_pages');
?>
