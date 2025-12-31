<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'name' ); ?> - 島根から全国へ | Web制作・デジタルマーケティング</title>
    <meta
      name="description"
      content="島根県西部を拠点としたWeb制作・デジタルマーケティング企業。葬祭業・観光業特化で17サイトの実績。ホームページ担当者育成事業で内製化までサポート。"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
    <style>
      body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto",
          "Helvetica", "Arial", sans-serif;
        line-height: 1.5;
      }

      /* Typography defaults */
      h1 {
        font-size: 2.25rem;
        font-weight: 500;
        line-height: 1.5;
      }

      h2 {
        font-size: 1.875rem;
        font-weight: 500;
        line-height: 1.5;
      }

      h3 {
        font-size: 1.5rem;
        font-weight: 500;
        line-height: 1.5;
      }

      h4 {
        font-size: 1.25rem;
        font-weight: 500;
        line-height: 1.5;
      }

      p {
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
      }

      label {
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.5;
      }

      button {
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.5;
      }

      input {
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
      }

      /* Smooth scrolling */
      html {
        scroll-behavior: smooth;
      }

      /* Portfolio filter active state */
      .portfolio-filter.active {
        background-color: #059669;
        color: white;
      }

      /* Hidden class for mobile menu */
      .hidden {
        display: none;
      }
    </style>
  </head>
  <body class="bg-white">
    <!-- Header -->
    <header
      class="fixed top-0 w-full bg-white/95 backdrop-blur-sm z-50 border-b border-gray-100"
    >
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
          <div class="flex items-center">
            <span class="text-2xl font-medium text-emerald-600">U_WEB</span>
            <span class="ml-2 text-sm text-gray-500 hidden sm:inline"
              >島根から全国へ</span
            >
          </div>

          <!-- Desktop Navigation -->
          <nav class="hidden md:flex space-x-8">
            <button
              onclick="scrollToSection('services')"
              class="text-gray-700 hover:text-emerald-600 transition-colors font-medium"
            >
              サービス
            </button>
            <button
              onclick="scrollToSection('strengths')"
              class="text-gray-700 hover:text-emerald-600 transition-colors font-medium"
            >
              強み
            </button>
            <button
              onclick="scrollToSection('training')"
              class="text-gray-700 hover:text-emerald-600 transition-colors font-medium"
            >
              担当者育成
            </button>
            <button
              onclick="scrollToSection('portfolio')"
              class="text-gray-700 hover:text-emerald-600 transition-colors font-medium"
            >
              実績
            </button>
            <button
              onclick="scrollToSection('contact')"
              class="text-gray-700 hover:text-emerald-600 transition-colors font-medium"
            >
              お問い合わせ
            </button>
          </nav>

          <!-- Mobile Menu Button -->
          <button
            class="md:hidden text-gray-700"
            onclick="toggleMobileMenu()"
            id="mobileMenuButton"
          >
            <svg
              id="menuIcon"
              class="w-6 h-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              ></path>
            </svg>
            <svg
              id="closeIcon"
              class="w-6 h-6 hidden"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 18L18 6M6 6l12 12"
              ></path>
            </svg>
          </button>
        </div>

        <!-- Mobile Navigation -->
        <nav
          id="mobileMenu"
          class="md:hidden py-4 border-t border-gray-100 hidden"
        >
          <div class="flex flex-col space-y-4">
            <button
              onclick="scrollToSection('services')"
              class="text-gray-700 hover:text-emerald-600 transition-colors text-left font-medium"
            >
              サービス
            </button>
            <button
              onclick="scrollToSection('strengths')"
              class="text-gray-700 hover:text-emerald-600 transition-colors text-left font-medium"
            >
              強み
            </button>
            <button
              onclick="scrollToSection('training')"
              class="text-gray-700 hover:text-emerald-600 transition-colors text-left font-medium"
            >
              担当者育成
            </button>
            <button
              onclick="scrollToSection('portfolio')"
              class="text-gray-700 hover:text-emerald-600 transition-colors text-left font-medium"
            >
              実績
            </button>
            <button
              onclick="scrollToSection('contact')"
              class="text-gray-700 hover:text-emerald-600 transition-colors text-left font-medium"
            >
              お問い合わせ
            </button>
          </div>
        </nav>
      </div>
    </header>

    <main>
      <!-- Hero Section -->
      <section class="pt-24 pb-16 md:pt-32 md:pb-24 relative overflow-hidden">
        <div
          class="absolute inset-0 bg-gradient-to-br from-emerald-50 via-white to-teal-50 -z-10"
        ></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
              <div
                class="inline-flex items-center px-4 py-2 bg-emerald-100 text-emerald-700 rounded-full mb-6"
              >
                <svg
                  class="w-4 h-4 mr-2"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                  ></path>
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                  ></path>
                </svg>
                島根県西部から地方創生を推進
              </div>
              <h1
                class="text-4xl md:text-5xl lg:text-6xl text-gray-900 mb-6 font-medium"
              >
                地方企業の<br />
                <span class="text-emerald-600">デジタル化を支援</span>
              </h1>
              <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                Web制作・アプリ開発・デジタルマーケティングで、地方企業のDXを実現。葬祭業・観光業で17サイトの実績。ホームページ担当者育成事業で、内製化までトータルサポートします。
              </p>
              <div class="flex flex-col sm:flex-row gap-4 mb-8">
                <button
                  onclick="scrollToSection('contact')"
                  class="inline-flex items-center justify-center px-6 py-3 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors font-medium"
                >
                  無料相談のお申し込み
                  <svg
                    class="ml-2 w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"
                    ></path>
                  </svg>
                </button>
                <button
                  onclick="scrollToSection('services')"
                  class="inline-flex items-center justify-center px-6 py-3 border-2 border-emerald-600 text-emerald-600 rounded-lg hover:bg-emerald-50 transition-colors font-medium"
                >
                  サービスを見る
                </button>
              </div>
              <div class="grid grid-cols-3 gap-6">
                <div>
                  <div class="text-3xl text-emerald-600 mb-1 font-medium">
                    17
                  </div>
                  <div class="text-sm text-gray-600">制作実績</div>
                </div>
                <div>
                  <div class="text-3xl text-emerald-600 mb-1 font-medium">
                    4年
                  </div>
                  <div class="text-sm text-gray-600">実務経験</div>
                </div>
                <div>
                  <div class="text-3xl text-emerald-600 mb-1 font-medium">
                    100%
                  </div>
                  <div class="text-sm text-gray-600">地域密着</div>
                </div>
              </div>
            </div>

            <div class="relative">
              <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                <img
                  src="https://images.unsplash.com/photo-1595693475235-ac4beaa5a575?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxydXJhbCUyMGphcGFuJTIwbGFuZHNjYXBlfGVufDF8fHx8MTc2NDM3NDQ0OXww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                  alt="島根の風景"
                  class="w-full h-full object-cover"
                />
              </div>
              <div
                class="absolute -bottom-6 -right-6 w-64 h-64 bg-gradient-to-br from-emerald-400 to-teal-400 rounded-2xl opacity-20 blur-3xl -z-10"
              ></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services Section -->
      <section id="services" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl text-gray-900 mb-4 font-medium">
              提供サービス
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
              企画から制作、運用、内製化支援まで、ワンストップでサポート
            </p>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div
              class="p-8 rounded-2xl border border-gray-200 hover:border-emerald-200 hover:shadow-lg transition-all duration-300"
            >
              <div
                class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mb-4"
              >
                <svg
                  class="w-6 h-6 text-emerald-600"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                  ></path>
                </svg>
              </div>
              <h3 class="text-2xl text-gray-900 mb-2 font-medium">
                Webサイト制作
              </h3>
              <div class="text-emerald-600 mb-3 font-medium">20万円〜</div>
              <p class="text-gray-600 mb-6 leading-relaxed">
                WordPress、Next.js対応。レスポンシブデザインで、SEO対策も万全。地域企業に最適なWebサイトを制作します。
              </p>
              <div class="flex flex-wrap gap-2">
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >WordPress / Next.js</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >レスポンシブデザイン</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >SEO対策</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >CMS構築</span
                >
              </div>
            </div>

            <!-- Service 2 -->
            <div
              class="p-8 rounded-2xl border border-gray-200 hover:border-emerald-200 hover:shadow-lg transition-all duration-300"
            >
              <div
                class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mb-4"
              >
                <svg
                  class="w-6 h-6 text-emerald-600"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                  ></path>
                </svg>
              </div>
              <h3 class="text-2xl text-gray-900 mb-2 font-medium">
                アプリ開発
              </h3>
              <div class="text-emerald-600 mb-3 font-medium">50万円〜</div>
              <p class="text-gray-600 mb-6 leading-relaxed">
                業務効率化アプリ、顧客管理システムなど、ビジネスに必要なアプリケーションを開発。使いやすさを重視します。
              </p>
              <div class="flex flex-wrap gap-2">
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >業務効率化</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >顧客管理</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >在庫管理</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >予約システム</span
                >
              </div>
            </div>

            <!-- Service 3 -->
            <div
              class="p-8 rounded-2xl border border-gray-200 hover:border-emerald-200 hover:shadow-lg transition-all duration-300"
            >
              <div
                class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mb-4"
              >
                <svg
                  class="w-6 h-6 text-emerald-600"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                  ></path>
                </svg>
              </div>
              <h3 class="text-2xl text-gray-900 mb-2 font-medium">
                Webマーケティング
              </h3>
              <div class="text-emerald-600 mb-3 font-medium">月3万円〜</div>
              <p class="text-gray-600 mb-6 leading-relaxed">
                SEO対策、リスティング広告、SNS運用など、集客に直結するマーケティング施策を提供します。
              </p>
              <div class="flex flex-wrap gap-2">
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >SEO対策</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >リスティング広告</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >SNS運用</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >アクセス解析</span
                >
              </div>
            </div>

            <!-- Service 4 -->
            <div
              class="p-8 rounded-2xl border border-gray-200 hover:border-emerald-200 hover:shadow-lg transition-all duration-300"
            >
              <div
                class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mb-4"
              >
                <svg
                  class="w-6 h-6 text-emerald-600"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"
                  ></path>
                </svg>
              </div>
              <h3 class="text-2xl text-gray-900 mb-2 font-medium">
                デザイン制作
              </h3>
              <div class="text-emerald-600 mb-3 font-medium">5万円〜</div>
              <p class="text-gray-600 mb-6 leading-relaxed">
                ロゴ、バナー、チラシ、動画など、ブランドイメージを高めるデザインを制作します。
              </p>
              <div class="flex flex-wrap gap-2">
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >ロゴデザイン</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >バナー制作</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >チラシデザイン</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >動画編集</span
                >
              </div>
            </div>

            <!-- Service 5 -->
            <div
              class="p-8 rounded-2xl border border-gray-200 hover:border-emerald-200 hover:shadow-lg transition-all duration-300"
            >
              <div
                class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mb-4"
              >
                <svg
                  class="w-6 h-6 text-emerald-600"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                  ></path>
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                  ></path>
                </svg>
              </div>
              <h3 class="text-2xl text-gray-900 mb-2 font-medium">運用保守</h3>
              <div class="text-emerald-600 mb-3 font-medium">月1〜3万円</div>
              <p class="text-gray-600 mb-6 leading-relaxed">
                サイトの更新作業、セキュリティ対策、バックアップなど、安心してサイトを運用できるようサポートします。
              </p>
              <div class="flex flex-wrap gap-2">
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >コンテンツ更新</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >セキュリティ対策</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >バックアップ</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >障害対応</span
                >
              </div>
            </div>

            <!-- Service 6 -->
            <div
              class="p-8 rounded-2xl border border-gray-200 hover:border-emerald-200 hover:shadow-lg transition-all duration-300"
            >
              <div
                class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mb-4"
              >
                <svg
                  class="w-6 h-6 text-emerald-600"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"
                  ></path>
                </svg>
              </div>
              <h3 class="text-2xl text-gray-900 mb-2 font-medium">
                DXコンサルティング
              </h3>
              <div class="text-emerald-600 mb-3 font-medium">月5万円〜</div>
              <p class="text-gray-600 mb-6 leading-relaxed">
                業務プロセスのデジタル化、システム導入支援など、企業のDX推進を総合的にサポートします。
              </p>
              <div class="flex flex-wrap gap-2">
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >業務分析</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >システム選定</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >導入支援</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >効果測定</span
                >
              </div>
            </div>

            <!-- Service 7 - Highlighted -->
            <div
              class="p-8 rounded-2xl border-emerald-400 bg-gradient-to-br from-emerald-50 to-white shadow-lg border transition-all duration-300"
            >
              <div
                class="inline-block px-3 py-1 bg-emerald-600 text-white rounded-full text-sm mb-4"
              >
                新サービス
              </div>
              <div
                class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mb-4"
              >
                <svg
                  class="w-6 h-6 text-emerald-600"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                  <path
                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                  ></path>
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                  ></path>
                </svg>
              </div>
              <h3 class="text-2xl text-gray-900 mb-2 font-medium">
                担当者育成事業
              </h3>
              <div class="text-emerald-600 mb-3 font-medium">月3万円〜</div>
              <p class="text-gray-600 mb-6 leading-relaxed">
                企業内でWeb担当者を育成し、内製化を実現。継続的な改善ができる体制を構築します。
              </p>
              <div class="flex flex-wrap gap-2">
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >基礎研修</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >実践トレーニング</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >運用サポート</span
                >
                <span
                  class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                  >定期フォロー</span
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Strengths Section -->
      <section
        id="strengths"
        class="py-16 md:py-24 bg-gradient-to-br from-emerald-50 via-teal-50 to-white"
      >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl text-gray-900 mb-4 font-medium">
              U_WEBの4つの強み
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
              地方企業に寄り添い、継続的な成長をサポートします
            </p>
          </div>

          <div class="grid md:grid-cols-2 gap-8">
            <!-- Strength 1 -->
            <div
              class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300"
            >
              <div class="flex items-start mb-6">
                <div
                  class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center flex-shrink-0"
                >
                  <svg
                    class="w-8 h-8 text-emerald-600"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                    ></path>
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-2xl text-gray-900 mb-2 font-medium">
                    地方創生への情熱
                  </h3>
                </div>
              </div>
              <p class="text-gray-600 mb-6 leading-relaxed">
                島根県西部を拠点に、地方企業のデジタル化を本気で支援。地域密着型のサポートで、地方創生に貢献します。
              </p>
              <div class="space-y-3">
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></div>
                  <span class="text-gray-700">地域の課題を深く理解</span>
                </div>
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></div>
                  <span class="text-gray-700">地元企業との信頼関係</span>
                </div>
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></div>
                  <span class="text-gray-700">地方ならではの提案力</span>
                </div>
              </div>
            </div>

            <!-- Strength 2 -->
            <div
              class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300"
            >
              <div class="flex items-start mb-6">
                <div
                  class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center flex-shrink-0"
                >
                  <svg
                    class="w-8 h-8 text-emerald-600"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"
                    ></path>
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-2xl text-gray-900 mb-2 font-medium">
                    業界特化の実績
                  </h3>
                </div>
              </div>
              <p class="text-gray-600 mb-6 leading-relaxed">
                葬祭業・観光業での豊富な経験。業界特有のニーズを理解し、効果的なWebサイト・システムを提供します。
              </p>
              <div class="space-y-3">
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></div>
                  <span class="text-gray-700">葬祭業での実績多数</span>
                </div>
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></div>
                  <span class="text-gray-700">観光業のノウハウ蓄積</span>
                </div>
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></div>
                  <span class="text-gray-700">交通業・地方企業の支援</span>
                </div>
              </div>
            </div>

            <!-- Strength 3 -->
            <div
              class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300"
            >
              <div class="flex items-start mb-6">
                <div
                  class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center flex-shrink-0"
                >
                  <svg
                    class="w-8 h-8 text-emerald-600"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"
                    ></path>
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-2xl text-gray-900 mb-2 font-medium">
                    フルスタック対応
                  </h3>
                </div>
              </div>
              <p class="text-gray-600 mb-6 leading-relaxed">
                企画・制作・運用・内製化支援まで一貫してサポート。技術的な課題から運用面まで、トータルで解決します。
              </p>
              <div class="space-y-3">
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></div>
                  <span class="text-gray-700">企画から運用まで一貫</span>
                </div>
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></div>
                  <span class="text-gray-700">Next.js / WordPress対応</span>
                </div>
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></div>
                  <span class="text-gray-700">マーケティングも対応</span>
                </div>
              </div>
            </div>

            <!-- Strength 4 -->
            <div
              class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300"
            >
              <div class="flex items-start mb-6">
                <div
                  class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center flex-shrink-0"
                >
                  <svg
                    class="w-8 h-8 text-emerald-600"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"
                    ></path>
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-2xl text-gray-900 mb-2 font-medium">
                    長期的パートナーシップ
                  </h3>
                </div>
              </div>
              <p class="text-gray-600 mb-6 leading-relaxed">
                単発の制作で終わらず、育成・コンサルで継続的に支援。お客様と共に成長し続けるパートナーを目指します。
              </p>
              <div class="space-y-3">
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></div>
                  <span class="text-gray-700">継続的な改善提案</span>
                </div>
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></div>
                  <span class="text-gray-700">内製化で自走支援</span>
                </div>
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></div>
                  <span class="text-gray-700">定期的なフォロー</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Additional Stats -->
          <div class="mt-16 bg-white rounded-2xl shadow-lg p-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
              <div class="text-center">
                <div class="text-4xl text-emerald-600 mb-2 font-medium">17</div>
                <div class="text-gray-600">制作実績サイト</div>
              </div>
              <div class="text-center">
                <div class="text-4xl text-emerald-600 mb-2 font-medium">
                  4年
                </div>
                <div class="text-gray-600">実務経験</div>
              </div>
              <div class="text-center">
                <div class="text-4xl text-emerald-600 mb-2 font-medium">
                  島根
                </div>
                <div class="text-gray-600">拠点地域</div>
              </div>
              <div class="text-center">
                <div class="text-4xl text-emerald-600 mb-2 font-medium">7</div>
                <div class="text-gray-600">提供サービス</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Training Section -->
      <section id="training" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <!-- Header -->
          <div class="text-center mb-16">
            <div
              class="inline-flex items-center px-4 py-2 bg-emerald-100 text-emerald-700 rounded-full mb-6"
            >
              <svg
                class="w-5 h-5 mr-2"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                <path
                  d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                ></path>
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                ></path>
              </svg>
              新サービス
            </div>
            <h2 class="text-3xl md:text-4xl text-gray-900 mb-4 font-medium">
              ホームページ担当者育成事業
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
              企業内でWeb担当者を育成し、内製化を実現。継続的な改善ができる体制を構築します
            </p>
          </div>

          <!-- Main Content -->
          <div class="grid md:grid-cols-2 gap-12 mb-16">
            <!-- Left: Program Details -->
            <div>
              <h3 class="text-2xl text-gray-900 mb-8 font-medium">
                育成プログラム
              </h3>
              <div class="space-y-6">
                <!-- Program 1 -->
                <div
                  class="p-6 bg-gradient-to-br from-emerald-50 to-white rounded-2xl border border-emerald-100"
                >
                  <h4 class="text-xl text-gray-900 mb-3 font-medium">
                    1. 基礎研修
                  </h4>
                  <p class="text-gray-600 mb-4">
                    Web担当者として必要な基礎知識を習得
                  </p>
                  <div class="grid grid-cols-2 gap-2">
                    <div class="flex items-center text-sm">
                      <div
                        class="w-1.5 h-1.5 bg-emerald-600 rounded-full mr-2"
                      ></div>
                      <span class="text-gray-700">HTML/CSSの基礎</span>
                    </div>
                    <div class="flex items-center text-sm">
                      <div
                        class="w-1.5 h-1.5 bg-emerald-600 rounded-full mr-2"
                      ></div>
                      <span class="text-gray-700">WordPress操作</span>
                    </div>
                    <div class="flex items-center text-sm">
                      <div
                        class="w-1.5 h-1.5 bg-emerald-600 rounded-full mr-2"
                      ></div>
                      <span class="text-gray-700">SEO基礎知識</span>
                    </div>
                    <div class="flex items-center text-sm">
                      <div
                        class="w-1.5 h-1.5 bg-emerald-600 rounded-full mr-2"
                      ></div>
                      <span class="text-gray-700">アクセス解析</span>
                    </div>
                  </div>
                </div>

                <!-- Program 2 -->
                <div
                  class="p-6 bg-gradient-to-br from-emerald-50 to-white rounded-2xl border border-emerald-100"
                >
                  <h4 class="text-xl text-gray-900 mb-3 font-medium">
                    2. 実践トレーニング
                  </h4>
                  <p class="text-gray-600 mb-4">
                    実際の業務を通じて実践力を養成
                  </p>
                  <div class="grid grid-cols-2 gap-2">
                    <div class="flex items-center text-sm">
                      <div
                        class="w-1.5 h-1.5 bg-emerald-600 rounded-full mr-2"
                      ></div>
                      <span class="text-gray-700">記事作成演習</span>
                    </div>
                    <div class="flex items-center text-sm">
                      <div
                        class="w-1.5 h-1.5 bg-emerald-600 rounded-full mr-2"
                      ></div>
                      <span class="text-gray-700">画像編集</span>
                    </div>
                    <div class="flex items-center text-sm">
                      <div
                        class="w-1.5 h-1.5 bg-emerald-600 rounded-full mr-2"
                      ></div>
                      <span class="text-gray-700">バナー制作</span>
                    </div>
                    <div class="flex items-center text-sm">
                      <div
                        class="w-1.5 h-1.5 bg-emerald-600 rounded-full mr-2"
                      ></div>
                      <span class="text-gray-700">広告運用</span>
                    </div>
                  </div>
                </div>

                <!-- Program 3 -->
                <div
                  class="p-6 bg-gradient-to-br from-emerald-50 to-white rounded-2xl border border-emerald-100"
                >
                  <h4 class="text-xl text-gray-900 mb-3 font-medium">
                    3. 運用サポート
                  </h4>
                  <p class="text-gray-600 mb-4">独り立ち後も継続的にフォロー</p>
                  <div class="grid grid-cols-2 gap-2">
                    <div class="flex items-center text-sm">
                      <div
                        class="w-1.5 h-1.5 bg-emerald-600 rounded-full mr-2"
                      ></div>
                      <span class="text-gray-700">定期ミーティング</span>
                    </div>
                    <div class="flex items-center text-sm">
                      <div
                        class="w-1.5 h-1.5 bg-emerald-600 rounded-full mr-2"
                      ></div>
                      <span class="text-gray-700">質問対応</span>
                    </div>
                    <div class="flex items-center text-sm">
                      <div
                        class="w-1.5 h-1.5 bg-emerald-600 rounded-full mr-2"
                      ></div>
                      <span class="text-gray-700">効果測定</span>
                    </div>
                    <div class="flex items-center text-sm">
                      <div
                        class="w-1.5 h-1.5 bg-emerald-600 rounded-full mr-2"
                      ></div>
                      <span class="text-gray-700">改善提案</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Right: Benefits & Details -->
            <div>
              <h3 class="text-2xl text-gray-900 mb-8 font-medium">
                内製化のメリット
              </h3>
              <div class="space-y-6 mb-8">
                <!-- Benefit 1 -->
                <div class="flex items-start">
                  <div
                    class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0"
                  >
                    <svg
                      class="w-6 h-6 text-emerald-600"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                      ></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <h4 class="text-lg text-gray-900 mb-2 font-medium">
                      内製化によるコスト削減
                    </h4>
                    <p class="text-gray-600">
                      外注費を削減し、社内で迅速な更新が可能に
                    </p>
                  </div>
                </div>

                <!-- Benefit 2 -->
                <div class="flex items-start">
                  <div
                    class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0"
                  >
                    <svg
                      class="w-6 h-6 text-emerald-600"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                      ></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <h4 class="text-lg text-gray-900 mb-2 font-medium">
                      ノウハウの蓄積
                    </h4>
                    <p class="text-gray-600">
                      社内にWeb運用のノウハウが蓄積される
                    </p>
                  </div>
                </div>

                <!-- Benefit 3 -->
                <div class="flex items-start">
                  <div
                    class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0"
                  >
                    <svg
                      class="w-6 h-6 text-emerald-600"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                      ></path>
                    </svg>
                  </div>
                  <div class="ml-4">
                    <h4 class="text-lg text-gray-900 mb-2 font-medium">
                      スピーディーな対応
                    </h4>
                    <p class="text-gray-600">
                      外注を待たずに、即座に対応できる
                    </p>
                  </div>
                </div>
              </div>

              <!-- Pricing -->
              <div class="p-6 bg-gray-900 text-white rounded-2xl">
                <div class="text-sm text-emerald-400 mb-2">料金プラン</div>
                <div class="text-4xl mb-4 font-medium">月額3万円〜</div>
                <ul class="space-y-2 mb-6">
                  <li class="flex items-center">
                    <svg
                      class="w-4 h-4 mr-2 text-emerald-400"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                      ></path>
                    </svg>
                    月2回のオンライン研修
                  </li>
                  <li class="flex items-center">
                    <svg
                      class="w-4 h-4 mr-2 text-emerald-400"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                      ></path>
                    </svg>
                    チャットでの質問無制限
                  </li>
                  <li class="flex items-center">
                    <svg
                      class="w-4 h-4 mr-2 text-emerald-400"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                      ></path>
                    </svg>
                    資料・マニュアル提供
                  </li>
                  <li class="flex items-center">
                    <svg
                      class="w-4 h-4 mr-2 text-emerald-400"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                      ></path>
                    </svg>
                    3ヶ月以降も継続サポート
                  </li>
                </ul>
                <button
                  onclick="scrollToSection('contact')"
                  class="w-full inline-flex items-center justify-center px-6 py-3 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors font-medium"
                >
                  詳細を問い合わせる
                  <svg
                    class="ml-2 w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"
                    ></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>

          <!-- Success Story -->
          <div
            class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-8 border border-gray-200"
          >
            <h3 class="text-2xl text-gray-900 mb-6 text-center font-medium">
              導入事例
            </h3>
            <div class="grid md:grid-cols-3 gap-6">
              <div class="text-center">
                <div class="text-3xl text-emerald-600 mb-2 font-medium">
                  3ヶ月
                </div>
                <div class="text-gray-600">で独り立ち可能</div>
              </div>
              <div class="text-center">
                <div class="text-3xl text-emerald-600 mb-2 font-medium">
                  70%
                </div>
                <div class="text-gray-600">外注費削減</div>
              </div>
              <div class="text-center">
                <div class="text-3xl text-emerald-600 mb-2 font-medium">
                  2週間
                </div>
                <div class="text-gray-600">更新期間短縮</div>
              </div>
            </div>
            <p class="text-center text-gray-600 mt-6">
              「自社でWebサイトを更新できるようになり、スピーディーに情報発信できるようになりました」<br />
              <span class="text-sm">― 島根県内 観光施設G様</span>
            </p>
          </div>
        </div>
      </section>

      <!-- Portfolio Section -->
      <section id="portfolio" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl text-gray-900 mb-4 font-medium">
              制作実績
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-8">
              葬祭業・観光業を中心に17サイトの実績
            </p>

            <!-- Category Filter -->
            <div class="flex justify-center flex-wrap gap-3">
              <button
                onclick="filterPortfolio('全て')"
                class="portfolio-filter active px-6 py-2 rounded-full transition-all bg-emerald-600 text-white font-medium"
              >
                全て
              </button>
              <button
                onclick="filterPortfolio('葬祭業')"
                class="portfolio-filter px-6 py-2 rounded-full transition-all bg-gray-100 text-gray-700 hover:bg-gray-200 font-medium"
              >
                葬祭業
              </button>
              <button
                onclick="filterPortfolio('観光業')"
                class="portfolio-filter px-6 py-2 rounded-full transition-all bg-gray-100 text-gray-700 hover:bg-gray-200 font-medium"
              >
                観光業
              </button>
              <button
                onclick="filterPortfolio('交通業')"
                class="portfolio-filter px-6 py-2 rounded-full transition-all bg-gray-100 text-gray-700 hover:bg-gray-200 font-medium"
              >
                交通業
              </button>
            </div>
          </div>

          <div
            id="portfolioGrid"
            class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12"
          >
            <!-- Portfolio Item 1 -->
            <div
              class="portfolio-item group bg-white rounded-2xl overflow-hidden border border-gray-200 hover:shadow-xl transition-all duration-300"
              data-category="葬祭業"
            >
              <div class="aspect-[16/10] overflow-hidden relative">
                <img
                  src="https://images.unsplash.com/photo-1633125093835-b9defc313697?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMGZ1bmVyYWwlMjBjZXJlbW9ueXxlbnwxfHx8fDE3NjQzNzQ1MzR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                  alt="葬祭業A社 公式サイト"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
                <div class="absolute top-4 left-4">
                  <span
                    class="px-3 py-1 bg-emerald-600 text-white rounded-full text-sm"
                    >葬祭業</span
                  >
                </div>
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4"
                >
                  <button
                    class="inline-flex items-center px-4 py-2 bg-white text-gray-900 rounded-lg font-medium"
                  >
                    詳細を見る
                    <svg
                      class="ml-2 w-4 h-4"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="p-6">
                <h3 class="text-xl text-gray-900 mb-3 font-medium">
                  葬祭業A社 公式サイト
                </h3>
                <p class="text-gray-600 mb-4 leading-relaxed text-sm">
                  地域密着型の葬祭会社のWebサイトをリニューアル。お問い合わせ数が月間15件→40件に増加。スマホ対応で若年層からのアクセスも増えました。
                </p>
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center text-emerald-600">
                    <svg
                      class="w-4 h-4 mr-1"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                      ></path>
                    </svg>
                    <span class="text-sm font-medium">問い合わせ +166%</span>
                  </div>
                </div>
                <div class="flex flex-wrap gap-2">
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >WordPress</span
                  >
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >SEO対策</span
                  >
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >レスポンシブ</span
                  >
                </div>
              </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div
              class="portfolio-item group bg-white rounded-2xl overflow-hidden border border-gray-200 hover:shadow-xl transition-all duration-300"
              data-category="観光業"
            >
              <div class="aspect-[16/10] overflow-hidden relative">
                <img
                  src="https://images.unsplash.com/photo-1528164344705-47542687000d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbiUyMHRvdXJpc20lMjB0cmF2ZWx8ZW58MXx8fHwxNzY0Mzc0NTM1fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                  alt="観光施設B 予約システム"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
                <div class="absolute top-4 left-4">
                  <span
                    class="px-3 py-1 bg-emerald-600 text-white rounded-full text-sm"
                    >観光業</span
                  >
                </div>
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4"
                >
                  <button
                    class="inline-flex items-center px-4 py-2 bg-white text-gray-900 rounded-lg font-medium"
                  >
                    詳細を見る
                    <svg
                      class="ml-2 w-4 h-4"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="p-6">
                <h3 class="text-xl text-gray-900 mb-3 font-medium">
                  観光施設B 予約システム
                </h3>
                <p class="text-gray-600 mb-4 leading-relaxed text-sm">
                  温泉施設の予約システムを構築。オンライン予約の導入で電話対応が50%削減、予約数は30%増加しました。
                </p>
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center text-emerald-600">
                    <svg
                      class="w-4 h-4 mr-1"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                      ></path>
                    </svg>
                    <span class="text-sm font-medium">予約数 +30%</span>
                  </div>
                </div>
                <div class="flex flex-wrap gap-2">
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >Next.js</span
                  >
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >予約システム</span
                  >
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >決済連携</span
                  >
                </div>
              </div>
            </div>

            <!-- Portfolio Item 3 -->
            <div
              class="portfolio-item group bg-white rounded-2xl overflow-hidden border border-gray-200 hover:shadow-xl transition-all duration-300"
              data-category="葬祭業"
            >
              <div class="aspect-[16/10] overflow-hidden relative">
                <img
                  src="https://images.unsplash.com/photo-1633125093835-b9defc313697?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMGZ1bmVyYWwlMjBjZXJlbW9ueXxlbnwxfHx8fDE3NjQzNzQ1MzR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                  alt="葬祭業C社 会員サイト"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
                <div class="absolute top-4 left-4">
                  <span
                    class="px-3 py-1 bg-emerald-600 text-white rounded-full text-sm"
                    >葬祭業</span
                  >
                </div>
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4"
                >
                  <button
                    class="inline-flex items-center px-4 py-2 bg-white text-gray-900 rounded-lg font-medium"
                  >
                    詳細を見る
                    <svg
                      class="ml-2 w-4 h-4"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="p-6">
                <h3 class="text-xl text-gray-900 mb-3 font-medium">
                  葬祭業C社 会員サイト
                </h3>
                <p class="text-gray-600 mb-4 leading-relaxed text-sm">
                  会員制の事前相談サイトを構築。デジタル化により、事前相談件数が月間10件→25件に増加し、成約率も向上しました。
                </p>
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center text-emerald-600">
                    <svg
                      class="w-4 h-4 mr-1"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                      ></path>
                    </svg>
                    <span class="text-sm font-medium">相談数 +150%</span>
                  </div>
                </div>
                <div class="flex flex-wrap gap-2">
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >会員機能</span
                  >
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >CMS</span
                  >
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >マイページ</span
                  >
                </div>
              </div>
            </div>

            <!-- Portfolio Item 4 -->
            <div
              class="portfolio-item group bg-white rounded-2xl overflow-hidden border border-gray-200 hover:shadow-xl transition-all duration-300"
              data-category="観光業"
            >
              <div class="aspect-[16/10] overflow-hidden relative">
                <img
                  src="https://images.unsplash.com/photo-1528164344705-47542687000d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbiUyMHRvdXJpc20lMjB0cmF2ZWx8ZW58MXx8fHwxNzY0Mzc0NTM1fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                  alt="観光協会D ECサイト"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
                <div class="absolute top-4 left-4">
                  <span
                    class="px-3 py-1 bg-emerald-600 text-white rounded-full text-sm"
                    >観光業</span
                  >
                </div>
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4"
                >
                  <button
                    class="inline-flex items-center px-4 py-2 bg-white text-gray-900 rounded-lg font-medium"
                  >
                    詳細を見る
                    <svg
                      class="ml-2 w-4 h-4"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="p-6">
                <h3 class="text-xl text-gray-900 mb-3 font-medium">
                  観光協会D ECサイト
                </h3>
                <p class="text-gray-600 mb-4 leading-relaxed text-sm">
                  地域特産品のECサイトを制作。Webマーケティングと併せて実施し、初年度売上500万円を達成しました。
                </p>
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center text-emerald-600">
                    <svg
                      class="w-4 h-4 mr-1"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                      ></path>
                    </svg>
                    <span class="text-sm font-medium">売上 500万円</span>
                  </div>
                </div>
                <div class="flex flex-wrap gap-2">
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >ECサイト</span
                  >
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >決済</span
                  >
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >在庫管理</span
                  >
                </div>
              </div>
            </div>

            <!-- Portfolio Item 5 -->
            <div
              class="portfolio-item group bg-white rounded-2xl overflow-hidden border border-gray-200 hover:shadow-xl transition-all duration-300"
              data-category="交通業"
            >
              <div class="aspect-[16/10] overflow-hidden relative">
                <img
                  src="https://images.unsplash.com/photo-1759301248046-278c06d6ef45?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsb2NhbCUyMGJ1c2luZXNzJTIwamFwYW58ZW58MXx8fHwxNzY0Mzc0NTM1fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                  alt="交通業E社 Webサイト"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
                <div class="absolute top-4 left-4">
                  <span
                    class="px-3 py-1 bg-emerald-600 text-white rounded-full text-sm"
                    >交通業</span
                  >
                </div>
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4"
                >
                  <button
                    class="inline-flex items-center px-4 py-2 bg-white text-gray-900 rounded-lg font-medium"
                  >
                    詳細を見る
                    <svg
                      class="ml-2 w-4 h-4"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="p-6">
                <h3 class="text-xl text-gray-900 mb-3 font-medium">
                  交通業E社 Webサイト
                </h3>
                <p class="text-gray-600 mb-4 leading-relaxed text-sm">
                  バス会社のWebサイトをリニューアル。時刻表検索機能の改善で、ユーザー満足度が大幅に向上しました。
                </p>
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center text-emerald-600">
                    <svg
                      class="w-4 h-4 mr-1"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                      ></path>
                    </svg>
                    <span class="text-sm font-medium">利用者満足度 向上</span>
                  </div>
                </div>
                <div class="flex flex-wrap gap-2">
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >WordPress</span
                  >
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >検索機能</span
                  >
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >スマホ最適化</span
                  >
                </div>
              </div>
            </div>

            <!-- Portfolio Item 6 -->
            <div
              class="portfolio-item group bg-white rounded-2xl overflow-hidden border border-gray-200 hover:shadow-xl transition-all duration-300"
              data-category="葬祭業"
            >
              <div class="aspect-[16/10] overflow-hidden relative">
                <img
                  src="https://images.unsplash.com/photo-1633125093835-b9defc313697?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMGZ1bmVyYWwlMjBjZXJlbW9ueXxlbnwxfHx8fDE3NjQzNzQ1MzR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                  alt="葬祭業F社 求人サイト"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
                <div class="absolute top-4 left-4">
                  <span
                    class="px-3 py-1 bg-emerald-600 text-white rounded-full text-sm"
                    >葬祭業</span
                  >
                </div>
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4"
                >
                  <button
                    class="inline-flex items-center px-4 py-2 bg-white text-gray-900 rounded-lg font-medium"
                  >
                    詳細を見る
                    <svg
                      class="ml-2 w-4 h-4"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="p-6">
                <h3 class="text-xl text-gray-900 mb-3 font-medium">
                  葬祭業F社 求人サイト
                </h3>
                <p class="text-gray-600 mb-4 leading-relaxed text-sm">
                  採用サイトを新規制作。若手スタッフの応募が増加し、採用コストが30%削減されました。
                </p>
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center text-emerald-600">
                    <svg
                      class="w-4 h-4 mr-1"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                      ></path>
                    </svg>
                    <span class="text-sm font-medium">応募数 増加</span>
                  </div>
                </div>
                <div class="flex flex-wrap gap-2">
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >採用サイト</span
                  >
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >エントリーフォーム</span
                  >
                  <span
                    class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm"
                    >動画</span
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Additional Info -->
          <div
            class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 text-center"
          >
            <h3 class="text-2xl text-gray-900 mb-4 font-medium">
              その他の実績多数
            </h3>
            <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
              上記以外にも、地方企業のWebサイト・システムを多数制作しています。業界特化の知見を活かし、効果の出るWebサイトを提供します。
            </p>
            <button
              onclick="scrollToSection('contact')"
              class="inline-flex items-center px-6 py-3 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors font-medium"
            >
              実績の詳細を問い合わせる
            </button>
          </div>
        </div>
      </section>

      <!-- Contact Section -->
      <section
        id="contact"
        class="py-16 md:py-24 bg-gradient-to-br from-gray-50 to-white"
      >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl text-gray-900 mb-4 font-medium">
              お問い合わせ
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
              お気軽にご相談ください。初回相談・お見積りは無料です
            </p>
          </div>

          <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
              <form id="contactForm" class="space-y-6">
                <div>
                  <label for="name" class="block text-gray-700 mb-2 font-medium"
                    >お名前 <span class="text-red-500">*</span></label
                  >
                  <input
                    type="text"
                    id="name"
                    name="name"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent outline-none transition-all"
                    placeholder="山田 太郎"
                  />
                </div>

                <div>
                  <label
                    for="email"
                    class="block text-gray-700 mb-2 font-medium"
                    >メールアドレス <span class="text-red-500">*</span></label
                  >
                  <input
                    type="email"
                    id="email"
                    name="email"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent outline-none transition-all"
                    placeholder="example@company.com"
                  />
                </div>

                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <label
                      for="company"
                      class="block text-gray-700 mb-2 font-medium"
                      >会社名</label
                    >
                    <input
                      type="text"
                      id="company"
                      name="company"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent outline-none transition-all"
                      placeholder="株式会社○○"
                    />
                  </div>
                  <div>
                    <label
                      for="phone"
                      class="block text-gray-700 mb-2 font-medium"
                      >電話番号</label
                    >
                    <input
                      type="tel"
                      id="phone"
                      name="phone"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent outline-none transition-all"
                      placeholder="090-1234-5678"
                    />
                  </div>
                </div>

                <div>
                  <label
                    for="service"
                    class="block text-gray-700 mb-2 font-medium"
                    >ご希望のサービス</label
                  >
                  <select
                    id="service"
                    name="service"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent outline-none transition-all"
                  >
                    <option value="">選択してください</option>
                    <option value="website">Webサイト制作</option>
                    <option value="app">アプリ開発</option>
                    <option value="marketing">Webマーケティング</option>
                    <option value="design">デザイン制作</option>
                    <option value="maintenance">運用保守</option>
                    <option value="consulting">DXコンサルティング</option>
                    <option value="training">担当者育成事業</option>
                    <option value="other">その他</option>
                  </select>
                </div>

                <div>
                  <label
                    for="message"
                    class="block text-gray-700 mb-2 font-medium"
                    >お問い合わせ内容 <span class="text-red-500">*</span></label
                  >
                  <textarea
                    id="message"
                    name="message"
                    required
                    rows="5"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent outline-none transition-all resize-none"
                    placeholder="お問い合わせ内容をご記入ください"
                  ></textarea>
                </div>

                <button
                  type="submit"
                  class="w-full inline-flex items-center justify-center px-6 py-3 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors font-medium"
                >
                  送信する
                  <svg
                    class="ml-2 w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
                    ></path>
                  </svg>
                </button>
              </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-8">
              <div>
                <h3 class="text-2xl text-gray-900 mb-6 font-medium">
                  お問い合わせ先
                </h3>
                <div class="space-y-4">
                  <div class="flex items-start">
                    <div
                      class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0"
                    >
                      <svg
                        class="w-6 h-6 text-emerald-600"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                        ></path>
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                        ></path>
                      </svg>
                    </div>
                    <div class="ml-4">
                      <div class="text-gray-700 font-medium">所在地</div>
                      <div class="text-gray-900">
                        島根県西部<br />
                        <span class="text-sm text-gray-500"
                          >（詳細はお問い合わせ時にお伝えします）</span
                        >
                      </div>
                    </div>
                  </div>

                  <div class="flex items-start">
                    <div
                      class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0"
                    >
                      <svg
                        class="w-6 h-6 text-emerald-600"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                        ></path>
                      </svg>
                    </div>
                    <div class="ml-4">
                      <div class="text-gray-700 font-medium">
                        メールアドレス
                      </div>
                      <div class="text-gray-900">info@u-web-shimane.com</div>
                    </div>
                  </div>

                  <div class="flex items-start">
                    <div
                      class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0"
                    >
                      <svg
                        class="w-6 h-6 text-emerald-600"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                        ></path>
                      </svg>
                    </div>
                    <div class="ml-4">
                      <div class="text-gray-700 font-medium">電話番号</div>
                      <div class="text-gray-900">090-XXXX-XXXX</div>
                      <div class="text-sm text-gray-500">
                        ※お問い合わせフォームをご利用ください
                      </div>
                    </div>
                  </div>

                  <div class="flex items-start">
                    <div
                      class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0"
                    >
                      <svg
                        class="w-6 h-6 text-emerald-600"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                        ></path>
                      </svg>
                    </div>
                    <div class="ml-4">
                      <div class="text-gray-700 font-medium">営業時間</div>
                      <div class="text-gray-900">
                        平日 9:00 - 18:00<br />
                        <span class="text-sm text-gray-500"
                          >（土日祝日は休業）</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="p-6 bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl"
              >
                <h4 class="text-lg text-gray-900 mb-3 font-medium">
                  初回相談無料
                </h4>
                <p class="text-gray-600 leading-relaxed mb-4">
                  プロジェクトのご相談、お見積りは無料です。オンラインでのご相談も承っております。島根・山口エリアを中心に対応しています。
                </p>
                <div class="space-y-2 text-sm">
                  <div class="flex items-center text-emerald-700">
                    <div class="w-2 h-2 bg-emerald-600 rounded-full mr-2"></div>
                    島根県・山口県は訪問対応可能
                  </div>
                  <div class="flex items-center text-emerald-700">
                    <div class="w-2 h-2 bg-emerald-600 rounded-full mr-2"></div>
                    全国対応（オンライン）
                  </div>
                  <div class="flex items-center text-emerald-700">
                    <div class="w-2 h-2 bg-emerald-600 rounded-full mr-2"></div>
                    2営業日以内に返信
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
          <!-- Company Info -->
          <div class="md:col-span-2">
            <div class="text-2xl mb-4 text-emerald-400 font-medium">
              U_WEB
            </div>
            <p class="text-gray-400 leading-relaxed mb-4">
              島根県西部を拠点に、地方企業のデジタル化を支援。Web制作・アプリ開発・デジタルマーケティング・ホームページ担当者育成事業を展開しています。
            </p>
            <div class="text-sm text-gray-500 mb-4">
              島根県西部 | 葬祭業・観光業特化 | 17サイトの実績
            </div>
            <div class="flex space-x-4">
              <a
                href="#"
                class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-emerald-600 transition-colors"
                aria-label="Twitter"
              >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"
                  ></path>
                </svg>
              </a>
              <a
                href="#"
                class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-emerald-600 transition-colors"
                aria-label="GitHub"
              >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                  ></path>
                </svg>
              </a>
              <a
                href="#"
                class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-emerald-600 transition-colors"
                aria-label="LinkedIn"
              >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                  ></path>
                </svg>
              </a>
              <a
                href="mailto:info@u-web-shimane.com"
                class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-emerald-600 transition-colors"
                aria-label="Email"
              >
                <svg
                  class="w-5 h-5"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                  ></path>
                </svg>
              </a>
            </div>
          </div>

          <!-- Services -->
          <div>
            <h3 class="mb-4 font-medium">サービス</h3>
            <ul class="space-y-2">
              <li>
                <button
                  onclick="scrollToSection('services')"
                  class="text-gray-400 hover:text-white transition-colors"
                >
                  Webサイト制作
                </button>
              </li>
              <li>
                <button
                  onclick="scrollToSection('services')"
                  class="text-gray-400 hover:text-white transition-colors"
                >
                  アプリ開発
                </button>
              </li>
              <li>
                <button
                  onclick="scrollToSection('services')"
                  class="text-gray-400 hover:text-white transition-colors"
                >
                  Webマーケティング
                </button>
              </li>
              <li>
                <button
                  onclick="scrollToSection('training')"
                  class="text-gray-400 hover:text-white transition-colors"
                >
                  担当者育成事業
                </button>
              </li>
            </ul>
          </div>

          <!-- Links -->
          <div>
            <h3 class="mb-4 font-medium">メニュー</h3>
            <ul class="space-y-2">
              <li>
                <button
                  onclick="scrollToSection('strengths')"
                  class="text-gray-400 hover:text-white transition-colors"
                >
                  強み
                </button>
              </li>
              <li>
                <button
                  onclick="scrollToSection('portfolio')"
                  class="text-gray-400 hover:text-white transition-colors"
                >
                  制作実績
                </button>
              </li>
              <li>
                <button
                  onclick="scrollToSection('contact')"
                  class="text-gray-400 hover:text-white transition-colors"
                >
                  お問い合わせ
                </button>
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >ブログ</a
                >
              </li>
            </ul>
          </div>
        </div>

        <!-- Bottom Bar -->
        <div class="pt-8 border-t border-gray-800">
          <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="text-gray-400 text-sm mb-4 md:mb-0">
              © 2025 U_WEB. All rights reserved. |
              島根県西部を拠点とした地方���生パートナー
            </div>
            <div class="flex space-x-6 text-sm">
              <a
                href="#"
                class="text-gray-400 hover:text-white transition-colors"
                >プライバシーポリシー</a
              >
              <a
                href="#"
                class="text-gray-400 hover:text-white transition-colors"
                >利用規約</a
              >
              <a
                href="#"
                class="text-gray-400 hover:text-white transition-colors"
                >特定商取引法に基づく表記</a
              >
              <button
                onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
                class="text-gray-400 hover:text-white transition-colors"
              >
                ↑ トップへ
              </button>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
