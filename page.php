<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php

	                        if ( is_page('cool') ) {
	                                    echo "<center>Cool! (Displayed by page.php)</center>";
	                                    $query = new AirpressQuery();
	                                    $query->setConfig("Default");
	                                    $query->table("Furniture");
	                                    $query->addFilter("{Type}='Chairs'");

	                                    $events = new AirpressCollection($query);

	                                    foreach($events as $e){

	                                            echo "<a href='/wp502a/furniture/".$e["ID"]."' target='_blank'>".$e["Name"]."</a>:<br>".
	                                            substr($e["Description"],0,300)."<br><img src='".
	                                            $e["pic_name"]."'><hr><br>";
	                                    }
	                        }
	                    ?>
<?php
get_sidebar();
get_footer();
