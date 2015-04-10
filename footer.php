<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package qblog
 */
?>


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/masonry/3.2.2/masonry.pkgd.min.js"></script>
<script>
( function( $ ) {
    
    var $container = $('#posts');

    $container.masonry({
        itemSelector: '.post'
    });

    var infinite_count = 0;
    $( document.body ).on( 'post-load', function () {
        infinite_count = infinite_count + 1;
        var $container = $('#posts').masonry();
        var $selector = $('#infinite-view-' + infinite_count);
        var $elements = $selector.find('.hentry');
        // $elements.hide();
        $container.masonry('reloadItems');
        //$elements.fadeIn();
    } );

    //hide nav on mobile
    $('.nav-toggle').click(function(){
        $('.main-nav').slideToggle();
    });

} )( jQuery );
</script>
</body>
</html>
