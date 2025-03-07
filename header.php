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
        <a href="<?php echo home_url(); ?>" class="z-10">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/takahata-logo.svg" alt="<?php bloginfo('name'); ?> Logo" class="navbar__logo">
        </a>
        
        <div 
            class="drawer"
            x-data="drawer"
            @click.outside="setDrawerState(false)"
        >
            <div class="flex gap-2 md:gap-3 items-center">
                <span class="drawer__txt-btn" :class="{ 'text-primary': drawerOpen }">MENU</span>
                <button class="drawer__btn" :class="{ 'is-open': drawerOpen }" @click="setDrawerState(!drawerOpen)"><span></span></button>
            </div>
            <nav 
                class="drawer__menu" 
                :class="{ 'is-open': drawerOpen }"
            >
                <ul class="navlinks">
                    <?php
                    include get_template_directory() . '/parts/navlinks.php';

                    $current_url = untrailingslashit(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

                    foreach ($navlinks as $label => $url) :
                        $menu_path = untrailingslashit(parse_url($url, PHP_URL_PATH));

                        $is_active = false;

                        if ($label === 'TOP') {
                            $is_active = is_front_page();
                        }

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