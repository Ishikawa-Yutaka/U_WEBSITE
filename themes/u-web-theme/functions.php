<?php
/**
 * U_WEB Theme Functions
 *
 * @package U_WEB_Theme
 * @version 1.0.0
 */

// テーマサポート機能を有効化
function u_web_theme_setup() {
    // ページタイトルのサポート
    add_theme_support( 'title-tag' );

    // アイキャッチ画像のサポート
    add_theme_support( 'post-thumbnails' );

    // HTML5のサポート
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // 自動フィードリンク
    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'u_web_theme_setup' );

// スタイルシートの読み込み
function u_web_theme_scripts() {
    // テーマのstyle.cssを読み込み（WordPressテーマ情報用）
    wp_enqueue_style( 'u-web-theme-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'u_web_theme_scripts' );

// 管理バーのマージン調整（Tailwind CDNとの競合を防ぐ）
function u_web_remove_admin_bar_bump() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'u_web_remove_admin_bar_bump');
