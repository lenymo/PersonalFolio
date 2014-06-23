<?
//
//---------------------------------
//	FITBUGG ABOUT
//---------------------------------
//
function printFitbuggAbout($imagePath) {

?>

			<section class="bg-dark" id="fitbugg-about">
				<div class="container">
					<div class="grid">
						<div class="col-1-2 col-offset-1-12 text-left">
							<h1>
								About
							</h1>
							<p>
								FitBugg is a location-based fitness app which connects personal trainers with fitness-seeking individuals in their area. 
							</p>
							<p>
								Fitness session organisers create events which fitness-seekers book in to and attend. All of this is managed within the framework of the app.
							</p>

							<h2>
								My Role
							</h2>

							<p>
								My role began in late February 2014 as UI designer. I was given a basic product specification document outlining desired functionality and tasked with bringing it to life. 
							</p>
							<p>
								The deliverables were logo design, wireframes, high-res mockups, all creative assets sliced up as PNGs and an interactive prototype. This would provide an iOS developer with a concise development roadmap and a thorough understanding of the app's business logic. 
							</p>
						</div>

						<div class="col-5-12 fitbugg-about-mockup">
							<img src="<? print $imagePath ?>work-fitbugg-about-mockup.png" alt="FitBugg Sessions screen">
						</div>
					</div><!-- .grid -->
				</div><!-- .container -->
			</section><!-- #fitbugg-about -->

<?
}		// End of printFitbuggAbout()
?>