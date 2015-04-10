<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package qblog
 */

get_header(); ?>

	<div id="post" class="content-area">
			<section class="error-404 not-found" id="post_content">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'qblog' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'qblog' ); ?></p>

					<?php get_search_form(); ?>
<br /><br />

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

	</div><!-- #primary -->

<?php get_footer(); ?>
