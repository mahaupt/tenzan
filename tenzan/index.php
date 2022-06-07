<?php get_header(); ?>

<main>
	<?php if ( have_posts() ) : ?>
		<?php if ( is_home() && is_front_page() ) : ?>
			<?php get_template_part( 'templates/post' ); ?>
		<?php else : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>

				<?php get_template_part( 'templates/post' ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>