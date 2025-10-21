// ハンバーガーメニューの動作
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const menuWrapper = document.querySelector('.menu-wrapper');
    const menuToggleIcons = document.querySelectorAll('.menu-toggle-icon');
    
    console.log('Menu toggle:', menuToggle);
    console.log('Menu wrapper:', menuWrapper);
    
    if (menuToggle && menuWrapper) {
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log('Menu toggle clicked');
            
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            
            // メニューの表示/非表示を切り替え
            menuWrapper.classList.toggle('active');
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            
            console.log('Menu active:', menuWrapper.classList.contains('active'));
            
            // ハンバーガーアイコンのアニメーション
            menuToggleIcons.forEach((icon, index) => {
                if (!isExpanded) {
                    // メニューを開く時のアニメーション
                    if (index === 0) {
                        icon.style.transform = 'rotate(45deg) translate(5px, 5px)';
                    } else if (index === 1) {
                        icon.style.opacity = '0';
                    } else if (index === 2) {
                        icon.style.transform = 'rotate(-45deg) translate(7px, -6px)';
                    }
                } else {
                    // メニューを閉じる時のアニメーション
                    icon.style.transform = 'none';
                    icon.style.opacity = '1';
                }
            });
        });
        
        // メニュー外をクリックした時にメニューを閉じる
        document.addEventListener('click', function(event) {
            if (!menuToggle.contains(event.target) && !menuWrapper.contains(event.target)) {
                menuWrapper.classList.remove('active');
                menuToggle.setAttribute('aria-expanded', 'false');
                
                // アイコンを元に戻す
                menuToggleIcons.forEach(icon => {
                    icon.style.transform = 'none';
                    icon.style.opacity = '1';
                });
            }
        });
        
        // メニューリンクをクリックした時にメニューを閉じる
        const menuLinks = document.querySelectorAll('.nav-menu a');
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                menuWrapper.classList.remove('active');
                menuToggle.setAttribute('aria-expanded', 'false');
                
                // アイコンを元に戻す
                menuToggleIcons.forEach(icon => {
                    icon.style.transform = 'none';
                    icon.style.opacity = '1';
                });
            });
        });
    } else {
        console.error('Menu elements not found');
    }
});
