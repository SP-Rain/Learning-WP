<?php
/*
Template Name: Home page
*/
?>

<?php get_header(); ?>

<div class="main">

<?php include 'nav.php'; ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php the_content(); ?> <!-- MAIN CONTENT GOES HERE -->	

	<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>




