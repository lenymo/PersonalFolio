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
			Glenn McComb - Work
		</title>

	</head>



	<body class="body-bg-dark body-work">
		<?
			// Site Header, called by PHP. Pass this function the name of the current page.
			printSiteHeader($currentNav);
		?>
		<div class="wrap">
			

			<!--
			==============================
				WORK INTRO
			==============================
			-->
			<?
				printWorkIntro($imagePath); 
			?>
				

			<!--
			==============================
				DRIBBBLE
			==============================
			-->
			<?
				printDribbble(); 
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











