<?php get_header(); ?>

<div class="single">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<h1><?php the_title(); ?></h1>
		<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?> <!-- Meta data -->
		<?php the_content(); ?> <!-- CONTENT GOES HERE -->	

	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>