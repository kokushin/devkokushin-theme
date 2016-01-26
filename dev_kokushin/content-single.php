<?php
    $category = get_the_category();
    $cat_name = $category[0]->cat_name;
?>

<article>
  <div class="in">
    <div class="meta">
      <div class="category"><?php echo $cat_name; ?></div>
      <h2><span><?php the_title(); ?></span></h2>
      <div class="wrap">
        <time><?php the_time('Y.m.d');?></time>
        <div class="author"><i></i>@kokushing</div>
      </div>
    </div>
  </div>

  <figure><span style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)"></span></figure>

  <div class="in">
    <div class="letter-body">
      <?php the_content(); ?>
    </div>
  </div>
</article>