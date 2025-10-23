<?php
/**
 * Nail School Tokyo Theme Functions
 */

// テーマのセットアップ
function nailschooltokyo_setup() {
    // テーマサポート機能を追加
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // メニュー位置を登録
    register_nav_menus(array(
        'primary' => __('プライマリーメニュー', 'nailschooltokyo'),
        'footer' => __('フッターメニュー', 'nailschooltokyo'),
    ));
}
add_action('after_setup_theme', 'nailschooltokyo_setup');

// スタイルとスクリプトの読み込み
function nailschooltokyo_scripts() {
    wp_enqueue_style('nailschooltokyo-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Google Fonts（必要に応じて）
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap', array(), null);
    
    // JavaScript
    wp_enqueue_script('jquery');
    wp_enqueue_script('nailschooltokyo-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'nailschooltokyo_scripts');

// ウィジェットエリアの登録
function nailschooltokyo_widgets_init() {
    register_sidebar(array(
        'name'          => __('サイドバー', 'nailschooltokyo'),
        'id'            => 'sidebar-1',
        'description'   => __('サイドバーウィジェットエリア', 'nailschooltokyo'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('フッターウィジェット', 'nailschooltokyo'),
        'id'            => 'footer-widgets',
        'description'   => __('フッターウィジェットエリア', 'nailschooltokyo'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'nailschooltokyo_widgets_init');

// カスタム投稿タイプ（例：コース情報）
function nailschooltokyo_custom_post_types() {
    // コース投稿タイプ
    register_post_type('course', array(
        'labels' => array(
            'name' => 'コース',
            'singular_name' => 'コース',
            'add_new' => '新規追加',
            'add_new_item' => '新しいコースを追加',
            'edit_item' => 'コースを編集',
            'new_item' => '新しいコース',
            'view_item' => 'コースを表示',
            'search_items' => 'コースを検索',
            'not_found' => 'コースが見つかりません',
            'not_found_in_trash' => 'ゴミ箱にコースはありません',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-book-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'course'),
    ));
}
add_action('init', 'nailschooltokyo_custom_post_types');

// カスタムフィールド（例：コース料金）
function nailschooltokyo_add_custom_fields() {
    add_meta_box(
        'course_price',
        'コース料金',
        'nailschooltokyo_course_price_callback',
        'course',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'nailschooltokyo_add_custom_fields');

function nailschooltokyo_course_price_callback($post) {
    $price = get_post_meta($post->ID, '_course_price', true);
    echo '<input type="text" name="course_price" value="' . esc_attr($price) . '" placeholder="例：50,000円" style="width: 100%;" />';
}

function nailschooltokyo_save_custom_fields($post_id) {
    if (isset($_POST['course_price'])) {
        update_post_meta($post_id, '_course_price', sanitize_text_field($_POST['course_price']));
    }
}
add_action('save_post', 'nailschooltokyo_save_custom_fields');
?>
