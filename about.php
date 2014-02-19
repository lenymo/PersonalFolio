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
			$currentNav = "about";
		?>

		<title>
			Glenn McComb - About
		</title>

	</head>



	<body class="body-bg-dark body-about">
		<?
			// Site Header, called by PHP. Pass this function the name of the current page.
			printSiteHeader($currentNav);
		?>


		<div class="wrap">

			<?
				//
				//---------------------------------
				//	ABOUT SECTIONS
				//---------------------------------
				//
				// Intro.
				printAboutIntro($imagePath);

				// Details.
				printAboutDetails($imagePath);
				
				// Dribbble.
				$dribbbleBG = "bg-light";
				printDribbble($dribbbleBG);
				
				// Instagram.
				printInstagram(); 

				// Last.fm.
				printLastfm(); 
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











