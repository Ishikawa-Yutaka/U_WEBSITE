<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
    <meta
      name="description"
      content="島根県西部を拠点としたWeb制作・デジタルマーケティング企業。葬祭業・観光業特化で17サイトの実績。ホームページ担当者育成事業で内製化までサポート。"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Header -->
    <header class="fixed top-0 w-full bg-white/95 backdrop-blur-sm z-50 border-b border-gray-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
          <div class="flex items-center">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-2xl font-medium text-emerald-600">U_WEB</a>
            <span class="ml-2 text-sm text-gray-500 hidden sm:inline">島根から全国へ</span>
          </div>

          <!-- Desktop Navigation -->
          <nav class="hidden md:flex items-center space-x-8">
            <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>" class="text-gray-700 hover:text-emerald-600 transition-colors">
              U_WEBについて
            </a>
            <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="text-gray-700 hover:text-emerald-600 transition-colors">
              サービス
            </a>
            <a href="<?php echo esc_url( home_url( '/#strengths' ) ); ?>" class="text-gray-700 hover:text-emerald-600 transition-colors">
              強み
            </a>
            <a href="<?php echo esc_url( home_url( '/#portfolio' ) ); ?>" class="text-gray-700 hover:text-emerald-600 transition-colors">
              制作実績
            </a>
            <?php
            $blog_page_id = get_option( 'page_for_posts' );
            if ( $blog_page_id ) {
              $blog_url = get_permalink( $blog_page_id );
            } else {
              $blog_url = home_url( '/blog/' );
            }
            ?>
            <a href="<?php echo esc_url( $blog_url ); ?>" class="text-gray-700 hover:text-emerald-600 transition-colors">
              ブログ
            </a>
            <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors">
              お問い合わせ
            </a>
          </nav>

          <!-- Mobile Menu Button -->
          <button id="mobile-menu-button" class="md:hidden text-gray-700 hover:text-emerald-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>

        <!-- Mobile Navigation -->
        <nav id="mobile-menu" class="hidden md:hidden pb-4">
          <div class="flex flex-col space-y-3">
            <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>" class="text-gray-700 hover:text-emerald-600 transition-colors py-2">
              U_WEBについて
            </a>
            <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="text-gray-700 hover:text-emerald-600 transition-colors py-2">
              サービス
            </a>
            <a href="<?php echo esc_url( home_url( '/#strengths' ) ); ?>" class="text-gray-700 hover:text-emerald-600 transition-colors py-2">
              強み
            </a>
            <a href="<?php echo esc_url( home_url( '/#portfolio' ) ); ?>" class="text-gray-700 hover:text-emerald-600 transition-colors py-2">
              制作実績
            </a>
            <a href="<?php echo esc_url( $blog_url ); ?>" class="text-gray-700 hover:text-emerald-600 transition-colors py-2">
              ブログ
            </a>
            <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors text-center">
              お問い合わせ
            </a>
          </div>
        </nav>
      </div>
    </header>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
          mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
          });
        }
      });
    </script>
