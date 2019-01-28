<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav">' . esc_html__( '&laquo; Next Post', 'yosemite-lite' ) . '</span> <span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav">' . esc_html__( 'Previous Post &raquo;', 'yosemite-lite' ) . '</span> <span class="post-title">%title</span>',
			) );

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
