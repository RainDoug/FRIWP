<?php
/** Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 logo">
						<img src='<?php the_field(); ?>' class="img-responsive" alt="Responsive image">
					</div>
					<div class="col-md-8 menu">
						<?php wp_nav_menu(); ?>
					</div>

				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
