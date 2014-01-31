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
		if($(window).scrollTop() > 400) {
			$('.site-header').addClass('user-has-scrolled');
		} else if ($('.site-header').hasClass('user-has-scrolled')) {
			$('.site-header').removeClass('user-has-scrolled');
		}


		function sectionBackgroundCheck() {
			var docViewTop = $(window).scrollTop();
	    var docViewBottom = docViewTop + $(window).height();

	    // Count the number of <section> elements in the
	    var nSections = $('section').length;

	    
	    console.log('Scroll position = ' + docViewTop);

	    // My own jquery to handle when a <section> is on the page.
	    $('section').each(function(index, elem) {
	    	var elemTop = $(elem).offset().top;
	    	var elemBottom = elemTop + $(elem).height();

	    	if (elemTop < docViewTop && elemBottom > docViewTop) {
	    			if ($(elem).hasClass('bg-dark')) {
	    				//console.log('Section number ' + index + ' is at the top and it is dark');
	    			} else if ($(elem).hasClass('bg-light')) {
	    				//console.log('Section number ' + index + ' is at the top and it is light');
	    			}
	    	}

	    	//console.log('Number of sections: ' + nSections);
	    	console.log(index, elemTop, elemBottom);
	    });

	    console.log("...");
	    

		}

		sectionBackgroundCheck();


		// Testing a function from stack overflow.
		/*
		function isScrolledIntoView(elem) {
	    var docViewTop = $(window).scrollTop();
	    var docViewBottom = docViewTop + $(window).height();

	    var elemTop = $(elem).offset().top;
	    var elemBottom = elemTop + $(elem).height();

	    $(elem).each(function() {
	    	console.log(this, ' elemTop = ' + elemTop + '... elemBottom = ' + elemBottom);
	    });

	    console.log('docViewTop = ' + docViewTop + '... docViewBottom = ' + docViewBottom);

	    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));


	    // Wholly visible.
	    //return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom)
	    //&& (elemBottom <= docViewBottom) &&  (elemTop >= docViewTop) );
		}

		$('section').each(function () {
        console.log(isScrolledIntoView(this), this);
        console.log("...")
    });
    */



	});


});





