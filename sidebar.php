<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package qblog
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
	<?php qblog_entry_footer(); ?>

	<div class="social-sharing">
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55d354da07f14ab6" async="async"></script>
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<div class="addthis_sharing_toolbox"></div>
	</div>
</div><!-- #secondary -->
