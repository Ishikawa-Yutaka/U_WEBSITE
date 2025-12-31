<?php get_header(); ?>

    <!-- Main Content -->
    <main class="pt-24 pb-16 bg-gray-50">
      <?php while ( have_posts() ) : the_post(); ?>
      <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-amber-600">ホーム</a>
          <span>/</span>
          <a href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>" class="hover:text-amber-600">NEWS</a>
          <span>/</span>
          <span class="text-gray-900 truncate"><?php the_title(); ?></span>
        </div>

        <!-- Article Header -->
        <header class="bg-white rounded-xl p-8 mb-8 shadow-sm">
          <h1 class="text-3xl md:text-4xl text-gray-900 mb-4 font-medium leading-tight">
            <?php the_title(); ?>
          </h1>

          <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              <time datetime="<?php echo get_the_date( 'c' ); ?>" class="text-amber-600 font-medium"><?php echo get_the_date(); ?></time>
            </div>
          </div>
        </header>

        <!-- Featured Image -->
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="mb-8 rounded-xl overflow-hidden shadow-md">
          <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto' ) ); ?>
        </div>
        <?php endif; ?>

        <!-- Article Content -->
        <div class="bg-white rounded-xl p-8 md:p-12 mb-8 shadow-sm prose prose-lg max-w-none">
          <?php the_content(); ?>
        </div>

        <!-- Navigation -->
        <nav class="bg-white rounded-xl p-6 shadow-sm">
          <div class="grid md:grid-cols-2 gap-4">
            <?php
            $prev_post = get_previous_post();
            $next_post = get_next_post();
            ?>

            <?php if ( $prev_post ) : ?>
            <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="flex items-center gap-3 p-4 border border-gray-200 rounded-lg hover:border-amber-600 hover:bg-amber-50 transition-all group">
              <svg class="w-6 h-6 text-gray-400 group-hover:text-amber-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
              </svg>
              <div class="flex-grow min-w-0">
                <div class="text-xs text-gray-500 mb-1">前のお知らせ</div>
                <div class="text-gray-900 font-medium truncate"><?php echo esc_html( get_the_title( $prev_post->ID ) ); ?></div>
              </div>
            </a>
            <?php else : ?>
            <div></div>
            <?php endif; ?>

            <?php if ( $next_post ) : ?>
            <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="flex items-center gap-3 p-4 border border-gray-200 rounded-lg hover:border-amber-600 hover:bg-amber-50 transition-all group">
              <div class="flex-grow min-w-0 text-right">
                <div class="text-xs text-gray-500 mb-1">次のお知らせ</div>
                <div class="text-gray-900 font-medium truncate"><?php echo esc_html( get_the_title( $next_post->ID ) ); ?></div>
              </div>
              <svg class="w-6 h-6 text-gray-400 group-hover:text-amber-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
            <?php endif; ?>
          </div>

          <div class="mt-4 pt-4 border-t border-gray-200 text-center">
            <a href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>" class="inline-flex items-center gap-2 text-amber-600 hover:text-amber-700 font-medium">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
              </svg>
              NEWS一覧に戻る
            </a>
          </div>
        </nav>
      </article>
      <?php endwhile; ?>
    </main>

<?php get_footer(); ?>
