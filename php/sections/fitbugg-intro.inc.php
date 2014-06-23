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
								<p class="lead">
									An iPhone app to help maintain your desired fitness level
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