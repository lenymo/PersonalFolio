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
			Responsive Web Design - Australasian Piano Technology - Glenn McComb
		</title>

	</head>



	<body class="body-bg-dark body-work body-work-apt">
		<?
			// Site Header, called by PHP. Pass this function the name of the current page.
			printSiteHeader($currentNav);
		?>
		<div class="wrap">
			
			<?
				// PHP Includes go here
				printAptIntro($imagePath);
				printAptAbout($imagePath);
				printAptContact($imagePath);

				// Next project
				printWorkNowapp($imagePath);
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











