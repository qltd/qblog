<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package qblog
 */

get_header(); ?>

    <div class="post-wrapper">
          <section id="posts" class="page-index isotope">
		<?php if ( have_posts() ) : ?>

			<header class="page-header archived">

				<?php if (is_tag()): ?>
					<h2 class="">Displaying posts tagged: #<?php echo single_tag_title( '', false ); ?></h2>
				<?php else: ?>
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<?php endif;  ?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

        </section>
    </div><!-- .post-wrapper-->

<?php get_footer(); ?>
