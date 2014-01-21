$(document).ready(function(){
	$(".btn-mobile-menu").click(function() {
		if ($('header.site-header').hasClass('main-menu-mobile')) {
			$("header.site-header").removeClass("main-menu-mobile");
		} 
		else {
			$("header.site-header").addClass("main-menu-mobile");
		}
	});
});