<?php
/**
 * The template for displaying all single posts.
 *
 * @package qblog
 */

get_header(); ?>
<div class="post-wrapper" id="post">
 	<div class="centered">
	    <section id="post_content" class="page-permalink">

	        <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>



			<?php endwhile; // end of the loop. ?>
	    </section>

	    <div id="post-details">
	        <?php get_sidebar(); ?>
	    </div>

                <div class="post-navigation">
                    <div class="prev"><?php previous_post_link('%link', 'Prev Post', TRUE); ?> </div>
                    <div class="next"><?php next_post_link('%link', 'Next Post', TRUE); ?></div>
                </div>

   	</div>
</div>
<?php get_footer(); ?>
