<?php get_header(); ?>

	<div class="main_content">

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			
		<div <?php post_class() ?>>
				
		<ul class="bias_buttons">
			<li><a href="<?php the_permalink() ?>"><span><?php the_title(); ?></span></a></li>
		</ul>
	</div>

			<?php endwhile; ?>
			
		<?php else : ?>
	
			<h2>Nothing found</h2>
	
		<?php endif; ?>


	
					
	
	</div>


<?php get_footer(); ?>
