<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header 
    class="fixed top-0 w-full z-50">
    <div class="navbar">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/takahata-logo.svg" alt="<?php bloginfo('name'); ?> Logo" class="navbar__logo">
        </a>
        
        <div 
            class="drawer"
            x-data="drawer"
            @click.outside="setDrawerState(false)"
        >
            <div class="flex gap-3 items-center">
                <span class="drawer__txt-btn" :class="{ 'text-primary': drawerOpen }">MENU</span>
                <button class="drawer__btn" :class="{ 'is-open': drawerOpen }" @click="setDrawerState(!drawerOpen)"><span></span></button>
            </div>
            <nav 
                class="drawer__menu" 
                :class="{ 'is-open': drawerOpen }"
            >
                <ul class="navlinks">
                    <?php
                    $menu_items = [
                        'TOP' => home_url(),
                        'ABOUT' => site_url('/about'),
                        'SERVICE' => site_url('/service'),
                        'NEWS' => site_url('/news'),
                        'CONTACT' => site_url('/contact')
                    ];

                    // Ambil URL path saat ini tanpa domain & hilangkan trailing slash
                    $current_url = untrailingslashit(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

                    foreach ($menu_items as $label => $url) :
                        // Ambil path URL menu & hilangkan trailing slash
                        $menu_path = untrailingslashit(parse_url($url, PHP_URL_PATH));

                        // Default: Tidak aktif
                        $is_active = false;

                        // Jika halaman saat ini adalah homepage, hanya "TOP" yang aktif
                        if ($label === 'TOP') {
                            $is_active = is_front_page();
                        }
                        // Jika halaman saat ini persis sama dengan menu path atau merupakan sub-halaman
                        elseif (!empty($menu_path) && strpos($current_url, $menu_path) === 0) {
                            $is_active = true;
                        }
                    ?>
                        <li class="<?php echo $is_active ? 'current-link' : ''; ?>">
                            <a @click="setDrawerState(false)" href="<?php echo esc_url($url); ?>"><?php echo esc_html($label); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>