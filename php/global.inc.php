<?
//
//---------------------------------
//	GENERAL DECLARATIONS
//---------------------------------
//
// Sets the timezone. I needed to add this for the footer (c) copyright year auto-update.
date_default_timezone_set('UTC');

// Declares the path of images. This is fed into the src of all image tags.
$imagePath = "img/";

//
//---------------------------------
//	CORE INCLUDES
//---------------------------------
//
include("php/core/site-header.inc.php");
include("php/core/nav.inc.php");
include("php/core/footer.inc.php");
include("php/core/mobile-menu.inc.php");

include("php/core/css.inc.php");
include("php/core/metatags.inc.php");
include("php/core/javascript.inc.php");

//
//---------------------------------
//	PAGE INCLUDES
//---------------------------------
//
include("php/pages/work-intro.inc.php");










?>