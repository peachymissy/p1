<?php?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yosemite-lite' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding container">
			<?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php endif; ?>
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
			endif; ?>
		</div><!-- .logo -->

		<div class="header-content">
			<div class="header-content__container container">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'yosemite-lite' ); ?></button>
					<?php wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id' => 'primary-menu',
					) ); ?>
				</nav><!-- #site-navigation -->

				<?php if ( function_exists( 'jetpack_social_menu' ) ) : ?>
					<?php jetpack_social_menu(); ?>
				<?php endif; ?>

				<!-- .header-search -->
				<?php get_search_form(); ?>

			</div>
		</div><!-- .header-content -->

	</header><!-- #masthead -->
	<?php
	// Display featured posts on the homepage.
	if ( is_front_page() ) {
		get_template_part( 'template-parts/featured-content' );
	}
	?>

	<div id="content" class="site-content container">
