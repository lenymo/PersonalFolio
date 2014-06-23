<?
//
//---------------------------------
//	FITBUGG ARCHITECTURE
//---------------------------------
//
function printFitbuggArchitecture($imagePath) {

?>

			<section class="bg-light" id="fitbugg-architecture">
				<div class="container">
					<div class="grid">
						<div class="col-1-1">
							<h1>
								App Architecture
							</h1>
						</div>
						<div class="col-5-12 col-offset-1-12 text-left">
							<p>
								Before opening Photoshop, I began creating a basic system overview (traditionally known as a site map).
							</p>
							<p>
								This gave me the basis to begin sketching pen and paper UI wireframes.
							</p>
						</div>

						<div class="col-1-3 col-offset-1-12 text-left">
							<img src="<? print $imagePath ?>work-fitbugg-architecture-time-lapse.gif" alt="Me building the FitBugg site map">
						</div>
					</div><!-- .grid -->

					<hr>

					<div class="grid">
						<div class="col-5-12 col-offset-1-12">
							<img src="<? print $imagePath ?>work-fitbugg-architecture-sketch.png" alt="A comparison of a low-fi and hi-fi sketch.">
						</div>

						<div class="col-1-3 col-offset-1-12 text-left">
							<h2>
								Sketching
							</h2>
							<p>
								Once I had sketched low-fi wireframes and established the structure of the app, I began exploring individual screens in more detail. 
							</p>
							<p>
								In most cases the final wireframes and high-res mockups only differed slightly from these initial sketches. I was able to quickly prioritise important information and set the core visual hierarchy on all screens.
							</p>
						</div>
					</div>
				</div><!-- .container -->
			</section><!-- #fitbugg-architecture -->

<?
}		// End of printFitbuggArchitecture()
?>