<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	  
	<?php if(is_single()): ?>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
		<meta property="og:locale" content="ja_JP">
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?php the_title(); ?>">
		<meta property="og:url" content="<?php the_permalink(); ?>">
		<meta property="og:description" content="<?php echo esc_attr(wp_strip_all_tags(get_the_excerpt())); ?>">
	  
		<?php if(has_post_thumbnail()): ?>
			<?php $myimg = get_post_thumbnail_id(); ?>
			<meta property="og:image" content="<?php echo esc_url(wp_get_attachment_url($myimg)); ?>">
			<meta property="og:image:width" content="<?php echo esc_attr(wp_get_attachment_metadata($myimg)['width']); ?>">
			<meta property="og:image:height" content="<?php echo esc_attr(wp_get_attachment_metadata($myimg)['height']); ?>">
		<?php endif; ?>

		<meta name="twitter:card" content="summary_large_image">
		<meta property="fb:app_id" content="315709412868889">
	<?php endif; ?>
	  
	<?php wp_head(); ?>
	  
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7635107517418701" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
　　<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
　　<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
  </head>
	
  <body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	  
	<header class="myhead mycontainer">
	  <div class="alignwide">
		  <a href="<?php echo esc_url(home_url('/')); ?>">
			<img class="lazyload" width="500" height="100" src="https://mochimochi628.com/wp-content/uploads/2022/02/top.png" alt="もちもちぐらし"　data-src="https://mochimochi628.com/wp-content/uploads/2022/02/top.png">  
		  </a>

		  <p><?php bloginfo('description'); ?></p>
	  </div>
	</header>
	
	<div class="container">
		<!-- ハンバーガーメニュー --> 
		<div class="toggle">
            <span></span>
            <span></span>
            <span></span>
    　  </div>
		
	    <?php if(has_nav_menu('primary')): ?>  
	    <nav class="mynav">
		  <div class="mycontainer">
			  <div class="alignwide">
			      <?php wp_nav_menu(array(
					'theme_location' => 'primary',
				  )); ?>
			  </div>
		  </div>
	   </nav>
	  <?php endif; ?>
	</div>
	
	<div
		 <?php if(current_theme_supports('mycols')): ?>
		class="mycols"
		 <?php endif; ?>
		>
		<div class="mycontent">
