$(document).ready(function(){
	function toggleMobileMenu () {
		if ($('body').hasClass('show-mobile-menu')) {
			$('body').removeClass('show-mobile-menu');
		} 
		else {
			$('body').addClass('show-mobile-menu');
		}
	}

	$('.btn-mobile-menu').click(function() {
		toggleMobileMenu ();
	});

	$('.mobile-container-cover').click(function() {
		toggleMobileMenu ();
	})
});