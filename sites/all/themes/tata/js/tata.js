(function ($) {
	
	$(function() {
		$(".scroll").mCustomScrollbar({
			autoHideScrollbar:true,
			theme:"rounded",
		});

		$(' .block-gallery > li ').each( function() { $(this).hoverdir({
			hoverDelay : 75
		}); } );

	});
})(jQuery);