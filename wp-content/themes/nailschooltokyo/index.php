<?php get_header(); ?>

<!-- ヒーローセクション -->
<section class="hero-section">
    <div class="hero-container">
        <div class="hero-content">
            <!-- 背景画像 -->
            <div class="hero-background">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/person.png" alt="ネイリスト" class="hero-image">
                
                <!-- キャッチコピー -->
                <div class="catchcopy-overlay">
                    <div class="chat-bubble">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/chat.png" alt="吹き出し" class="chat-image">
                        <div class="chat-text">
                            <span class="main-text">売れっ子ネイリスト！</span>
                        </div>
                    </div>
                </div>
                
                <!-- ネイルアート画像 -->
                <div class="nail-art-overlay">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Group 57.png" alt="ネイルアート" class="nail-art-image">
                </div>
                
                <!-- オフ込みテキスト -->
                <div class="off-text-overlay">
                    <p class="off-text">オフ込み<span class="highlight-number">60</span>分・<span class="highlight-number">90</span>分入客</p>
                </div>
                
                <!-- LINEお問い合わせボタン -->
                <div class="line-button-overlay">
                    <a href="#" class="line-button">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/line.png" alt="LINE" class="line-icon">
                        <span class="line-text">LINEでお問い合わせ</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<main class="site-main">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="posts-container">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-content">
                            <header class="post-header">
                                <h2 class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="post-meta">
                                    <span class="post-date"><?php echo get_the_date(); ?></span>
                                    <span class="post-author">投稿者: <?php the_author(); ?></span>
                                    <?php if (has_category()) : ?>
                                        <span class="post-categories">カテゴリー: <?php the_category(', '); ?></span>
                                    <?php endif; ?>
                                </div>
                            </header>
                            
                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <footer class="post-footer">
                                <a href="<?php the_permalink(); ?>" class="read-more">続きを読む</a>
                            </footer>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <?php
            // ページネーション
            the_posts_pagination(array(
                'prev_text' => '前のページ',
                'next_text' => '次のページ',
            ));
            ?>
            
        <?php else : ?>
            <div class="no-posts">
                <h2>投稿が見つかりません</h2>
                <p>申し訳ございませんが、お探しのコンテンツが見つかりませんでした。</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
