<?
//
//---------------------------------
//	ABOUT INTRO
//---------------------------------
//
function printAboutIntro($imagePath) {

?>

			<section class="bg-dark" id="about-intro">
				<div class="container">

					<div class="grid grid-pad">
						<div class="col-7-12 col-offset-5-12 about-intro-details bg-light">
							<img src="<? print $imagePath ?>logo-large-2x.png" class="hidden-phone">
							<!--
							<div class="logo-large">
								Glenn McComb
							</div>
							-->
						</div>
					</div>
				</div><!-- .container -->
			</section><!-- #about-intro -->

<?
}		// End of printAboutIntro()
?>