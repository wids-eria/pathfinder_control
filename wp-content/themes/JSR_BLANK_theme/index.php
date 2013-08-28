<?php get_header(); ?>

	<div class="main_content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	
				<div class="entry">
					<?php the_content(); ?>
				</div>
	
			</div>
	
		<?php endwhile; ?>
	
		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
	
		<?php else : ?>
	
			<h2>Not Found</h2>
	
		<?php endif; ?>
	
	</div>

<?php get_footer(); ?>
