<?
//
//---------------------------------
//	FITBUGG LOGO
//---------------------------------
//
function printFitbuggLogo($imagePath) {

?>

			<section class="bg-light" id="fitbugg-logo">
				<div class="container">
					<div class="grid">
						<div class="col-1-1">
							<div class="grid">
								<div class="col-1-6 centred">
									<img src="<? print $imagePath; ?>work-fitbugg-logo-fitbugg.png" alt="FitBugg app icon">
								</div>
							</div>
							<h1>
								Logo Design
							</h1>
						</div>
					</div><!-- .grid -->

					<div class="grid">
						<div class="col-1-4 col-offset-1-12">
							<img src="<? print $imagePath ?>work-fitbugg-logo-sketch-1.jpg" alt="First draft - dumbbell location pin">
						</div>
						<div class="col-1-2 col-offset-1-12 text-left">
							<h2>
								First Draft
							</h2>
							<p>
								My initial approach to the logo utilised a dumbbell in combination with a location pin. 
							</p>
							<p>
								This was a cute way to communicate what the app was about, but it was ambiguous and the weight lifting motif was too masculine.
							</p>
						</div>
					</div><!-- .grid -->

					<hr>

					<div class="grid">
						<div class="col-1-4 col-offset-1-12">
							<img src="<? print $imagePath; ?>work-fitbugg-logo-sketch-2.jpg" alt="Second draft - a woman stretching in a location pin">
						</div>
						<div class="col-1-2 col-offset-1-12 text-left">
							<h2>
								Second Draft
							</h2>
							<p>
								My next iteration maintained the location pin, but tackled it from a more human perspective. This was ultimately too feminine and the detail was difficult to make out at low resolutions.
							</p>
						</div>
					</div><!-- .grid -->

					<hr>

					<div class="grid">
						<div class="col-1-4 col-offset-1-12">
							<img src="<? print $imagePath ?>work-fitbugg-logo-sketch-3.jpg" alt="Final draft - A stick-figure stretching">
						</div>
						<div class="col-1-2 col-offset-1-12 text-left">
							<h2>
								Final Concept
							</h2>
							<p>
								Next I further developed the stretching concept, which visually describes exercise in a non-masculine way. We focused on the stretching pose but went with a bubbly, playful stick figure.
							</p>
						</div>
					</div><!-- .grid -->
				</div><!-- .container -->
			</section><!-- #fitbugg-logo -->

<?
}		// End of printFitbuggLogo()
?>