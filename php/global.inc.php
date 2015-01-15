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
// Home.
include("php/sections/home-intro.inc.php");

// Work.
include("php/sections/work-fitbugg.inc.php");
include("php/sections/work-nissco.inc.php");
include("php/sections/work-apt.inc.php");
include("php/sections/work-nowapp.inc.php");
include("php/sections/work-newnoise.inc.php");

// Nissco.
include("php/sections/nissco-intro.inc.php");
include("php/sections/nissco-stripes.inc.php");
include("php/sections/nissco-responsive-mockup.inc.php");
include("php/sections/nissco-about.inc.php");

// FitBugg.
include("php/sections/fitbugg-intro.inc.php");
include("php/sections/fitbugg-about.inc.php");
include("php/sections/fitbugg-architecture.inc.php");
include("php/sections/fitbugg-logo.inc.php");
include("php/sections/fitbugg-brand.inc.php");
include("php/sections/fitbugg-wireframes.inc.php");
include("php/sections/fitbugg-mockups.inc.php");
include("php/sections/fitbugg-prototype.inc.php");

// APT.
include("php/sections/apt-intro.inc.php");
include("php/sections/apt-about.inc.php");
include("php/sections/apt-contact.inc.php");

// Now Apps.
include("php/sections/nowapp-intro.inc.php");
include("php/sections/nowapp-backstory.inc.php");
include("php/sections/nowapp-brand.inc.php");
include("php/sections/nowapp-sections.inc.php");
include("php/sections/nowapp-cards.inc.php");
include("php/sections/nowapp-swiping.inc.php");
include("php/sections/nowapp-sketching.inc.php");
include("php/sections/nowapp-notes.inc.php");

// Smaller Projects.
include("php/sections/newnoise.inc.php");

// About.
include("php/sections/about-intro.inc.php");
include("php/sections/about-details.inc.php");

// Contact.
include("php/sections/contact-form.inc.php");












?>