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
	});




	//
	//---------------------------------
	//	SCROLLING
	//---------------------------------
	//
	// This helps adjust the sizing of the top header when the user scrolls down.
	$(window).scroll(function() {

		//
		//---------------------------------
		//  HOMEPAGE - FLYING MAN
		//---------------------------------
		//
		var scrollPos = $(window).scrollTop();
		//console.log(scrollPos);

		// Divides the scroll position by X. This will be used to control the rate of change.
		var divideBy = 20;
		var scrollPosReduced = (scrollPos / divideBy);

		// The silhouette of me has a margin-top of 20% when fully scrolled-up.
		var marginPercent = 15;

		var widthPercent = 20;

		// Lower the margin-top as the scroll position changes.
		var adjustedMarginPercent = (marginPercent - scrollPosReduced);

		var adjustedWidthPercent = (widthPercent - scrollPosReduced);

		// Adjust margin-top.
		$(".flying .man").css('margin-top', adjustedMarginPercent + '%' );

		// Adjust size of silhouette.
		$(".flying .man").css('width', adjustedWidthPercent + '%' );



		//
		//---------------------------------
		//  HOMEPAGE - BG
		//---------------------------------
		//
		// Divides the scroll position by X. This will be used to control the rate of change.
		var divideBy = 2;
		var scrollPosReduced = (scrollPos / divideBy);

		// Sets the default background positions of the homepage BG.
		var homeBGX = "center";
		var homeBGY = -250;
		var adjustedHomeBGY = (homeBGY - scrollPosReduced);
		var homeBGPos = homeBGX + " " + adjustedHomeBGY + "px";

		$("#homepage").css('background-position', homeBGPos);





		// Determines the height of the first <section>.
		var firstSectionHeight = $('section').first().height();

		// Determines if there is padding above or below the <section>.
		var firstSectionPaddingTop = $('section').first().css('padding-top');
		var firstSectionPaddingBottom = $('section').first().css('padding-bottom');

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
	});


	//
	//---------------------------------
	//	FUNCTIONS
	//---------------------------------
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
	//	Contact Input
	//---------------------------------
	//
	contactInput();

	function contactInput() {
		$("#contact-intro input").click(function() {
			// Selects the text of the input.
			$(this).select();
		});

		$("#contact-intro small").click(function(){
			$("#contact-intro input").select();
		});
	} // end of contactInput();


	//
	//---------------------------------
	//	Dribbble
	//---------------------------------
	//
	$(function() {
		var username = 'lenymo';
		var accessToken = '6da046c2b458052fa97290503aebd4fb6cc04bf489c81e002d54b29e3fba2dc2';
		var dribbleUrl = 'https://api.dribbble.com/v1/users/' + username + '/shots?access_token=' + accessToken + '&callback=?';

		$.getJSON(dribbleUrl, function(json) {
      if (json.data.length > 0) {
      	$.each(json.data, function(i, val) {
      		var shotTitle = val.title;
      		var shotUrl = val.html_url;
      		
      		var shotLikes = val.likes_count;
      		var shotLikesPlural = ' likes';
      		if (shotLikes == 1) {
          	shotLikesPlural = ' like';
          }

          var imageUrl = val.images.normal;

      		$('.dribbble .grid').append("<div class='col-1-3'><a href='" + shotUrl + "' target='_blank' title='" + shotTitle + "' class='figure'><figure><figcaption>" + shotTitle + "<small>" + shotLikes + shotLikesPlural +  "</small></figcaption><img src='" + imageUrl + "' alt='" + shotTitle + "'></figure></a>");
      	});
      } else {
	      $('.dribbble .grid').append('<p>No shots.</p>');
	    }
	    // Old API method.
	    var numberOfShots = 9;
      // for (var i = 0; i < numberOfShots; i++) { // Maximum Number of shots here
      //     var shotTitle = json.shots[i].title;
      //     var shotLikes = json.shots[i].likes_count;

      //     // This handles if there is 1 like, in which case the "s" is removed.
      //     var shotLikesPlural = ' likes';
      //     if (shotLikes == 1) {
      //     	shotLikesPlural = ' like';
      //     }

      //     // Outputs each shot as HTML.
      //     $('.dribbble .grid').append("<div class='col-1-3'><a href='" + json.shots[i].url + "' target='_blank' title='" + shotTitle + "' class='figure'><figure><figcaption>" + shotTitle + "<small>" + shotLikes + shotLikesPlural +  "</small></figcaption><img src='" + json.shots[i].image_url + "' alt='" + shotTitle + "'></figure></a>");
      // }
    });
	}); // end of dribbble.

	//
	//---------------------------------
	//	Instagram
	//---------------------------------
	//
	instagramPhotos();

	function instagramPhotos() {
		var accessToken = "677237.d4f927a.0fa87949730f4ea5917ad69b14e782d2";
		var userID = "677237";
		var numberOfPhotos = 12;
		var instagramUrl = "https://api.instagram.com/v1/users/" + userID + "/media/recent/?access_token=" + accessToken;

		$.ajax({
    	type: "GET",
        dataType: "jsonp",
        cache: false,
        url: instagramUrl, 
        success: function(data) {
					for (var i = 0; i < numberOfPhotos; i++) {
						var photoLink = data.data[i].link;
						var photoURL = data.data[i].images.standard_resolution.url;
						var photoTitle = data.data[i].caption.text;
						var photoLikes = data.data[i].likes.count;

						var photoLikesPlural = ' likes';
						if (photoLikes == 1) {
	          	photoLikesPlural = ' like';
	          }

						$('.instagram .grid').append("<div class='col-1-3'><a href='" + photoLink + "' target='_blank' title='" + photoTitle + "' class='figure'><figure><figcaption>" + photoTitle + "<small>" + photoLikes + photoLikesPlural +  "</small></figcaption><img src='" + photoURL + "' alt='" + photoTitle + "'></figure></a>");
        		//$(".instagram").append("<div class='instagram-placeholder'><a target='_blank' href='" + data.data[i].link +"'><img class='instagram-image' src='" + data.data[i].images.low_resolution.url +"' /></a></div>");
      		}
        }
    });
	} // end of instagramPhotos()


	//
	//---------------------------------
	//	Last.fm
	//---------------------------------
	//
	// Accepted formats for period:
	// overall | 7day | 1month | 3month | 6month | 12month
	var timePeriod = "overall";
	topArtists(timePeriod);
	lastfmNav();

	// Grabs top artists and outputs them as a table row.
	function topArtists(timePeriod) {
		var username = 'elgyn2'; // My username.
		var apikey = '8a01aea061e32344de520401cc2e2028'; // My API key.
		var topX = 10; // Defines number of artists to grab (ie. top 10).

		//console.log(timePeriod);

		// Outputs each artist as HTML.
		$.getJSON('http://ws.audioscrobbler.com/2.0/?method=user.gettopartists&user=' + username + '&api_key=' + apikey + '&format=json&period=' + timePeriod, function(json) {
			// Removes existing table data.
			$(".lastfm tbody tr").remove();

			for (var i = 0; i < topX; i++) {
				var artistRank = json.topartists.artist[i]['@attr'].rank;
				var artistName = json.topartists.artist[i].name;
				var artistURL = json.topartists.artist[i].url;
				var artistPlays = json.topartists.artist[i].playcount;
				artistPlays = addCommas(artistPlays);

				$('.lastfm tbody').append("<tr><td class='rank'>" + artistRank + "</td><td class='artist'><a href='" + artistURL + "' title='View " + artistName + " on Last.fm' target='_blank'>" + artistName + "</a></td><td class='plays'>" + artistPlays + "</td></tr");
			}
		});
	} // end of topArtists()

	function lastfmNav() {
		$(".lastfm .tabs a").click(function() {
			var tabClass = $(this).attr("class");
			var timePeriod = "";

			$(".lastfm .tabs li").removeClass("current");
			$(this).parent().addClass("current");

			if (tabClass == "overall") {
				timePeriod = "overall";
			} else if (tabClass == "last-12-months") {
				timePeriod = "12month";
			} else if (tabClass == "last-3-months") {
				timePeriod = "3month";
			} else if (tabClass == "last-7-days") {
				timePeriod = "7day";
			}

			topArtists(timePeriod);
		}); // end of lastfmNav()
	}


	//
	//---------------------------------
	//	Add Commas functon
	//---------------------------------
	//
	// Not sure how this works but it adds commas like so: 23,023,022.
	function addCommas(nStr) {
	  nStr += '';
	  x = nStr.split('.');
	  x1 = x[0];
	  x2 = x.length > 1 ? '.' + x[1] : '';
	  var rgx = /(\d+)(\d{3})/;
	  while (rgx.test(x1)) {
	    x1 = x1.replace(rgx, '$1' + ',' + '$2');
	  }
	  return x1 + x2;
	} // end of addCommas()
});










