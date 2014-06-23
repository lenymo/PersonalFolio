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
			FitBugg iPhone App - Glenn McComb
		</title>

	</head>



	<body class="body-bg-dark body-work body-work-fitbugg">
		<?
			// Site Header, called by PHP. Pass this function the name of the current page.
			printSiteHeader($currentNav);
		?>
		<div class="wrap">
			

			<!--
			==============================
				SECTION TITLE
			==============================
			-->
			<?
				// PHP Includes go here
				printFitbuggIntro($imagePath);
				printFitbuggAbout($imagePath);
				printFitbuggArchitecture($imagePath);
				printFitbuggWireframes($imagePath);
				printFitbuggLogo($imagePath);
				printFitbuggBrand($imagePath);
				printFitbuggMockups($imagePath);
				//printFitbuggPrototype($imagePath);

				printWorkNowapp($imagePath)
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











