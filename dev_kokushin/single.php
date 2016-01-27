<?php get_header(); ?>

<main class="blog-contents">

  <div class="blog-article">

    <?php if ( have_posts() ): ?>
        <?php while( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'single' ); ?>

        <?php endwhile; ?>
    <?php endif; ?>

  </div>

  <?php get_template_part( 'content', 'share' ); ?>

  <?php get_template_part( 'content', 'pager' ); ?>

  <div class="btn-return"><a href="<?php echo home_url(); ?>">Back Index</a></div>

</main>

<?php get_footer(); ?>