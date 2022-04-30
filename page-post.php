<?php
/*
Template Name: 
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
			</a>
		</article>

	<?php endwhile; endif; ?>
</div>

<?php get_sidebar(); ?>
	  
<?php get_footer(); ?>
