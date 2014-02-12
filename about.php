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
								Melbourne, Australia
							</p>
							<p>
								I am a digital design professional who specialises in web and mobile design and front-end development.
							</p>
						</div>
					</div>

					<div class="grid">
						<div class="col-2-3 centred text-center">
							<a href="twitter.com/lenymo" class="icon-social icon-social-twitter" title="Follow me on Twitter" target="_blank">
								Twitter
							</a>
							<a href="http://www.linkedin.com/in/glennmccomb" class="icon-social icon-social-linkedin" title="Connect with my on LinkedIn" target="_blank">
								LinkedIn
							</a>
							<a href="http://dribbble.com/lenymo" class="icon-social icon-social-dribbble" title="Follow me on Dribbble" target="_blank">
								Dribbble
							</a>
							<a href="http://instagram.com/lenymo" class="icon-social icon-social-instagram" title="Follow me on Instagram" target="_blank">
								Instagram
							</a>
							<a href="http://flickr.com/lenymo" class="icon-social icon-social-flickr" title="Check out my photos of Flickr" target="_blank">
								Flickr
							</a>
							<a href="http://lenymo.tumblr.com" class="icon-social icon-social-tumblr" title="Follow me on Tumblr" target="_blank">
								Tumblr
							</a>
							<a href="http://last.fm/user/elgyn2" class="icon-social icon-social-lastfm" title="Add me on Last.fm" target="_blank">
								Last.fm
							</a>
						</div>
					</div>

					<hr />

					<div class="grid grid-pad">
						<p class="lead text-center">
							I am a digital design professional who specialises in web and mobile design and front-end development.
						</p>
					<div>
				</div><!-- .container -->
			</section><!-- #about-details -->


			<section class="bg-light dribbble">
				<!-- DRIBBBLE -->
				<h2>
					On Dribbble
				</h2>
				<div class="grid no-padding">
					<!-- Below is an example of the dribbble HTML. The jQuery is difficult to read so here's the tabulated HTML -->
					<!--
					<div class="col-1-3">
						<a href="http://dribbble.com/shots/1399095-Hand-lettering-experiment" class="figure-anchor" target="_blank">
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
			</section>

				
			<section class="bg-light instagram">
				<h2>
					Instagram
				</h2>
				<div class="grid no-padding">
					<!-- jQuery spits out Instagram photos here -->
				</div><!-- .instagram -->

			</section>

			<section class="bg-light lastfm">
				<div class="container">
					<h2>
						Music I listen to
					</h2>
					<div class="grid">
						<div class="col-5-6 centred text-left">
							<nav class="tabs">
								<ul>
									<li class="current">
										<a href="javascript:void(0);" class="overall">
											Overall
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="last-12-months">
											Last year
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="last-3-months">
											Last 3 months
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="last-7-days">
											Last week
										</a>
									</li>
								</ul>
							</nav>
							<table>
								<thead>
									<tr>
										<th class="rank">
											#
										</th>
										<th class="artist">
											Artist
										</th>
										<th class="plays">
											Plays
										</th>
									</tr>
								</thead>

								<tbody>
									<!-- jQuery spits out top last.fm artists here. -->
									<!--
									<tr>
										<td class="rank">
											1
										</td>
										<td class="artist">
											Oceansize
										</td>
										<td>
											2,708
										</td>
									</tr>
									-->
								</tbody>
							</table>
							<small><a href="http://last.fm/user/elgyn2">My full last.fm charts</a></small>
						</div>
					</div><!-- .grid -->
				</div><!-- .container -->
			</section>

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











