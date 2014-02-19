<!DOCTYPE html>
<html>
	<head>
		<?
			// PHP includes.
			include("php/global.inc.php");

			// Call include files.
			printCSS();
			printMetaTags();

			// Defines which nav the current page falls under.
			$currentNav = "work";
		?>

		<title>
			Glenn McComb - Work - ESPN live score apps
		</title>

	</head>



	<body class="body-bg-dark body-work">
		<?
			// Site Header, called by PHP. Pass this function the name of the current page.
			printSiteHeader($currentNav);
		?>


		<div class="wrap">


			<?
				//
				//---------------------------------
				//	NOW APP SECTIONS
				//---------------------------------
				//
				// Intro.
				printNowappIntro($imagePath);

				// Back story.
				printNowappBackStory($imagePath);

				// The "Now" Brand.
				printNowappBrand($imagePath);

				// Sections.
				printNowappSections($imagePath);

				// Sketching.
				printNowAppSketching($imagePath);

				// Cards.
				printNowappCards($imagePath);

				// Swiping.
				printNowappSwiping($imagePath);

				// Notes.
				printNowAppNotes($imagePath);
			?>
			

			
			<?
				// Outputs the footer from PHP.
				printFooter();
			?>
		</div> <!-- .wrap -->



		<?
			// Outputs all javascript.
			printJavascript();
		?>
	</body>
</html>











