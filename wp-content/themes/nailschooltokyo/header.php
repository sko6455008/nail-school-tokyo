<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Konkhmer+Sleokchher&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8 logo-container">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo.png" alt="Nail School Tokyo">
                </a>
            </div>
            <div class="col-2 right-icons">
                <div class="right-container">
                    <button class="menu-toggle">&#9776;</button>
                </div>
            </div>
        </div>
    </header>

    <nav class="sp-menu" role="navigation" aria-label="メニュー">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => false,
            'items_wrap' => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>'
        ));
        ?>
        <button class="menu-close">×</button>

        <div class="menu-sns">
            <a href="https://www.instagram.com/nailschooltokyo/" target="_blank" class="sns-button fascina-button">
                <i class="fab fa-instagram"></i>
                <span>Fascina</span>
            </a>
            <a href="https://www.instagram.com/twelor/" target="_blank" class="sns-button twelor-button">
                <i class="fab fa-instagram"></i>
                <span>Twelor</span>
            </a>
            <a href="https://lin.ee/nailschooltokyo" target="_blank" class="sns-button line-button">
                <i class="fab fa-line"></i>
                <span>LINEで無料相談する</span>
            </a>
        </div>
    </nav>

    <div class="menu-overlay"></div>
