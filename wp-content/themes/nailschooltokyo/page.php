<?php get_header(); ?>

<main class="site-main">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="page-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
                <header class="page-header">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                </header>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="page-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </article>
            
            <?php
            // コメント表示（固定ページでコメントが有効な場合）
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
            
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
