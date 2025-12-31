<?php get_header(); ?>

    <!-- Main Content -->
    <main class="pt-24 pb-16 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <div class="mb-12">
          <div class="flex items-center gap-2 text-sm text-gray-500 mb-4">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-emerald-600">ホーム</a>
            <span>/</span>
            <span class="text-gray-900">NEWS</span>
          </div>

          <h1 class="text-4xl md:text-5xl text-gray-900 mb-4 font-medium">
            NEWS
          </h1>

          <p class="text-lg text-gray-600 max-w-3xl">
            U_WEBからのお知らせ・最新情報
          </p>
        </div>

        <!-- NEWS List -->
        <?php if ( have_posts() ) : ?>
        <div class="space-y-4 mb-12">
          <?php while ( have_posts() ) : the_post(); ?>
          <article class="bg-white rounded-xl p-6 border border-gray-200 hover:border-emerald-300 hover:shadow-md transition-all">
            <div class="flex flex-col md:flex-row md:items-center gap-4">
              <time class="text-emerald-600 font-medium flex-shrink-0 text-lg">
                <?php echo get_the_date(); ?>
              </time>

              <h2 class="text-lg md:text-xl text-gray-900 font-medium flex-grow">
                <a href="<?php the_permalink(); ?>" class="hover:text-emerald-600 transition-colors">
                  <?php the_title(); ?>
                </a>
              </h2>

              <a href="<?php the_permalink(); ?>" class="text-emerald-600 hover:text-emerald-700 flex items-center gap-1 text-sm font-medium flex-shrink-0">
                詳細を見る
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>

            <?php if ( has_excerpt() ) : ?>
            <div class="mt-4 text-gray-600 text-sm">
              <?php the_excerpt(); ?>
            </div>
            <?php endif; ?>
          </article>
          <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <?php
        $pagination = paginate_links( array(
          'prev_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>',
          'next_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
          'type' => 'array'
        ) );

        if ( $pagination ) :
        ?>
        <nav class="flex justify-center" aria-label="ページナビゲーション">
          <ul class="flex items-center gap-2">
            <?php foreach ( $pagination as $page ) : ?>
            <li><?php echo str_replace( array( 'page-numbers', 'current' ), array( 'px-4 py-2 rounded-lg border border-gray-300 hover:border-emerald-600 hover:text-emerald-600 transition-colors', 'px-4 py-2 rounded-lg bg-emerald-600 text-white border border-emerald-600' ), $page ); ?></li>
            <?php endforeach; ?>
          </ul>
        </nav>
        <?php endif; ?>

        <?php else : ?>
        <!-- No Posts Found -->
        <div class="text-center py-16 bg-white rounded-xl">
          <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
            </svg>
          </div>
          <h2 class="text-2xl text-gray-900 mb-2 font-medium">お知らせがありません</h2>
          <p class="text-gray-600 mb-6">現在、公開中のお知らせはありません</p>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center px-6 py-3 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors font-medium">
            ホームに戻る
          </a>
        </div>
        <?php endif; ?>
      </div>
    </main>

<?php get_footer(); ?>
