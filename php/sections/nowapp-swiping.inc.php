<?
//
//---------------------------------
//	NOW APP SWIPING
//---------------------------------
//
function printNowAppSwiping($imagePath) {

?>

			<section class="bg-light" id="nowapp-swiping">
				<div class="container">
					<div class="grid">
						<div class="col-1-4 centred">
							<img src="<? print $imagePath ?>work-nowapp-swiping-gesture.jpg">
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
							<img src="<? print $imagePath ?>work-nowapp-swiping-oldApp.jpg" alt="The old navigation with buttons">
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
							<img src="<? print $imagePath ?>work-nowapp-swiping-noAffordance.jpg">
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
							<img src="<? print $imagePath ?>work-nowapp-swiping-slimTitles.jpg">
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
							<img src="<? print $imagePath ?>work-nowapp-swiping-final.jpg">
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
			</section> <!-- #nowapp-swiping -->

<?
}		// End of printNowAppSwiping()
?>