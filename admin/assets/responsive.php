<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
		/* Check width on page load*/
		if ( $( window ).width() < 900 ) {
			$('body').removeClass('fix-header');
		} else {
			$('body').addClass('fix-header');
		}
	} );

	$( window ).resize( function () {
		/*If browser resized, check width again */
		if ( $(window).width() < 900 ) {
			$('body').removeClass('fix-header');
		} else {
			$('body').addClass('fix-header');
		}
	} );
</script>