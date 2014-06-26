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
						<div class="col-5-12 col-offset-1-6">
							<h1>
								Contact me
							</h1>
							<hr class="half-height">
							<p>
								<a href="MAILTO:lenymo@gmail.com">Send an email</a><span class="hidden-phone">, or copy my address from the input below</span>.
							</p>
							<input type="email" value="lenymo@gmail.com" />
						</div>
					</div>
				</div>
			</section><!-- #contact-intro -->

			<!--
			<section class="bg-dark" id="contact-intro">
				<div class="container">

					<div class="grid">

						<?
							// Contact form.
							//printContactForm($imagePath);
						?>

					</div>
				</div>
			</section>
			-->

			
			

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











