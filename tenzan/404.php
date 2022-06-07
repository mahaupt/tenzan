<?php get_header(); ?>

<main>
	<section>
		<article>
			<h1><?php echo esc_html( 'Page not found' ); ?></h1>

			<h2>
				<a href="<?php echo esc_attr( home_url() ); ?>">
					<?php echo esc_html( 'Homepage' ); ?>
				</a>
			</h2>
		</article>
	</section>
</main>

<?php get_footer(); ?>