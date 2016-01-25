<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
    <div class="post-wrapper">
          <section id="posts" class="page-index isotope">

          <?php //echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="10" max_pages="0"]'); ?>

		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('content', get_post_format()); ?>

			<?php endwhile; ?>



		<?php else : ?>

			<?php get_template_part('content', 'none'); ?>

		<?php endif; ?>
        </section>

        <?php the_posts_navigation(); ?>

    </div><!-- .post-wrapper-->



<?php get_footer(); ?>
