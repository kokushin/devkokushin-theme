<?php get_header(); ?>

<main class="blog-contents">
  <div class="in">

    <div id="moguobject"></div>

    <div class="blog-article">

      <?php if ( have_posts() ): ?>
          <?php while( have_posts() ) : the_post(); ?>

              <?php get_template_part( 'content' ); ?>

          <?php endwhile; ?>
      <?php endif; ?>

    </div>

    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

  </div>
</main>

<?php get_footer(); ?>