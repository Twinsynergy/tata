(function ($) {
	
	$(function() {
		// $(".scroll").mCustomScrollbar({
		// 	autoHideScrollbar:true,
		// 	theme:"rounded",
		// });

		// $(' .block-gallery > li ').each( function() { $(this).hoverdir({
		// 	hoverDelay : 75
		// }); } );

		$(".ri-grid").attr('id', 'ri-grid');
		$("#ri-grid").gridrotator({
			rows: 2, 
			columns: 3,
			step: 'random',
			maxStep: 3,
		});

	});
})(jQuery);