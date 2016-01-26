<?php
  $nextpost = get_adjacent_post(false, '', false);
  $prevpost = get_adjacent_post(false, '', true);
?>

<?php if ($nextpost || $prevpost) : ?>
<ul class="pager in">
  <?php if ($nextpost) : ?>
  <li class="next">
    <a href="<?php echo get_permalink($nextpost->ID); ?>">
      <figure><span style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($nextpost->ID)); ?>)"></span></figure>
      <h3><span><?php echo get_the_title($nextpost->ID); ?></span></h3>
    </a>
  </li>
  <?php endif; ?>
  <?php if ($prevpost) : ?>
  <li class="prev">
    <a href="<?php echo get_permalink($prevpost->ID); ?>">
      <figure><span style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($prevpost->ID)); ?>)"></span></figure>
      <h3><span><?php echo get_the_title($prevpost->ID); ?></span></h3>
    </a>
  </li>
  <?php endif; ?>
</ul>
<?php endif; ?>