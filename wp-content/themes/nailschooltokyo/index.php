<?php get_header(); ?>

<!-- ヒーローセクション -->
<section>
    <div>
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/person.png'); ?>" class="hero-image" alt="ネイルスクール東京">
    </div>
</section>

<!-- About Schoolセクション -->
<section class="about-school-section">
    <div class="container">
        <div class="section-header">
            <h1 class="section-title">About School</h2>
            <h2 class="section-subtitle">ファッシーナ・ネイルアカデミーとは?</h1>
        </div>
        
        <div class="features-grid">
            <div class="feature-card" data-slide="0">
                <div class="feature-number">01</div>
                <div class="feature-content">
                    <h3 class="feature-title"><span class="highlight-text">20代</span>に支持される!!</h3>
                    <div class="feature-description">
                        <p class="feature-description-text">どこでも通用する</p>
                        <p class="feature-description-text">ネイリストを目指せます</p>
                        <p class="small-text">マシーンやフィルイン、</p>
                        <p class="small-text">長さだし、補強、人気のアートを学べる</p>
                    </div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/access.jpg'); ?>" class="feature-image" alt="アクセス画像">
                </div>
            </div>
            
            <div class="feature-card" data-slide="1">
                <div class="feature-number">02</div>
                <div class="feature-content">
                    <h3 class="feature-title"><span class="highlight-text">挫折</span>させない!!</h3>
                    <div class="feature-description">
                        <p class="feature-description-text">サロンへの就職 or サロンの開業へ</p>
                        <p class="feature-description-text">安心のサポート体制をご提供します</p>
                        <p class="small-text">テキストテキストテキストテキスト</p>
                        <p class="small-text">テキストテキストテキストテキスト</p>
                    </div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/access.jpg'); ?>" class="feature-image" alt="アクセス画像">
                </div>
            </div>
            
            <div class="feature-card" data-slide="2">
                <div class="feature-number">03</div>
                <div class="feature-content">
                    <h3 class="feature-title"><span class="highlight-text">人気</span>ネイリストへ!!!</h3>
                    <div class="feature-description">
                        <p class="feature-description-text">ファッシーナネイルアカデミーでの</p>
                        <p class="feature-description-text">ネイリストへの道</p>
                        <p class="small-text">テキストテキストテキストテキスト</p>
                        <p class="small-text">テキストテキストテキストテキスト</p>
                    </div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/access.jpg'); ?>" class="feature-image" alt="アクセス画像">
                </div>
            </div>
        </div>
        
        <!-- スライドショー用のインジケーター -->
        <div class="slide-indicators">
            <span class="indicator active" data-slide="0"></span>
            <span class="indicator" data-slide="1"></span>
            <span class="indicator" data-slide="2"></span>
        </div>
    </div>
</section>

<main class="site-main">

</main>

<?php get_footer(); ?>
