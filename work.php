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
			$currentNav = "work";
		?>

		<title>
			Glenn McComb - Work
		</title>

	</head>



	<body class="body-bg-dark">
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
			<section class="bg-dark" id="work-intro">
				<div class="container">

					<div class="grid">
						<div class="col-1-2 col-offset-1-12 text-left">
							<div class="logo-espn">
								ESPN
							</div>
							<h1>
								Live Score Apps
							</h1>
							<a href="nowapp.php" class="btn" title="View the full case study">
								View case study
							</a>
						</div>

						<div class="col-5-12 hidden-phone">
							<a href="nowapp.php" title="View the full case study">
								<img src="<? print $imagePath ?>work-intro-nowapp.png">
							</a>
						</div>
					</div>
				</div><!-- .container -->
			</section><!-- #work-intro -->


			<section class="bg-dark">
				<div class="container">
					<h1 id="testOutput">
						Work
					</h1>

					<div class="grid grid-pad">
						<div class="col-1-2">
							<img src="http://placehold.it/600x400">
						</div>
						<div class="col-1-4">
							<img src="http://placehold.it/600x400">
							<h4>
								Project Name
							</h4>
							<small>
								Project description providing brief overview.
							</small>
						</div>
						<div class="col-1-4">
							<img src="http://placehold.it/600x400">
							<h4>
								Project Name
							</h4>
							<small>
								Project description providing brief overview.
							</small>
						</div>
					</div>
				</div>


				<!-- DRIBBBLE -->
				<div class="container dribbble">
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


				<div class="container">
					<div class="grid grid-pad">
						<div class="col-1-3">
							<img src="http://placehold.it/800x600">
						</div>
						<div class="col-1-3">
							<img src="http://placehold.it/800x600">
						</div>
						<div class="col-1-3">
							<img src="http://placehold.it/800x600">
						</div>
					</div>
					<p>
						Sketching is a crucial part of my work flow. I use the Behance Dot Grid Book. Sketching helps me quickly iterate UI / UX concept without the distractions of PS. 
					</p>
					<p>
						In the Scores sketch, I tried stacking teams and scores above one another rather than centre-aligning them on the same row. This proved to increase ease of reading.
					</p>
					<p>
						I added round number indicators which were later removed only to be added back in. I removed venue for each match but later re-integrated it because it was deemed vital information.
					</p>

					<hr />

					<h2>
						Heading Two
					</h2>
					<p class="lead">
						Paragraph lead
					</p>
				</div>
			</section>


			<section class="bg-light">
				<div class="container">
					<h1 id="testOutput">
						Test Output
					</h1>
					<p class="lead">
						Recent work
					</p>

					<p>
						Sketching is a crucial part of my work flow. I use the Behance Dot Grid Book. Sketching helps me quickly iterate UI / UX concept without the distractions of PS. 
					</p>
				</div>
			</section>
			
		</div> <!-- .wrap -->


	</body>
</html>











