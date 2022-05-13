<?php
/*
固定ページ（サイトについて、プロフィール、お問い合わせ、etc...）表示
*/
?>

<?php get_header(); ?>
	  
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article <?php post_class('mycontainer'); ?>>

	<div class="myposthead">
		<h1><?php the_title(); ?></h1>
		<p>
			<?php echo esc_html(strtoupper(get_post_field('post_name'))); ?>
		</p>
	</div>

<?php the_content(); ?>
		
<?php the_post_navigation(); ?>
		
</article>

<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
	  
<?php get_footer(); ?>
