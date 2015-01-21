<?
//
//---------------------------------
//	FITBUGG INTRO
//---------------------------------
//
function printFitbuggIntro($imagePath) {

?>

			<section class="bg-dark" id="fitbugg-intro">
				<div class="container">
					<div class="grid">
						<div class="col-7-12 col-offset-1-12 text-left">
							<div class="hero">
								<h1>
									FitBugg
								</h1>
								<p>
									FitBugg is a location-based fitness app which connects personal trainers with fitness-seeking individuals in their area. 
								</p>
								<p>
									Fitness session organisers create events which fitness-seekers book in to and attend. All of this is managed within the framework of the app.
								</p>
							</div>
							
						</div>

						<div class="col-1-3">
							<img src="<? print $imagePath ?>work-fitbugg-intro-stickman.png" alt="FitBugg Icon">
						</div>
					</div><!-- .grid -->
				</div><!-- .container -->
			</section><!-- #fitbugg-intro -->

<?
}		// End of printFitbuggIntro()
?>