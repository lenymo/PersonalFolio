<?
//
//---------------------------------
//	NOW APP INTRO
//---------------------------------
//
function printNowAppIntro($imagePath) {

?>

			<section class="bg-dark" id="nowapp-intro">
				<div class="container">

					<div class="hero">
						<!--
						<div class="logo-espn">
							ESPN
						</div>
						-->
						<img src="<? print $imagePath ?>logo-espn-2x.png" class="logo-espn-img" alt="ESPN logo">
						<h1>
							Live Score Apps
						</h1>
						<p class="lead">
							A case study
						</p>
					</div>

					<div class="grid grid-pad nowapp-intro-iphones">
						<div class="col-1-4 col-offset-1-12 hidden-phone">
							<img src="<? print $imagePath ?>work-nowapp-intro-iphone-right.png" alt="Football Now Scores screen">
						</div>

						<div class="col-1-3">
							<img src="<? print $imagePath ?>work-nowapp-intro-iphone-middle.png" alt="Footy Now Match screen">
						</div>

						<div class="col-1-4 hidden-phone">
							<img src="<? print $imagePath ?>work-nowapp-intro-iphone-left.png" alt="League Now Standings screen">
						</div>
					</div>
				</div>
			</section><!-- #nowapp-intro -->

<?
}		// End of printNowAppIntro()
?>