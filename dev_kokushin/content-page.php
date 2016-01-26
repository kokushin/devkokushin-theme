<article>
  <div class="in">
    <div class="meta">
      <div class="category"><?php echo $post->post_name; ?></div>
      <h2><span><?php the_title(); ?></span></h2>
      <div class="wrap">
        <time><?php the_time('Y.m.d');?></time>
        <div class="author"><i></i>@kokushing</div>
      </div>
    </div>
  </div>

  <div class="in">
    <div class="letter-body">
      <?php the_content(); ?>
    </div>
  </div>
</article>