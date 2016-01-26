<?php get_header(); ?>

<main class="blog-contents">
  <div class="in">

    <div id="moguobject"></div>

    <div class="blog-article">

      <p class="search-result"><span><?php echo get_search_query(); ?></span>の検索結果</p>

      <?php if ( have_posts() ): ?>
        <?php while( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content' ); ?>

        <?php endwhile ; ?>
      <?php else : ?>

          <p class="search-error">検索結果が存在しません</p>

      <?php endif; ?>
    </div>

  </div>
</main>

<?php get_footer(); ?>