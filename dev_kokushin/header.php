<!DOCTYPE html>
<html class="no-js" lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>
<meta charset="UTF-8">

<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no">

<?php
    $description = mb_substr(strip_tags($post-> post_content),0,150);
    if (is_single()) :
?>
<meta name="description" content="<?php echo str_replace(array("\r\n","\r","\n"), '', $description); ?>">
<?php else : ?>
<meta name="description" content="<?php bloginfo('description'); ?>">
<?php endif; ?>
<meta name="keywords" content="kokushin,kokushing,dev.kokushin">

<meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
<?php if (is_single()) : ?>
<meta property="og:description" content="<?php echo str_replace(array("\r\n","\r","\n"), '', $description); ?>">
<meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:type" content="article">
<?php else : ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:image" content="<?php bloginfo('template_directory') ?>/share.png">
<meta property="og:url" content="<?php echo home_url(); ?>">
<meta property="og:type" content="website">
<?php endif; ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:email" content="mail@kokush.in">
<meta property="fb:app_id" content="1515314052098951">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@kokushing">
<meta name="twitter:creator" content="@kokushing">
<meta name="twitter:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
<?php if (is_single()) : ?>
<meta name="twitter:description" content="<?php echo str_replace(array("\r\n","\r","\n"), '', $description); ?>">
<meta name="twitter:image:src" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
<?php else : ?>
<meta name="twitter:description" content="<?php bloginfo('description'); ?>">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory') ?>/share.png">
<?php endif; ?>

<link rel="canonical" href="<?php echo home_url(); ?>">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/icon.png">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Inconsolata:400,700">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/asset/css/common.css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72895839-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<?php if (is_front_page() || is_category() || is_tag() || is_search()) : ?>
<body class="page-index">
<?php elseif (is_single() || is_page()) : ?>
<body class="page-single">
<?php else : ?>
<body class="page-other">
<?php endif; ?>

<header class="blog-header">
  <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
  <nav>
    <a href="<?php echo home_url(); ?>/category/develop/">Develop</a>
    <a href="<?php echo home_url(); ?>/category/diary/">Diary</a>
    <a href="<?php echo home_url(); ?>/about/">About</a>
    <a href="javascript:void(0);" class="icon-search"><i class="fa fa-search"></i></a>
  </nav>
</header>

<div class="blog-search">
  <form action="<?php bloginfo('url'); ?>" method="GET">
    <input type="text" name="s" value="<?php the_search_query(); ?>" autofocus>
  </form>
</div>