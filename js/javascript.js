$(document).ready(function(){
	
	//
	//---------------------------------
	//	MOBILE MENU
	//---------------------------------
	//
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




	//
	//---------------------------------
	//	SCROLLING
	//---------------------------------
	//
	// This helps adjust the sizing of the top header when the user scrolls down.
	$(window).scroll(function() {
		// Determines the height of the first <section>.
		var firstSectionHeight = $('section').first().height();

		// Determines if there is padding above or below the <section>.
		var firstSectionPaddingTop = $('section').first().css('padding-top')
		var firstSectionPaddingBottom = $('section').first().css('padding-bottom')

		//console.log ('Padding-top: ' + firstSectionPaddingTop);
    //console.log ('Padding-bottom: ' + firstSectionPaddingBottom);
    //console.log ('Height: ' + firstSectionHeight);

    // Important, the parseFloat() here converts the 50px value to a number 50.
		var firstSectionHeightWithPadding = firstSectionHeight + parseFloat(firstSectionPaddingTop) + parseFloat(firstSectionPaddingBottom);

		//console.log (firstSectionHeightWithPadding)

		if($(window).scrollTop() > firstSectionHeightWithPadding) {
			$('.site-header').addClass('user-has-scrolled');
		} else if ($('.site-header').hasClass('user-has-scrolled')) {
			$('.site-header').removeClass('user-has-scrolled');
		}

		// When a user scrolls, check the darkness / lightness of the <section> that's currently at the top the viewport.
		sectionBackgroundCheck();
	});


	//
	//---------------------------------
	//	WINDOW RESIZING
	//---------------------------------
	//
	// When a user resizes the window, check the darkness / lightness of the <section> that's currently at the top the viewport.
	$(window).resize(function() {
		sectionBackgroundCheck();
	})


	//
	//---------------------------------
	//	FUNCTIONS
	//---------------------------------
	//
	//
	//---------------------------------
	//	Section Background Check
	//---------------------------------
	//
	// Checks if the background of the <section> currently at the top of the viewport is light or dark.
	function sectionBackgroundCheck() {
		// The current top and bottom of the viewport.
		var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    // Stores the class names as variables.
    var bodyBackgroundDark = 'body-bg-dark';
    var bodyBackgroundLight = 'body-bg-light';

    // Loops through each <section>, determines if it is visible at the top of the viewport, and adds a class to <body> based on lightness / darkness.
    $('section').each(function(index, elem) {
    	var elemTop = $(elem).offset().top;
    	var elemBottom = elemTop + $(elem).height();

    	var elemPaddingTop = $(elem).css('padding-top');
    	var elemPaddingBottom = $(elem).css('padding-bottom');

    	var elemBottomWithPadding = elemBottom + parseFloat(elemPaddingTop) + parseFloat(elemPaddingBottom);

    	/*
    	console.log (elem);
			console.log ('Scroll position: ' + docViewTop);
			console.log ('Element top: ' + elemTop);
			console.log ('Element bottom (+ padding): ' + elemBottom + ' (' + elemBottomWithPadding + ')');
			console.log ('...');
			*/

    	if (elemTop < docViewTop && elemBottomWithPadding > docViewTop) {
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
	} // sectionBackgroundCheck()


	//
	//---------------------------------
	//	Dribbble
	//---------------------------------
	//
	$(function() {
		var username = 'lenymo';
		$.getJSON('http://api.dribbble.com/players/' + username + '/shots/?callback=?', function(json) {
        console.log(json.shots);
        for (var i = 0; i < 9; i++) { // Maximum Number of shots here
            var shotTitle = json.shots[i].title;
            var shotLikes = json.shots[i].likes_count;

            // This handles if there is 1 like, in which case the "s" is removed.
            var shotLikesPlural = " likes";
            if (shotLikes == 1) {
            	shotLikesPlural = " like";
            }

            $('.dribbble .grid').append("<div class='col-1-3'><a href='" + json.shots[i].url + "' target='_blank' title='" + shotTitle + "'><figure><figcaption>" + shotTitle + "<small>" + shotLikes + shotLikesPlural +  "</small></figcaption><img src='" + json.shots[i].image_url + "' alt='" + shotTitle + "'></figure></a>");
        };
    });
	});
});










