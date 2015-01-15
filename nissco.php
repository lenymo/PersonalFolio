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
			Responsive Web Design - Nissco 1600 Workshop - Glenn McComb
		</title>

	</head>



	<body class="body-bg-dark body-work body-nissco">
		<?
			// Site Header, called by PHP. Pass this function the name of the current page.
			printSiteHeader($currentNav);
		?>
		<div class="wrap">
			
			<?
				// PHP Includes go here
				nisscoIntro($imagePath);
				nisscoStripes($imagePath);
				nisscoResponsiveMockup($imagePath);
				nisscoStripes($imagePath);
				nisscoAbout($imagePath);

				// Next project
				printWorkFitBugg($imagePath);
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











