<?php
/**
 * The template for displaying all single posts.
 *
 * @package qblog
 */

get_header(); ?>
<div class="post-wrapper" id="post">
    <section id="post_content" class="page-permalink"> 

        <?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

		<?php endwhile; // end of the loop. ?>
    </section>	

    <div id="post-details">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
