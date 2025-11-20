<?php get_header(); ?>

<!-- トップバナーセクション -->
<section id="home" class="top-section">
    <div>
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/top.png'); ?>" class="top-image" alt="ネイルスクール東京">
    </div>
</section>

<!-- Bannerセクション -->
<section class="banner-section">
    <div class="banner-container">
        <div class="banner-item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/banner.jpg'); ?>" class="banner-image" alt="キャンペーンバナー">
        </div>
        <div class="banner-item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/banner.jpg'); ?>" class="banner-image" alt="体験会バナー">
        </div>
    </div>
</section>

<!-- Atmosphereセクション -->
<section class="atmosphere-section">
    <div class="atmosphere-background" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/studio.jpeg'); ?>');"></div>
    <div class="atmosphere-overlay"></div>
    <div class="atmosphere-content">
        <h1 class="atmosphere-title">プロネイリストを目指すなら<br>Fascina Academy！</h1>

        <div class="descriptions">
            <p class="description">サロン就職後すぐに活躍できる<br>技術と接客力を習得できます!</p>
            <p class="description">モデル入客で実践的に学び、<br>トレンドを意識した提案力も養成します!</p>
            <p class="description">初心者にやさしいサロンワーク特化型<br>カリキュラムで、系列サロン就職も可能です!</p>
        </div>

        <div class="video">
            <p class="video-title">スクールの雰囲気</p>
            <img class="video-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/lecture.jpeg'); ?>" alt="スクールの雰囲気">
        </div>

        <div class="cta-container">
            <a href="#" class="cta-button">無料相談はこちらから!</a>
        </div>
    </div>
</section>

<!-- About Schoolセクション -->
<section id="about" class="about-school-section">
    <div class="container">
        <div class="section-header">
            <h1 class="section-title">About School</h1>
            <h2 class="section-subtitle">ファッシーナ・ネイルアカデミーとは?</h2>
        </div>

        <div class="about-description">
            <h2 class="about-description-title"><span class="bold-text">最短3ヵ月で即戦力ネイリスト</span>を目指せるスクールです！</h2>
        </div>
        
        <div class="features-grid">
            <div class="feature-card" data-slide="0">
                <div class="point-badge">
                    <div class="point-label">Point</div>
                    <div class="point-number">1</div>
                </div>
                <div class="feature-content">
                    <h3 class="feature-main-title">サロンワーク特化型</h3>
                    <div class="feature-divider"></div>
                    <div class="feature-description">
                        <p class="feature-description-title">受付から施術まで実践形式で学び習得可能！</p>
                        <p class="feature-description-text">検定では学べないサロンワークで即使える実践的なネイル技術を丁寧な指導のもとで確実に習得できます。</p>
                        <p class="feature-description-text">プロとしての土台を築きながら、自信を持って働ける力を身につけ、</p>
                        <p class="feature-description-text">接客力やカウンセリング力も総合的に磨き、現場で長く活躍できる“稼げるネイリスト”を目指せます。</p>
                    </div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/access.jpg'); ?>" class="feature-image" alt="実践サロンワーク特化型">
                </div>
            </div>
            
            <div class="feature-card" data-slide="1">
                <div class="point-badge">
                    <div class="point-label">Point</div>
                    <div class="point-number">2</div>
                </div>
                <div class="feature-content">
                    <h3 class="feature-main-title">学習環境・技術指導</h3>
                    <div class="feature-divider"></div>
                    <div class="feature-description">
                        <p class="feature-description-title">少人数でしっかり身につく実践型授業！</p>
                        <p class="feature-description-text">少人数制のクラスだから一人ひとりの手元を丁寧に確認でき、講師が即座に細かいアドバイスと個別フィードバックを行います。</p>
                        <p class="feature-description-text">初心者や未経験でも理解しやすい段階的なカリキュラムと反復練習で、</p>
                        <p class="feature-description-text">検定対策から接客までネイリストに必要な知識と実践力を着実に身につけられます。</p>
                    </div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/access.jpg'); ?>" class="feature-image" alt="学習環境・技術指導">
                </div>
            </div>
            
            <div class="feature-card" data-slide="2">
                <div class="point-badge">
                    <div class="point-label">Point</div>
                    <div class="point-number">3</div>
                </div>
                <div class="feature-content">
                    <h3 class="feature-main-title">サポート体制</h3>
                    <div class="feature-divider"></div>
                    <div class="feature-description">
                        <p class="feature-description-title">ネイリストの未来を支えるサポート体制！</p>
                        <p class="feature-description-text">サロン就職に向けて、適性に合わせた求人の選び方から応募準備まで丁寧にサポートします。</p>
                        <p class="feature-description-text">開業を目指す方には、サロン運営の基礎や準備項目、必要な手続きなども実践的にアドバイスします。</p>
                        <p class="feature-description-text">面接・履歴書の書き方や自己PRの作り方など、わかりやすく対策を行います。</p>
                    </div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/access.jpg'); ?>" class="feature-image" alt="サポート体制">
                </div>
            </div>
        </div>
        
        <div class="slide-indicators">
            <span class="indicator active" data-slide="0"></span>
            <span class="indicator" data-slide="1"></span>
            <span class="indicator" data-slide="2"></span>
        </div>
        
        <!-- 当スクールを卒業すると？セクション -->
        <div class="graduation-section">
            <div class="graduation-background" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/nail1.jpg'); ?>');"></div>
            <div class="graduation-content">
                <h2 class="graduation-title">当スクールを卒業すると</h2>
                <ul class="graduation-list">
                    <li class="graduation-item">施術ができる技術と接客スキルをもったネイリストになれる</li>
                    <li class="graduation-item">より実践的な施術練習を通して、スピーディーかつ美しい仕上がりを実現する技術を身につけれる</li>
                    <li class="graduation-item">トレンドを意識し、お客様の要望に沿った提案が可能に</li>
                    <li class="graduation-item">当スクールの系列サロンに就職可能に</li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- Courseセクション -->
<section id="course" class="course-section">
    <div class="course-background" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/tips.jpeg'); ?>');"></div>
    <div class="course-container">
        <div class="section-header">
            <h1 class="section-title">Course</h1>
            <h2 class="section-subtitle">コース内容</h2>
        </div>

        <div class="courses-grid">
            <!-- 3ヵ月コース -->
            <div class="course-card">
                <div class="course-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/nail1.jpg'); ?>" class="course-image" alt="3ヵ月即戦力 プロネイリストコース">
                    <div class="course-overlay"></div>
                    <p class="course-overlay-text">3ヵ月即戦力<br>プロネイリストコース</p>
                </div>
                <div class="course-content">
                    <h3 class="course-title"><span class="course-title-line">最短でプロネイリスト</span><br><span class="course-title-line">になりたい方にオススメ！</span></h3>
                    <div class="course-details">
                        <div class="course-detail-item">
                            <h4 class="course-detail-label">授業料</h4>
                            <p class="course-detail-text">入学費用：33,000円(税込)</p>
                            <p class="course-detail-text">コース費用：33,000円(税込)</p>
                            <p class="course-detail-text">※分割でのお支払いも対応しています。<br>例えば24分割なら月4,000円などのお支払いも可能です。</p>
                        </div>
                        <div class="course-detail-item">
                            <h4 class="course-detail-label">期間</h4>
                            <p class="course-detail-text">期間：3ヵ月間</p>
                            <p class="course-detail-text">合計：480時間(8時間×60日)</p>
                            <p class="course-detail-text">3ヵ月内で480時間分の授業を消化して頂くコースです！<br>1授業が8時間で、1日1回受講することが可能です！</p>
                            <p class="course-detail-text">【スケジュール】<br>授業開始 12:00～21:00(休憩含む)</p>
                        </div>
                        <div class="course-detail-item">
                            <h4 class="course-detail-label">オプション</h4>
                            <p class="course-detail-text">費用：1単位(4時間)あたり5,000円(税込)</p>
                            <p class="course-detail-text">更に極めたい、苦手分野を克服したい方におすすめのコースです！</p>
                            <p class="course-detail-text">※当スクールの卒業生は3割引で受講可能です。</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 9ヵ月コース -->
            <div class="course-card">
                <div class="course-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/nail2.jpg'); ?>" class="course-image" alt="9ヵ月じっくり プロネイリストコース">
                    <div class="course-overlay"></div>
                    <p class="course-overlay-text">9ヵ月じっくり<br>プロネイリストコース</p>
                </div>
                <div class="course-content">
                    <h3 class="course-title"><span class="course-title-line">確かな技術をじっくり</span><br><span class="course-title-line">身につけたい方にオススメ！</span></h3>
                    <div class="course-details">
                        <div class="course-detail-item">
                            <h4 class="course-detail-label">授業料</h4>
                            <p class="course-detail-text">入学費用：33,000円(税込)</p>
                            <p class="course-detail-text">コース費用：33,000円(税込)</p>
                            <p class="course-detail-text">※分割でのお支払いも対応しています。<br>例えば24分割なら月4,000円などのお支払いも可能です。</p>
                        </div>
                        <div class="course-detail-item">
                            <h4 class="course-detail-label">期間</h4>
                            <p class="course-detail-text">期間：9ヵ月間</p>
                            <p class="course-detail-text">合計：480時間(4時間×120日)</p>
                            <p class="course-detail-text">9ヵ月内で480時間分の授業を消化して頂くコースです！<br>1授業が4時間で、1日2回受講することが可能です！</p>
                            <p class="course-detail-text">【スケジュール】<br>授業開始(第一部) 12:00～16:00(休憩含まない)<br>授業開始(第二部) 17:00～21:00(休憩含まない)</p>
                        </div>
                        <div class="course-detail-item">
                            <h4 class="course-detail-label">オプション</h4>
                            <p class="course-detail-text">費用：1単位(4時間)あたり5,000円(税込)</p>
                            <p class="course-detail-text">更に極めたい、苦手分野を克服したい方におすすめです！</p>
                            <p class="course-detail-text">※当スクールの卒業生は3割引で受講可能です。</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="cta-container">
            <a href="#" class="cta-button">無料相談はこちらから!</a>
        </div>
    </div>
</section>

<!-- Skillセクション -->
<section id="skills" class="skills-section">
    <div class="skills-container">
        <div class="section-header">
            <h1 class="section-title">Learning Skills</h1>
            <h2 class="section-subtitle">学べる技術</h2>
        </div>

        <div class="skills-points">

            <div class="skill-point skill-point-odd">
                <div class="skill-image-wrapper skill-image-pink">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/study.jpeg'); ?>" class="skill-image" alt="基礎知識">
                </div>
                <div class="skill-content">
                    <div class="skill-point-header">
                        <h3 class="skill-point-number">Skill.1</h3>
                    </div>
                    <h4 class="skill-point-title">基礎知識</h4>
                    <div class="skill-point-description">
                        <p>道具の名称・知識、爪の構造・病気トラブル、衛星管理、技術理論、カウンセリング方法が習得可能！</p>
                    </div>
                </div>
            </div>

            <div class="skill-point skill-point-even">
                <div class="skill-image-wrapper skill-image-green">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/nail3.jpg'); ?>" class="skill-image" alt="ネイルケア">
                </div>
                <div class="skill-content">
                    <div class="skill-point-header">
                        <h3 class="skill-point-number">Skill.2</h3>
                    </div>
                    <h4 class="skill-point-title">ネイルケア</h4>
                    <div class="skill-point-description">
                        <p>ファイリング、ハンド＆フットケア、ウォーターケアが習得可能！</p>
                    </div>
                </div>
            </div>

            <div class="skill-point skill-point-odd">
                <div class="skill-image-wrapper skill-image-pink">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/studio.jpeg'); ?>" class="skill-image" alt="マシーンケア">
                </div>
                <div class="skill-content">
                    <div class="skill-point-header">
                        <h3 class="skill-point-number">Skill.3</h3>
                    </div>
                    <h4 class="skill-point-title">マシーンケア</h4>
                    <div class="skill-point-description">
                        <p>マシーンの基本的な使い方、オフ、プレパレーション、フィルインが習得可能！</p>
                    </div>
                </div>
            </div>

            <div class="skill-point skill-point-even">
                <div class="skill-image-wrapper skill-image-green">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/nail4.jpg'); ?>" class="skill-image" alt="長さ出し・補強">
                </div>
                <div class="skill-content">
                    <div class="skill-point-header">
                        <h3 class="skill-point-number">Skill.4</h3>
                    </div>
                    <h4 class="skill-point-title">長さ出し・補強</h4>
                    <div class="skill-point-description">
                        <p>サロンワークで即戦力となるためのジェル、チップ、アクリル技術が習得可能！</p>
                    </div>
                </div>
            </div>

            <div class="skill-point skill-point-odd">
                <div class="skill-image-wrapper skill-image-pink">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/tools.jpg'); ?>" class="skill-image" alt="ネイルアート">
                </div>
                <div class="skill-content">
                    <div class="skill-point-header">
                        <h3 class="skill-point-number">Skill.5</h3>
                    </div>
                    <h4 class="skill-point-title">ネイルアート</h4>
                    <div class="skill-point-description">
                        <p>ワンカラー、ラメグラ、マグネット、トレンドデザインが習得可能！</p>
                    </div>
                </div>
            </div>

            <div class="skill-point skill-point-even">
                <div class="skill-image-wrapper skill-image-green">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/lecture.jpeg'); ?>" class="skill-image" alt="サロンワーク技術">
                </div>
                <div class="skill-content">
                    <div class="skill-point-header">
                        <h3 class="skill-point-number">Skill.6</h3>
                    </div>
                    <h4 class="skill-point-title">サロンワーク技術</h4>
                    <div class="skill-point-description">
                        <p>サロンワーク特化ならではの、モデル入客を通して実践的な接客テクニック、マナーが習得可能！</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Procedureセクション -->
<section id="procedure" class="procedure-section">
    <div class="procedure-container">
        <div class="section-header">
            <h1 class="section-title">Procedure</h1>
            <h2 class="section-subtitle">入校手順</h2>
        </div>

        <div class="procedure-steps">

            <div class="procedure-step">
                <div class="step-box">
                    <span class="step-number">STEP.1</span>
                    <div class="step-arrow"></div>
                </div>
                <div class="step-content">
                    <h3 class="step-title">公式LINEを追加</h3>
                    <p class="step-description">ページ下部に固定されている「LINEで無料相談する」ボタンより公式LINEを追加する</p>
                </div>
            </div>

            <div class="procedure-step">
                <div class="step-box">
                    <span class="step-number">STEP.2</span>
                    <div class="step-arrow"></div>
                </div>
                <div class="step-content">
                    <h3 class="step-title">「入校」と入力</h3>
                    <p class="step-description">公式LINEのトーク画面にて、「入校」と返信する</p>
                </div>
            </div>

            <div class="procedure-step">
                <div class="step-box">
                    <span class="step-number">STEP.3</span>
                    <div class="step-arrow"></div>
                </div>
                <div class="step-content">
                    <h3 class="step-title">申し込み</h3>
                    <p class="step-description">公式LINEから送信される詳細を確認し、申し込みをする</p>
                </div>
            </div>

            <div class="procedure-step">
                <div class="step-box">
                    <span class="step-number">STEP.4</span>
                    <div class="step-arrow"></div>
                </div>
                <div class="step-content">
                    <h3 class="step-title">入校開始</h3>
                    <p class="step-description">記載の支払い先にお支払い後、入校開始となります</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Q&Aセクション -->
<section id="qa" class="qa-section">
    <div class="qa-container">
        <div class="section-header">
            <h1 class="section-title">Q&A</h1>
            <h2 class="section-subtitle">よくある質問</h2>
        </div>

        <div class="qa-list">
            <div class="qa-item">
                <button class="qa-question">
                    <span class="qa-text">Q.お支払いの分割は可能ですか?</span>
                    <span class="qa-arrow">▼</span>
                </button>
                <div class="qa-answer">
                    <p>はい、分割でのお支払いも対応しています。例えば24分割なら月4,000円などのお支払いも可能です。詳細はお問い合わせください。</p>
                </div>
            </div>

            <div class="qa-item">
                <button class="qa-question">
                    <span class="qa-text">Q.追加料金はかかりますか?</span>
                    <span class="qa-arrow">▼</span>
                </button>
                <div class="qa-answer">
                    <p>基本的なコース費用以外に追加料金はかかりません。ただし、オプションコースを受講される場合は別途費用がかかります。</p>
                </div>
            </div>

            <div class="qa-item">
                <button class="qa-question">
                    <span class="qa-text">Q.卒業後はネイリストとして働けますか?</span>
                    <span class="qa-arrow">▼</span>
                </button>
                <div class="qa-answer">
                    <p>はい、卒業後はネイリストとして働くことができます。当スクールの系列サロンへの就職も可能です。就職サポートも行っています。</p>
                </div>
            </div>

            <div class="qa-item">
                <button class="qa-question">
                    <span class="qa-text">Q.欠席するとどうなりますか?</span>
                    <span class="qa-arrow">▼</span>
                </button>
                <div class="qa-answer">
                    <p>欠席された場合、振替授業の対応をしています。事前にご連絡いただければ、別の日程で受講することができます。</p>
                </div>
            </div>

            <div class="qa-item">
                <button class="qa-question">
                    <span class="qa-text">Q.全くの初心者ですが大丈夫ですか?</span>
                    <span class="qa-arrow">▼</span>
                </button>
                <div class="qa-answer">
                    <p>はい、全くの初心者の方でも大丈夫です。基礎から丁寧に指導いたしますので、安心してご受講ください。</p>
                </div>
            </div>

            <div class="qa-item">
                <button class="qa-question">
                    <span class="qa-text">Q.持っている道具を使っても大丈夫ですか?</span>
                    <span class="qa-arrow">▼</span>
                </button>
                <div class="qa-answer">
                    <p>はい、ご自身でお持ちの道具を使用していただいても問題ありません。ただし、授業で必要な道具については事前にご確認ください。</p>
                </div>
            </div>

            <div class="qa-item">
                <button class="qa-question">
                    <span class="qa-text">Q.道具の購入はできますか?</span>
                    <span class="qa-arrow">▼</span>
                </button>
                <div class="qa-answer">
                    <p>はい、スクールで推奨する道具の購入も可能です。詳細は入学時にご案内いたします。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

