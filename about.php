<!DOCTYPE html>
<html>
	<head>
		<?
			// PHP includes.
			include("php/global.inc.php");

			// Call include files.
			printCSS();
			printJavascript();
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

			<!--
			==============================
				ABOUT INTRO
			==============================
			-->
			<section class="bg-dark" id="about-intro">
				<div class="container">

					<div class="grid grid-pad">
						<div class="col-7-12 col-offset-5-12 about-intro-details bg-light">
							<img src="img/logo-large-2x.png" class="hidden-phone">
							<!--
							<div class="logo-large">
								Glenn McComb
							</div>
							-->
						</div>
					</div>
				</div><!-- .container -->
			</section><!-- #about-intro -->


			<!--
			==============================
				ABOUT DETAILS
			==============================
			-->
			<section class="bg-light" id="about-details">
				<div class="container">
					<div class="grid grid-pad">
						<div class="col-5-12 about-details-selfie">
							<img src="<? print $imagePath ?>about-intro-me.png">
							<br />
						</div>

						<div class="col-7-12">
							<h1>
								Digital Designer
							</h1>
							<p class="lead">
								UI, UX, HTML, CSS, JS 
							</p>
							<p>
								I am a dedicated and energetic digital design professional who specialises in web and mobile design and front-end development.
							</p>
						</div>
					</div>
				</div><!-- .container -->
			</section><!-- #about-details -->


			<section class="bg-dark">
				<!-- DRIBBBLE -->
				<div class="container dribbble">
					<h1 id="testOutput">
						On Dribbble
					</h1>
					<div class="grid grid-pad">
						<!-- Below is an example of the dribbble HTML. The jQuery is difficult to read so here's the tabulated HTML -->
						<!--
						<div class="col-1-3">
							<a href="http://dribbble.com/shots/1399095-Hand-lettering-experiment" target="_blank">
								<figure>
									<figcaption>
										Hand lettering experiment
										<small>4 likes</small>
									</figcaption>
									<img src="http://d13yacurqjgara.cloudfront.net/users/27164/screenshots/1399095/dribbble_glennmccomb.png">
								</figure>
							</a>
						</div>
						-->
					</div>
				</div>
			</section>
		</div> <!-- .wrap -->


	</body>
</html>











