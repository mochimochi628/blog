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

<a href="//af.moshimo.com/af/c/click?a_id=3292872&p_id=2688&pc_id=6039&pl_id=47679&url=https%3A%2F%2Fhomeo-jp.net%2Ffreeband.html" rel="nofollow" referrerpolicy="no-referrer-when-downgrade"><img src="https://image.moshimo.com/af-img/2121/000000047679.jpg" style="border:none;"></a><img src="//i.moshimo.com/af/i/impression?a_id=3292872&p_id=2688&pc_id=6039&pl_id=47679" width="1" height="1" style="border:none;">

<?php the_posts_pagination( array(
    'prev_text' => '&lt;',
	'next_text' => '&gt;'
)); ?>

<?php get_sidebar(); ?>
	  
<?php get_footer(); ?>
