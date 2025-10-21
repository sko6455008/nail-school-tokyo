<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">
        <div class="site-branding">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="<?php bloginfo('name'); ?>" class="site-logo">
            </a>
        </div>
        
        <nav class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="menu-toggle-icon"></span>
                <span class="menu-toggle-icon"></span>
                <span class="menu-toggle-icon"></span>
            </button>
            
            <div class="menu-wrapper">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'nav-menu',
                    'fallback_cb'    => false,
                ));
                ?>
            </div>
        </nav>
    </div>
</header>
