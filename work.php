<!DOCTYPE html>
<html>
	<head>
		<title>
			Glenn McComb - Work - ESPN live score apps
		</title>


		<?
			// PHP includes
			include("php/nav.inc.php");
		?>


		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css">


		<!-- JavaScript -->
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/html5shiv.js"></script>
		<script src="js/javascript.js"></script>

		<!-- Meta Tags -->
		<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1.0">

	</head>



	<body class="body-bg-dark">
		<header class="site-header">
			<a href="javascript:void(0);" class="btn-mobile-menu">
				<i class="icon icon-menu"></i>
				<span>Menu</span>
			</a>

			<div class="logo">
				Glenn McComb
			</div>


			<?
				// Navigation called by PHP
				$currentNav = "work";
				printNav($currentNav);
			?>
		</header>


		<a href="javascript:void(0);" class="mobile-container-cover">
		</a>


		<div class="wrap">


			<!--
			==============================
				NOW APP INTRO
			==============================
			-->
			<section class="bg-dark" id="nowapp-intro">
				<div class="container">

					<div class="hero">
						<div class="logo-espn">
							ESPN
						</div>
						<h1>
							Live Score Apps
						</h1>
						<p class="lead">
							A case study
						</p>
					</div>

					<div class="grid grid-pad">
						<div class="col-1-4 col-offset-1-12 hidden-phone">
							<img src="img/work-nowapp-intro-iphone-left.png">
						</div>

						<div class="col-1-3">
							<img src="img/work-nowapp-intro-iphone-middle.png">
						</div>

						<div class="col-1-4 hidden-phone">
							<img src="img/work-nowapp-intro-iphone-right.png">
						</div>
					</div>
				</div>
			</section><!-- #nowapp-intro -->



			<!--
			==============================
				BACK STORY
			==============================
			-->
			<section class="bg-light bg-left-fade" id="nowapp-backstory">
				<div class="container">
					<div class="grid">

						<div class="col-1-2 col-offset-1-12 text-left pull-right">
							<h1>
								Back story
							</h1>

							<p>
								ESPN Australia have a suite of four live score apps on iPhone and Android. They were previously written in HTML, CSS & JavaScript and housed in a native app shell.
							</p>
							<p>
								The content in the existing apps was good but the interface and UX let it down. In 2013, we decided to build native apps and were able to explore UI functionality not possible using web technology.
							</p>
						</div>

						<div class="col-1-4 col-offset-1-12 text-right">
							<img src="img/work-nowapp-backstory-webapp.png">
						</div>
					</div>
				</div><!-- .container -->
			</section> <!-- nowapp-backstory -->



			<!--
			==============================
				THE "NOW" BRAND
			==============================
			-->
			<section class="bg-light" id="nowapp-brand">
				<div class="container">
					<div class="grid">
						<div class="col-1-2 centred">
							<h1>
								The "Now" Brand
							</h1>

							<p>
								Each of the four apps are branded with a unique colour which flows through the apps UI and creative assets.
							</p>

							<p>
								A player silhouette helps communicate the sport and distinguish one app from the other, while at the same time visually tying them together. 
							</p>
						</div>
					</div>
				</div>

				<div class="grid no-padding bg-dark now-app-silhouettes">
					<div class="col-1-4 ale">
						<h3>
							<small>A-League</small>
							Football Now
						</h3>

						<img src="img/work-nowapp-branding-player-ale.png">
					</div>

					<div class="col-1-4 nrl">
						<h3>
							<small>NRL</small>
							League Now
						</h3>
						<img src="img/work-nowapp-branding-player-nrl.png">
					</div>

					<div class="col-1-4 afl">
						<h3>
							<small>AFL</small>
							Footy Now
						</h3>
						<img src="img/work-nowapp-branding-player-afl.png">
					</div>

					<div class="col-1-4 sru">
						<h3>
							<small>Super Rugby</small>
							Rugby Now
						</h3>
						<img src="img/work-nowapp-branding-player-sru.png">
					</div>
				</div>

				<div class="grid no-padding nowapp-app-icons">
					<div class="col-1-4">
						<img src="img/work-nowapp-branding-icon-ale.png">
					</div>
					<div class="col-1-4">
						<img src="img/work-nowapp-branding-icon-nrl.png">
					</div>
					<div class="col-1-4">
						<img src="img/work-nowapp-branding-icon-afl.png">
					</div>
					<div class="col-1-4">
						<img src="img/work-nowapp-branding-icon-sru.png">
					</div>
				</div>
			</section> <!-- #nowapp-brand -->


			<!--
			==============================
				SECTIONS
			==============================
			-->
			<section class="bg-light" id="nowapp-sections">
				<div class="container">
					<div class="grid">
						<div class="col-1-2 centred">
							<h1>
								Sections
							</h1>
							<p>
								In our initial launch there were six sections.
							</p>
						</div>
					</div>
					<div class="grid grid-pad nowapp-section-icons">
						<div class="col-1-6">
							<img src="http://placehold.it/150x150">
							<h5>
								Scores
							</h5>
						</div>
						<div class="col-1-6">
							<img src="http://placehold.it/150x150">
							<h5>
								Standings
							</h5>
						</div>
						<div class="col-1-6">
							<img src="http://placehold.it/150x150">
							<h5>
								News
							</h5>
						</div>
						<div class="col-1-6">
							<img src="http://placehold.it/150x150">
							<h5>
								Twitter
							</h5>
						</div>
						<div class="col-1-6">
							<img src="http://placehold.it/150x150">
							<h5>
								Tipping
							</h5>
						</div>
						<div class="col-1-6">
							<img src="http://placehold.it/150x150">
							<h5>
								Settings
							</h5>
						</div>
					</div>

					<div class="grid">
						<div class="col-1-2 col-offset-1-12">
							<video controls>
								<source src="video/nowapp.webm">
								<source src="video/nowapp.mp4">
							</video>
						</div>
						<div class="col-1-3 col-offset-1-12 text-left">
							<h2>
								Video demo
							</h2>
							<p>
								To help communicate the proposed functionality of the app, I put together a Flash-based walkthrough of swiping on the scores page and accessing the Menu.
							</p>
							<p>
								This was shared with our dev team, internal stake-holders and the third party developers we worked with.
							</p>

							<small>
								If the html5 video doesn't work, <a href="http://vimeo.com/85989022" title="Watch the app video demo on Vimeo">check out the video on Vimeo</a>.
							</small>
						</div>
					</div>
				</div><!-- .container -->
			</section> <!-- #nowapp-sections -->


			<!--
			==============================
				CARDS
			==============================
			-->
			<section class="bg-light" id="nowapp-cards">
				<div class="container">
					<div class="grid">
						<div class="col-1-2 centred">
							<h1>
								Cards in design
							</h1>

							<p>
								There is a growing movement in the design community towards the 'cards' metaphor which Paul Adams describes in <a href="http://insideintercom.io/why-cards-are-the-future-of-the-web/" title="Why cards are the future of the web, by Paul Adams." target="_blank">this influential article</a>. The weight of numbers continues to build as Google, Twitter, Pinterest, Spotify and Facebook integrate cards into their core UI.
							</p>
						</div>
					</div>

					<div class="grid grid-pad">
						<div class="col-1-3">
							<h5>
								Tweets
							</h5>
							<img src="img/work-nowapp-cards-twitter.png">
						</div>

						<div class="col-1-3">
							<h5>
								Matches
							</h5>
							<img src="img/work-nowapp-cards-scores.png">
						</div>

						<div class="col-1-3">
							<h5>
								Articles
							</h5>
							<img src="img/work-nowapp-cards-news.png">
						</div>
					</div>
					<div class="grid">
						<div class="col-1-2 centred">
							<p>
								The power of cards lies in their ability to visually associate related chunks of content, while at the same time differentiating them from other similar groupings of content. 
							</p>
						</div>
					</div>
				</div><!-- .container -->
			</section><!-- #nowapp-cards -->


			<!--
			==============================
				SKETCHING
			==============================
			-->
			<section class="bg-light" id="nowapp-sketching">
				<div class="container">
					<div class="grid">
						<div class="col-1-2 col-offset-1-12 text-left">
							<h1>
								Sketching
							</h1>

							<p>
								Sketching is a crucial part of my work flow. I use the <a href="http://www.creativesoutfitter.com/product/34/dot-grid-book" title="Check out the Dot Grid Book." target="_blank">Behance Dot Grid Book</a>. Sketching helps me quickly iterate UI / UX concept without the distractions of PS.
							</p>
							<p>
								In the Scores sketch, I tried stacking teams and scores above one another rather than centre-aligning them on the same row. This proved to increase ease of reading. 
							</p>
							<p>
								I added round number indicators which were later removed only to be added back in. I removed venue for each match but later re-integrated it because it was deemed vital information.
							</p>
						</div>

						<div class="col-1-3">
							<h5>
								Scores
							</h5>
							<img src="img/work-nowapp-sketching-scores.png">
						</div>
					</div>
				</div><!-- .container -->

				<div class="container">
					<div class="grid">
						<div class="col-1-2 centred">
							<h2>
								Cards
							</h2>
							
							<p>
								Here I begin to explore the ways in which the card metaphor applies to various sections. In the Stats sketch I try hinting at a swipe gesture by showing the edges of the left and right cards. 
							</p>

							<p>
								This is a valuable visual affordance but we don't end up integrating it on the fixture page due to width constraints which produced the usability issues discussed here.
							</p>
						</div>
					</div>

					<div class="grid no-padding">
						<div class="col-1-3 col-offset-1-6">
							<h5>
								News
							</h5>
							<img src="img/work-nowapp-sketching-news.png">
						</div>
						<div class="col-1-3">
							<h5>
								Stats
							</h5>
							<img src="img/work-nowapp-sketching-stats.png">
						</div>
					</div>
				</div><!-- .container -->


				<div class="container">
					<div class="grid">
						<div class="col-1-2 centred">
							<h2>
								Score Worm
							</h2>
							
							<p>
								The score worm is the key UI element that describes the flow of play in AFL, NRL and Super Rugby. It visually communicates which team is winning and by how much throughout a match. 
							</p>

							<p>
								I was keen to push the concept as far as possible while maintaining simplicity. In the final design, the quarter indicators are covered by the worm itself but they are implied by the neighbouring labels.
							</p>
						</div>
					</div>

					<div class="grid no-padding">
						<div class="col-2-3 centred">
							<div class="grid grid-pad">
								<div class="col-1-2">
									<h5>
										Sketch
									</h5>
									<img src="img/work-nowapp-sketching-worm.png">
								</div>
								<div class="col-1-2">
									<h5>
										Final mockup
									</h5>
									<img src="img/work-nowapp-sketching-worm-mockup.png">
								</div>
							</div>
						</div>
					</div>
				</div><!-- .container -->
			</section> <!-- #nowapp-sketching -->
		</div> <!-- .wrap -->


	</body>
</html>











