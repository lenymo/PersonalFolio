<?
function printWorkNowapp($imagePath) {

?>

			<!--
			==============================
				WORK - NOW APP
			==============================
			-->
			<section class="bg-dark" id="work-nowapp">
				<div class="container">

					<div class="grid">
						<div class="col-1-2 col-offset-1-12 text-left work-nowapp-title">
							<img src="<? print $imagePath ?>logo-espn-2x.png" class="logo-espn-img" alt="ESPN logo">
							<h1>
								Live Score Apps
							</h1>
							<p>
								A ground-up native rebuild of ESPN Australia's live score apps.
							</p>
							<a href="nowapp.php" class="btn" title="View the full case study">
								View case study
							</a>
						</div>

						<div class="col-5-12 work-nowapp-iphone">
							<a href="nowapp.php" title="View the full case study">
								<img src="<? print $imagePath ?>work-intro-nowapp.png" alt="ESPN's Footy Now iPhone app">
							</a>
						</div>
					</div>
				</div><!-- .container -->
			</section><!-- #work-nowapp -->

<?
}		// End of printWorkNowapp()
?>