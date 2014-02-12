<?
	// Sets the timezone. I needed to add this for the footer (c) copyright year auto-update.
	date_default_timezone_set('UTC');

	// Declares the path of images. This is fed into the src of all image tags.
	$imagePath = "img/";

	// PHP includes
	include("php/site-header.inc.php");
	include("php/nav.inc.php");
	include("php/footer.inc.php");

	// CSS includes.
	include("php/css.inc.php");
	
	// Javascript includes.
	include("php/javascript.inc.php");

	// Meta Tag includes.
	include("php/metatags.inc.php");

	// Mobile Specific content.
	include("php/mobile-specific.inc.php");
?>