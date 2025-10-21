<footer class="site-footer">
    <div class="container">
        <?php if (is_active_sidebar('footer-widgets')) : ?>
            <div class="footer-widgets">
                <?php dynamic_sidebar('footer-widgets'); ?>
            </div>
        <?php endif; ?>
        
        <div class="footer-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_id'        => 'footer-menu',
                'fallback_cb'    => false,
            ));
            ?>
        </div>
        
        <div class="site-info">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            <p>Powered by <a href="https://wordpress.org/">WordPress</a></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
