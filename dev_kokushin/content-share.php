<div class="share-post">

  <a class="twitter" href="//twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php echo get_the_title(); ?>&amp;via=kokushing&amp;tw_p=tweetbutton&amp;related=kokushing" target="_blank">
    <i class="fa fa-twitter"></i>
    <span><?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'':scc_get_share_twitter(); ?></span>
  </a>

  <a class="facebook" href="//www.facebook.com/share.php?u=<?php the_permalink(); ?>&amp;t=<?php echo get_the_title(); ?>" target="_blank">
    <i class="fa fa-facebook"></i>
    <span><?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':scc_get_share_facebook(); ?></span>
  </a>

  <a class="google" href="//plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank">
    <i class="fa fa-google"></i>
    <span><?php if(function_exists('scc_get_share_gplus')) echo (scc_get_share_gplus()==0)?'':scc_get_share_gplus(); ?></span>
  </a>

  <a class="hatena" href="//b.hatena.ne.jp/add?mode=confirm&map;url=<?php the_permalink(); ?>&amp;title=<?php echo get_the_title(); ?>" target="_blank">
    <i>B!</i>
    <span><?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'':scc_get_share_hatebu(); ?></span>
  </a>

  <a class="pocket" href="//getpocket.com/edit?url=<?php the_permalink();?>&amp;title=<?php echo get_the_title;?>" target="blank">
    <i class="fa fa-get-pocket"></i>
    <span><?php if(function_exists('scc_get_share_pocket')) echo (scc_get_share_pocket()==0)?'':scc_get_share_pocket(); ?></span>
  </a>

</div>