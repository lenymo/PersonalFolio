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
							<img src="<? print $imagePath ?>work-nowapp-sketching-scores.png">
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
							<img src="<? print $imagePath ?>work-nowapp-sketching-news.png">
						</div>
						<div class="col-1-3 col-offset-1-6">
							<h5>
								Stats
							</h5>
							<img src="<? print $imagePath ?>work-nowapp-sketching-stats.png">
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
							<img src="<? print $imagePath ?>work-nowapp-sketching-worm-mockup.png">
						</div>
					</div>
				</div><!-- .container -->
			</section> <!-- #nowapp-sketching -->

<?
}		// End of printNowAppSketching()
?>