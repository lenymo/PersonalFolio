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
			$currentNav = "contact";
		?>

		<title>
			Glenn McComb - Contact
		</title>

	</head>



	<body class="body-bg-dark body-contact">
		<?
			// Site Header, called by PHP. Pass this function the name of the current page.
			printSiteHeader($currentNav);
		?>


		<div class="wrap">

			<!--
			==============================
				CONTACT INTRO
			==============================
			-->
			<section class="bg-dark" id="contact-intro">
				<div class="container">

					<div class="grid">
						<div class="col-1-2 centred">
							<h1>
								Contact me
							</h1>
							<p>
								My name is Glenn McComb and I'm from Melbourne, Australia.
							</p>
							<input type="email" value="lenymo@gmail.com" />
							<small><a href="javascript:void(0);">Click to select text</a></small>
						</div>
					</div>
				</div><!-- .container -->
			</section><!-- #work-intro -->

			
			

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











