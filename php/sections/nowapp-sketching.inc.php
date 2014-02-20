<?
//
//---------------------------------
//	NOW APP SKETCHING
//---------------------------------
//
function printNowAppSketching($imagePath) {

?>

			<section class="bg-light" id="nowapp-sketching">
				<div class="container">
					<div class="grid">
						<div class="col-5-12 col-offset-1-12 text-left">
							<h1>
								Sketching
							</h1>

							<p>
								Sketching is a crucial part of my work flow. I use the <a href="http://www.theghostlystore.com/collections/behance-action-method/products/behance-dot-grid-book" title="Check out the Dot Grid Book." target="_blank">Behance Dot Grid Book</a>. Sketching helps me quickly iterate UI / UX concepts without the distractions of Photoshop.
							</p>
							<p>
								In the Scores sketch, I stacked teams and scores above one another rather than centre-aligning them on the same row. This made scanning scores faster and easier.
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
							<img src="<? print $imagePath ?>work-nowapp-sketching-scores.png" alt="Scores sketch">
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
								I began to explore a card metaphor. In the Stats sketch I try hinting at a swipe gesture by showing the edges of the left and right cards. 
							</p>

							<?
							/*
							<p>
								This provides an important visual affordance but we didn't integrate it on the fixture page due to width constraints. This produced the "swiping between rounds" usability issues discussed above.
							</p>
							*/
							?>
						</div>
					</div>

					<div class="grid no-padding">
						<div class="col-1-3 col-offset-1-12">
							<h5>
								News
							</h5>
							<img src="<? print $imagePath ?>work-nowapp-sketching-news.png" alt="News sketch">
						</div>
						<div class="col-1-3 col-offset-1-6">
							<h5>
								Stats
							</h5>
							<img src="<? print $imagePath ?>work-nowapp-sketching-stats.png" alt="Stats sketch">
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
								The score worm is a key UI element which describes the flow of play in AFL, NRL and Super Rugby. It visually communicates which team is winning and by how much and is very common in live score apps.
							</p>

							<p>
								I tried to improve the design by vertically aligning the worm and the quarter-by-quarter scores below it.
							</p>
						</div>
					</div>

					<div class="grid no-padding">
						<div class="col-1-3 col-offset-1-12">
							<h5>
								Sketch
							</h5>
							<img src="img/work-nowapp-sketching-worm.png" alt="Worm sketch">
						</div>
						<div class="col-1-3 col-offset-1-6">
							<h5>
								Final mockup
							</h5>
							<img src="<? print $imagePath ?>work-nowapp-sketching-worm-mockup.png" alt="Worm mockup">
						</div>
					</div>

					<hr>

					<div class="grid">
						<div class="col-5-12 col-offset-1-12 text-left">
							<h2>
								Video demo
							</h2>
							<p>
								To help communicate the proposed functionality of the app, I produced a Flash-based walkthrough of the scores and menu screens.
							</p>
							<p>
								This was shared with our dev team, internal stake-holders and the app developers we worked with.
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
			</section> <!-- #nowapp-sketching -->

<?
}		// End of printNowAppSketching()
?>