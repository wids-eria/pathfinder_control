<?php get_header(); ?>

	<div class="main_content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div class="mc_header"><h1><?php the_title(); ?></h1></div>
				<hr>
	
				<div class="entry">
					
					<?php the_content(); ?>
	
				</div>
				
				<div class="edit_post_container"><?php edit_post_link('Edit this entry','',''); ?></div>
				
			</div>
	
		<?php endwhile; endif; ?>
	
	</div>

<?php get_footer(); ?>
