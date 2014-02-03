$(document).ready(function(){
	
	// Handles the showing and hiding of the mobile menu.
	function toggleMobileMenu () {
		if ($('body').hasClass('show-mobile-menu')) {
			$('body').removeClass('show-mobile-menu');
			$('.btn-mobile-menu span').html("Menu");
		} 
		else {
			$('body').addClass('show-mobile-menu');
			$('.btn-mobile-menu span').html("Close Menu");
		}
	}

	// Toggles the menu when the hamburger icon is clicked.
	$('.btn-mobile-menu').click(function() {
		toggleMobileMenu ();
	});

	// Toggles the menu when the "cover" is clicked.
	$('.mobile-container-cover').click(function() {
		toggleMobileMenu ();
	})





	// Checks if the background of the <section> currently at the top of the viewport is light or dark.
	function sectionBackgroundCheck() {
		var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    // Stores the class names as variables.
    var bodyBackgroundDark = 'body-bg-dark';
    var bodyBackgroundLight = 'body-bg-light';

    // Loops through each <section>, determines if it is visible at the top of the viewport, and adds a class to <body> based on lightness / darkness.
    $('section').each(function(index, elem) {
    	var elemTop = $(elem).offset().top;
    	var elemBottom = elemTop + $(elem).height();

    	if (elemTop < docViewTop && elemBottom > docViewTop) {
    			// If the current <section> has class="bg-dark", change it and replace it with class="bg-light".
    			if ($(elem).hasClass('bg-dark')) {
    				if ($('body').hasClass(bodyBackgroundLight)) {
    					$('body').removeClass(bodyBackgroundLight);
    					$('body').addClass(bodyBackgroundDark);
    				}
    			// Else, if the current <section> has class="bg-light", change it and replace it with class="bg-dark".
    			} else if ($(elem).hasClass('bg-light')) {
    				if ($('body').hasClass(bodyBackgroundDark)) {
    					$('body').removeClass(bodyBackgroundDark);
    					$('body').addClass(bodyBackgroundLight);
    				}
    			}
    	}
    });
	}


	// This helps adjust the sizing of the top header when the user scrolls down.
	$(window).scroll(function() {
		// Determines the height of the first <section>.
		var firstSectionHeight = $('section').first().height();

		if($(window).scrollTop() > firstSectionHeight) {
			$('.site-header').addClass('user-has-scrolled');
		} else if ($('.site-header').hasClass('user-has-scrolled')) {
			$('.site-header').removeClass('user-has-scrolled');
		}

		// When a user scrolls, check the darkness / lightness of the <section> that's currently at the top the viewport.
		sectionBackgroundCheck();
	});


	// When a user resizes the window, check the darkness / lightness of the <section> that's currently at the top the viewport.
	$(window).resize(function() {
		sectionBackgroundCheck();
	})


});










