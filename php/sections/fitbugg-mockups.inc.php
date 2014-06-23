<?
//
//---------------------------------
//	FITBUGG MOCKUPS
//---------------------------------
//
function printFitbuggMockups($imagePath) {

?>

			<section class="bg-light" id="fitbugg-mockups">
				<div class="container">
					<div class="grid">
						<div class="col-2-3 centred">
							<h1>
								Hi-res mockups
							</h1>
							<p>
								High res mockups were designed using Photoshop, which I've used on a daily basis for over 10 years. With wireframes as a guide I was able to move very quickly through all screens. 
							</p>
						</div>
					</div><!-- .grid -->
				</div><!-- .container -->

				<div class="grid no-padding">
					<div class="col-1-3">
						<img src="<? print $imagePath; ?>work-fitbugg-mockups-1.jpg" alt="FitBugg welcome screen">
					</div>

					<div class="col-1-3">
						<img src="<? print $imagePath; ?>work-fitbugg-mockups-2.jpg" alt="FitBugg 1-on-1 booking screen">
					</div>

					<div class="col-1-3">
						<img src="<? print $imagePath; ?>work-fitbugg-mockups-3.jpg" alt="FitBugg messages screen">
					</div>
				</div><!-- .grid -->
			</section><!-- #fitbugg-mockups -->

<?
}		// End of printFitbuggMockups()
?>