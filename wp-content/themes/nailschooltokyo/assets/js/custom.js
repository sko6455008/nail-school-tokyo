/**
 * Nail School Tokyoテーマ カスタムJavaScript
 */

(function($) {
    'use strict';
    
    // ドキュメント読み込み完了時
    $(document).ready(function() {
        
        // スムーススクロール
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            
            var target = this.hash;
            var $target = $(target);
            
            // ターゲット要素が存在する場合のみスクロール
            if ($target.length) {
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top - 70
                }, 900, 'swing', function() {
                    window.location.hash = target;
                });
                
                // メニューを閉じる
                $spMenu.removeClass('active');
                $overlay.removeClass('active');
            }
        });

        // スマホメニューの開閉
        var $menuToggle = $('.menu-toggle');
        var $spMenu = $('.sp-menu');
        var $overlay = $('.menu-overlay');
        var $menuClose = $('.menu-close');

        $menuToggle.on('click', function() {
            $spMenu.toggleClass('active');
            $overlay.toggleClass('active');
        });

        $menuClose.on('click', function() {
            $spMenu.removeClass('active');
            $overlay.removeClass('active');
        });

        $overlay.on('click', function() {
            $spMenu.removeClass('active');
            $overlay.removeClass('active');
        });
        
        // スクロールアニメーション
        function handleScrollAnimation() {
            $('.fade-in-section').each(function() {
                var $element = $(this);
                var elementTop = $element.offset().top;
                var elementBottom = elementTop + $element.outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                
                // 要素が画面に入ったかチェック
                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $element.addClass('is-visible');
                }
            });
        }
        
        // スクロール時にアニメーションをチェック
        $(window).on('scroll', handleScrollAnimation);
        
        // 初期表示時にもチェック
        handleScrollAnimation();
        
        // スライドショー機能
        var slideShowInterval = null;
        var $cards = $('.feature-card');
        var $indicators = $('.indicator');
        var currentSlide = 0;
        var totalSlides = $cards.length;
        
        function showSlide(index) {
            $cards.hide();
            $cards.eq(index).show();
            $indicators.removeClass('active');
            $indicators.eq(index).addClass('active');
            currentSlide = index;
        }
        
        function nextSlide() {
            var next = (currentSlide + 1) % totalSlides;
            showSlide(next);
        }
        
        function startAutoSlide() {
            // 既存のインターバルをクリア
            if (slideShowInterval) {
                clearInterval(slideShowInterval);
            }
            // 15秒ごとに自動切り替え
            slideShowInterval = setInterval(function() {
                nextSlide();
            }, 15000);
        }
        
        function stopAutoSlide() {
            if (slideShowInterval) {
                clearInterval(slideShowInterval);
                slideShowInterval = null;
            }
        }
        
        function initSlideShow() {
            if (window.innerWidth <= 768) {
                // モバイル: スライドショー表示
                showSlide(0);
                startAutoSlide();
                
                // カードクリックで次のスライド
                $cards.off('click.slideshow').on('click.slideshow', function() {
                    stopAutoSlide();
                    nextSlide();
                    startAutoSlide();
                });
                
                // インジケータークリックで指定スライド
                $indicators.off('click.slideshow').on('click.slideshow', function() {
                    stopAutoSlide();
                    var slideIndex = parseInt($(this).data('slide'));
                    showSlide(slideIndex);
                    startAutoSlide();
                });
            } else {
                // デスクトップ: 全てのカードを表示
                stopAutoSlide();
                $cards.show();
                $cards.off('click.slideshow');
                $indicators.off('click.slideshow');
            }
        }
        
        // ウィンドウリサイズ時の処理
        $(window).on('resize', function() {
            stopAutoSlide();
            initSlideShow();
        });
        
        // 初期化
        initSlideShow();
        
    });
    
})(jQuery);
