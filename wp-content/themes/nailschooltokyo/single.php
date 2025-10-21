<?php get_header(); ?>

<main class="site-main">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                <header class="post-header">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="post-meta">
                        <span class="post-date"><?php echo get_the_date(); ?></span>
                        <span class="post-author">投稿者: <?php the_author(); ?></span>
                        <?php if (has_category()) : ?>
                            <span class="post-categories">カテゴリー: <?php the_category(', '); ?></span>
                        <?php endif; ?>
                    </div>
                </header>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
                
                <footer class="post-footer">
                    <?php if (has_tag()) : ?>
                        <div class="post-tags">
                            <strong>タグ:</strong> <?php the_tags('', ', ', ''); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="post-navigation">
                        <?php
                        the_post_navigation(array(
                            'prev_text' => '前の投稿: %title',
                            'next_text' => '次の投稿: %title',
                        ));
                        ?>
                    </div>
                </footer>
            </article>
            
            <?php
            // コメント表示
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
            
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
