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
//	MODULES
//---------------------------------
//
include("php/modules/dribbble.inc.php");
include("php/modules/instagram.inc.php");
include("php/modules/lastfm.inc.php");

//
//---------------------------------
//	SECTIONS
//---------------------------------
//
// Work.
include("php/sections/work-intro.inc.php");

// Now Apps.
include("php/sections/nowapp-intro.inc.php");
include("php/sections/nowapp-backstory.inc.php");
include("php/sections/nowapp-brand.inc.php");
include("php/sections/nowapp-sections.inc.php");
include("php/sections/nowapp-cards.inc.php");
include("php/sections/nowapp-swiping.inc.php");
include("php/sections/nowapp-sketching.inc.php");
include("php/sections/nowapp-notes.inc.php");

// About.
include("php/sections/about-intro.inc.php");
include("php/sections/about-details.inc.php");













?>