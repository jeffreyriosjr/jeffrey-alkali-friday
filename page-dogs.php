<?php
/**
 * Template Name: Dogs Template
 * The template for displaying all our dogs
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jeffrey-alkali-friday
 */

get_header();
?>
    <div class="container">
	<main id="primary" class="site-main">
    <h1>The Dogs Page</h1>

		<?php
		while ( have_posts() ) :
			the_post(); ?>

            <div class="row">
                <div class="col">
                    <h1 class="text-center">
                    <?php the_title(); ?>
                    </h1>
              </div>
            </div>


            <?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div>
<?php
get_sidebar();
get_footer();
