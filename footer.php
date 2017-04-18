<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/masonry/3.2.2/masonry.pkgd.min.js"></script>
<script>

var _gaq=[['_setAccount','UA-1915631-1'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));

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
        $('.main-nav').toggleClass('open');
    });

} )( jQuery );
</script>
</body>
</html>
