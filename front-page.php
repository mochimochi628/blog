<?php
/*
トップページ表示
*/
?>

<?php get_header(); ?>

<div class="mypostlist">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>

		<article <?php post_class(); ?>>
			<a href="<?php the_permalink() ;?>">
			<?php if(has_post_thumbnail() ): ?>
				<figure>
					<?php the_post_thumbnail(); ?>
				</figure>
			<?php endif; ?>

			<h2><?php the_title(); ?></h2>
		    <span datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
				    <?php echo esc_html(get_the_date()); ?>
			</span>
			</a>
		</article>

	<?php endwhile; endif; ?>
</div>

<?php the_posts_pagination( array(
    'prev_text' => '&lt;',
	'next_text' => '&gt;'
)); ?>

<?php get_sidebar(); ?>
	  
<?php get_footer(); ?>
