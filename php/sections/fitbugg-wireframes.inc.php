<?
//
//---------------------------------
//	FITBUGG WIREFRAMES
//---------------------------------
//
function printFitbuggWireframes($imagePath) {

?>

			<section class="bg-light" id="fitbugg-wireframes">
				<div class="container">
					<div class="grid">
						<div class="col-5-12 col-offset-1-12 text-left">
							<h1>
								Wireframes
							</h1>
							<p>
								To communicate the fundamental structure of the app and its screens, I created over 100 wireframes in <a href="http://www.omnigroup.com/omniGraffle" target="_blank" title="OmniGraffle for wireframing">OmniGraffle</a> and compiled them in a detailed product spec document. 
							</p>
							<p>
								I might never speak to the developer of this project so it was important that all features and interactions were explained in detail.
							</p>
						</div>

						<div class="col-1-3 col-offset-1-12 fitbugg-wireframes-wireframes">
							<img src="<? print $imagePath; ?>work-fitbugg-wireframes-wireframes.jpg" alt="FitBugg Wireframes">
						</div>
					</div><!-- .grid -->

					<div class="grid">
						<div class="col-5-6 col-offset-1-12">
							<img src="<? print $imagePath; ?>work-fitbugg-wireframes-booklet.jpg" alt="Details FitBugg specifications document">
						</div>
					</div><!-- .grid -->
				</div><!-- .container -->
			</section><!-- #fitbugg-wireframes -->

<?
}		// End of printFitbuggWireframes()
?>