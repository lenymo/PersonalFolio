$(document).ready(function(){
	$(".btn-mobile-menu").click(function() {
		if ($('body').hasClass('show-mobile-menu')) {
			$("body").removeClass("show-mobile-menu");
		} 
		else {
			$("body").addClass("show-mobile-menu");
		}
	});
});