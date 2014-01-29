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

	// This helps adjust the sizing of the top header when the user scrolls down.
	$(window).scroll(function() {
		if($(window).scrollTop() > 150) {
			$('.site-header').addClass('user-has-scrolled');
		} else if ($('.site-header').hasClass('user-has-scrolled')) {
			$('.site-header').removeClass('user-has-scrolled');
		}
	});
});