<?php get_header(); ?>

    <!-- Main Content -->
    <main class="pt-24 pb-16 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <div class="mb-12">
          <div class="flex items-center gap-2 text-sm text-gray-500 mb-4">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-emerald-600">ホーム</a>
            <span>/</span>
            <span class="text-gray-900">
              <?php
              if ( is_category() ) {
                single_cat_title();
              } elseif ( is_tag() ) {
                single_tag_title();
              } elseif ( is_date() ) {
                echo get_the_date( 'Y年n月' );
              } else {
                echo 'ブログ';
              }
              ?>
            </span>
          </div>

          <h1 class="text-4xl md:text-5xl text-gray-900 mb-4 font-medium">
            <?php
            if ( is_category() ) {
              single_cat_title();
            } elseif ( is_tag() ) {
              echo 'タグ: ';
              single_tag_title();
            } elseif ( is_date() ) {
              echo get_the_date( 'Y年n月' );
            } else {
              echo 'ブログ';
            }
            ?>
          </h1>

          <?php if ( is_category() && category_description() ) : ?>
          <p class="text-lg text-gray-600 max-w-3xl">
            <?php echo category_description(); ?>
          </p>
          <?php else : ?>
          <p class="text-lg text-gray-600 max-w-3xl">
            Web制作・デジタルマーケティングに関する情報をお届けします
          </p>
          <?php endif; ?>
        </div>

        <!-- Blog Posts Grid -->
        <?php if ( have_posts() ) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
          <?php while ( have_posts() ) : the_post(); ?>
          <article class="bg-white rounded-xl overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow">
            <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>">
              <div class="aspect-video overflow-hidden">
                <?php the_post_thumbnail( 'medium', array( 'class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300' ) ); ?>
              </div>
            </a>
            <?php else : ?>
            <a href="<?php the_permalink(); ?>">
              <div class="aspect-video bg-gradient-to-br from-emerald-100 to-teal-100 flex items-center justify-center">
                <svg class="w-16 h-16 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
              </div>
            </a>
            <?php endif; ?>

            <div class="p-6">
              <div class="flex items-center gap-2 mb-3">
                <time class="text-sm text-gray-500"><?php echo get_the_date(); ?></time>
                <?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) :
                  echo '<span class="px-2 py-1 bg-emerald-100 text-emerald-700 rounded text-xs font-medium">' . esc_html( $categories[0]->name ) . '</span>';
                endif;
                ?>
              </div>

              <h2 class="text-xl text-gray-900 mb-3 font-medium line-clamp-2">
                <a href="<?php the_permalink(); ?>" class="hover:text-emerald-600 transition-colors">
                  <?php the_title(); ?>
                </a>
              </h2>

              <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 mb-4">
                <?php echo wp_trim_words( get_the_excerpt(), 50, '...' ); ?>
              </p>

              <a href="<?php the_permalink(); ?>" class="text-emerald-600 hover:text-emerald-700 flex items-center gap-1 text-sm font-medium">
                続きを読む
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
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
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h2 class="text-2xl text-gray-900 mb-2 font-medium">記事が見つかりませんでした</h2>
          <p class="text-gray-600 mb-6">該当する記事がありません</p>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center px-6 py-3 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors font-medium">
            ホームに戻る
          </a>
        </div>
        <?php endif; ?>
      </div>
    </main>

<?php get_footer(); ?>
