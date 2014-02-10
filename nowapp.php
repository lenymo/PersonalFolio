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
			Glenn McComb - Work - ESPN live score apps
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
								A player silhouette helps communicate the sport and distinguishes one app from the other while at the same time visually tying them together. 
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
							<img src="img/work-nowapp-sections-scores.png">
							<h6>
								Scores
							</h6>
						</div>
						<div class="col-1-6">
							<img src="img/work-nowapp-sections-standings.png">
							<h6>
								Standings
							</h6>
						</div>
						<div class="col-1-6">
							<img src="img/work-nowapp-sections-news.png">
							<h6>
								News
							</h6>
						</div>
						<div class="col-1-6">
							<img src="img/work-nowapp-sections-twitter.png">
							<h6>
								Twitter
							</h6>
						</div>
						<div class="col-1-6">
							<img src="img/work-nowapp-sections-tipping.png">
							<h6>
								Tipping
							</h6>
						</div>
						<div class="col-1-6">
							<img src="img/work-nowapp-sections-settings.png">
							<h6>
								Settings
							</h6>
						</div>
					</div>

					<div class="grid">
						<div class="col-5-12 col-offset-1-12 text-left">
							<h2>
								Video demo
							</h2>
							<p>
								To help communicate the proposed functionality of the app, I produced a Flash-based walkthrough of the scores and menu screens.
							</p>
							<p>
								This was shared with our dev team, internal stake-holders and the third party developers we worked with.
							</p>

							<!--
							<small>
								If the HTML5 video doesn't work, <a href="http://vimeo.com/85989022" title="Watch the app video demo on Vimeo" target="_blank">check out the video on Vimeo</a>.
							</small>
							-->
						</div>

						<div class="col-1-3 col-offset-1-12">
							<video controls poster="video/nowapp.png">
								<source src="video/nowapp.webm" type="video/webm">
								<source src="video/nowapp.mp4" type="video/mp4">

								<object type="application/x-shockwave-flash" data="video/nowapp.swf" width="640" height="960"> 
							    <param name="movie" value="video/nowapp.swf" />
							    <param name="quality" value="high" />
							    <embed src="video/nowapp.swf" quality="high" />
								</object>

								<small>
									If the HTML5 video doesn't work, <a href="http://vimeo.com/85989022" title="Watch the app video demo on Vimeo" target="_blank">check out the video on Vimeo</a>.
								</small>
							</video>
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
								Designing with cards
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
			<section class="bg-light" id="nowapp-swiping">
				<div class="container">
					<div class="grid">
						<div class="col-1-4 centred">
							<img src="img/work-nowapp-swiping-gesture.jpg">
						</div>
					</div>
					<div class="grid">
						<div class="col-1-2 centred">
							<!-- <img src="img/work-nowapp-swiping-gesture.jpg"> -->
							<h1>
								Swiping gestures
							</h1>
							<p>
								One of the most common use-cases in the apps was moving between rounds. Previously this was achieved using two buttons in the app's toolbar. Moving from one round to the next was a painful user experience.
							</p>
						</div>
					</div>
					<div class="grid">
						<div class="col-1-3 centred">
							<h5>
								Old round nav
							</h5>
							<img src="img/work-nowapp-swiping-oldApp.jpg" alt="The old navigation with buttons">
						</div>
					</div>

					

					<div class="grid grid-pad nowapp-swiping-iterations">
						<div class="col-1-3 col-offset-1-12 text-left pull-right">
							<p>
								With native gestures we could replace actual buttons with swiping gestures and save screen real estate. Great!
							</p>
							<p>
								Except that in early beta tests users didn't know how to move from one round to the next. This  was a big problem.
							</p>
						</div>

						<div class="col-5-12 col-offset-1-12">
							<h5>
								First draft
							</h5>
							<img src="img/work-nowapp-swiping-noAffordance.jpg">
						</div>
					</div>

					

					<div class="grid grid-pad nowapp-swiping-iterations">
						<div class="col-1-3 col-offset-1-12 text-left">
							<p>
								Keen to preserve screen space but also provide a visual aid for users, we added tappable round titles. 
							</p>
							<p>
								Users could still swipe between rounds and to hint at the swiping gesture, tapping a round title would trigger the sliding animation.
							</p>
						</div>
						<div class="col-5-12 col-offset-1-12">
							<h5>
								Second draft
							</h5>
							<img src="img/work-nowapp-swiping-slimTitles.jpg">
						</div>
					</div>

					

					<div class="grid grid-pad nowapp-swiping-iterations">
						<div class="col-1-3 col-offset-1-12 text-left pull-right">
							<!--
							<h2>
								Final draft
							</h2>
							-->
							<p>
								However, the hit-state of the buttons was too small to comfortably tap and the repetition of the word "round" was unnecessary.
							</p>
							<p>
								The round titles were replaced with larger numbers and the edges of the neighbouring round's cards were shown to suggest more content.
							</p>
						</div>
						<div class="col-5-12 col-offset-1-12">
							<h5>
								Final draft
							</h5>
							<img src="img/work-nowapp-swiping-final.jpg">
						</div>
					</div>

					<div class="grid">
						<div class="col-1-2 centred">
							<p>
								When I left ESPN in December 2013 this final iteration had yet to be implemented.
							</p>
						</div>
					</div>
				</div><!-- .container -->
			</section> <!-- #nowapp-swiping


			<!--
			==============================
				SKETCHING
			==============================
			-->
			<section class="bg-light" id="nowapp-sketching">
				<div class="container">
					<div class="grid">
						<div class="col-5-12 col-offset-1-12 text-left">
							<h1>
								Sketching
							</h1>

							<p>
								Sketching is a crucial part of my work flow. I use the <a href="http://www.creativesoutfitter.com/product/34/dot-grid-book" title="Check out the Dot Grid Book." target="_blank">Behance Dot Grid Book</a>. Sketching helps me quickly iterate UI / UX concepts without the distractions of PS.
							</p>
							<p>
								In the Scores sketch, I stacked teams and scores above one another rather than centre-aligning them on the same row. This made quickly scanning scores easier.
							</p>
							<!--
							<p>
								I added round number indicators which were later removed only to be added back in. I removed venue for each match but later re-integrated it because it was deemed vital information.
							</p>
							-->
						</div>

						<div class="col-1-3 col-offset-1-12">
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
								Here I begin to explore the card metaphor. In the Stats sketch I try hinting at a swipe gesture by showing the edges of the left and right cards. 
							</p>

							<p>
								This provides an important visual affordance but we didn't integrate it on the fixture page due to width constraints. This produced the "swiping between rounds" usability issues discussed above.
							</p>
						</div>
					</div>

					<div class="grid no-padding">
						<div class="col-1-3 col-offset-1-12">
							<h5>
								News
							</h5>
							<img src="img/work-nowapp-sketching-news.png">
						</div>
						<div class="col-1-3 col-offset-1-6">
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
								The score worm is the key UI element that describes the flow of play in AFL, NRL and Super Rugby. It visually communicates which team is winning and by how much and is very common in live score apps.
							</p>

							<p>
								I was confident the design could be improved by integrating the worm and quarter-by-quarter scores.
							</p>
						</div>
					</div>

					<div class="grid no-padding">
						<div class="col-1-3 col-offset-1-12">
							<h5>
								Sketch
							</h5>
							<img src="img/work-nowapp-sketching-worm.png">
						</div>
						<div class="col-1-3 col-offset-1-6">
							<h5>
								Final mockup
							</h5>
							<img src="img/work-nowapp-sketching-worm-mockup.png">
						</div>
					</div>
				</div><!-- .container -->
			</section> <!-- #nowapp-sketching -->
		</div> <!-- .wrap -->


	</body>
</html>











