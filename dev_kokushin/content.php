<?php
    $category = get_the_category();
    $cat_name = $category[0]->cat_name;
?>

<article>
<a href="<?php the_permalink(); ?>">
  <div class="meta">
    <div class="category"><?php echo $cat_name; ?></div>
    <h2><span><?php the_title(); ?></span></h2>
    <time><?php the_time('Y.m.d');?></time>
  </div>
</a>
</article>