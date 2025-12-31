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

// スタイルシートとJavaScriptの読み込み
function u_web_theme_scripts() {
    // テーマのstyle.cssを読み込み（WordPressテーマ情報用）
    wp_enqueue_style( 'u-web-theme-style', get_stylesheet_uri(), array(), '1.0.0' );

    // メインJavaScriptを読み込み
    wp_enqueue_script( 'u-web-theme-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'u_web_theme_scripts' );

// 管理バーのマージン調整（Tailwind CDNとの競合を防ぐ）
function u_web_remove_admin_bar_bump() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'u_web_remove_admin_bar_bump');

// カスタム投稿タイプ「NEWS」の登録
function u_web_register_news_post_type() {
    $labels = array(
        'name'               => 'NEWS',
        'singular_name'      => 'NEWS',
        'menu_name'          => 'NEWS',
        'add_new'            => '新規追加',
        'add_new_item'       => '新しいNEWSを追加',
        'edit_item'          => 'NEWSを編集',
        'new_item'           => '新規NEWS',
        'view_item'          => 'NEWSを表示',
        'search_items'       => 'NEWSを検索',
        'not_found'          => 'NEWSが見つかりませんでした',
        'not_found_in_trash' => 'ゴミ箱にNEWSはありません',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-megaphone',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true, // ブロックエディタ対応
        'rewrite'            => array( 'slug' => 'news' ),
    );

    register_post_type( 'news', $args );
}
add_action( 'init', 'u_web_register_news_post_type' );
