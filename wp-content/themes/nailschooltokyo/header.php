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
            <div class="col-2 logo-container">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo.png" alt="Nail School Tokyo">
                </a>
            </div>
            <div class="col-10 right-icons">
                <div class="right-container">
                    <nav class="desktop-menu" role="navigation" aria-label="デスクトップメニュー">
                        <ul>
                            <li><a href="#about">スクールについて</a></li>
                            <li><a href="#course">コース内容</a></li>
                            <li><a href="#skills">学べる技術</a></li>
                            <li><a href="#procedure">入校手順</a></li>
                            <li><a href="#access">アクセス</a></li>
                            <li><a href="#qa">よくある質問</a></li>
                        </ul>
                    </nav>
                    <!-- ハンバーガーメニューボタン -->
                    <button class="menu-toggle">&#9776;</button>
                </div>
            </div>
        </div>
    </header>

    <nav class="sp-menu" role="navigation" aria-label="メニュー">
        <ul>
            <li><a href="#home">ホーム</a></li>
            <li><a href="#about">スクールについて</a></li>
            <li><a href="#course">コース内容</a></li>
            <li><a href="#skills">学べる技術</a></li>
            <li><a href="#procedure">入校手順</a></li>
            <li><a href="#access">アクセス</a></li>
            <li><a href="#qa">よくある質問</a></li>
        </ul>
        <button class="menu-close">×</button>
    </nav>

    <div class="menu-overlay"></div>
