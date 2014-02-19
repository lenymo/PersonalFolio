<?
//
//---------------------------------
//	NOW APP BRAND
//---------------------------------
//
function printNowAppBrand($imagePath) {

?>

			<section class="bg-light" id="nowapp-brand">
				<div class="container">
					<div class="grid">
						<div class="col-1-2 centred">
							<h1>
								The "Now" Brand
							</h1>

							<p>
								Each of the four apps are branded with a unique colour which flows through the app's UI and creative assets.
							</p>

							<p>
								A player silhouette helps communicate the sport and distinguishes one app from the other while at the same time visually tying them together. 
							</p>
						</div>
					</div>
				</div>

				<div class="grid no-padding bg-dark now-app-silhouettes">
					<div class="col-1-4 ale">
						<h3>
							<small>A-League</small>
							Football Now
						</h3>

						<img src="<? print $imagePath ?>work-nowapp-branding-player-ale.png" alt="Football Now silhouette">
					</div>

					<div class="col-1-4 nrl">
						<h3>
							<small>NRL</small>
							League Now
						</h3>
						<img src="<? print $imagePath ?>work-nowapp-branding-player-nrl.png" alt="League Now  silhouette">
					</div>

					<div class="col-1-4 afl">
						<h3>
							<small>AFL</small>
							Footy Now
						</h3>
						<img src="<? print $imagePath ?>work-nowapp-branding-player-afl.png" alt="Footy Now  silhouette">
					</div>

					<div class="col-1-4 sru">
						<h3>
							<small>Super Rugby</small>
							Rugby Now
						</h3>
						<img src="<? print $imagePath ?>work-nowapp-branding-player-sru.png" alt="Rugby Now  silhouette">
					</div>
				</div>

				<div class="grid no-padding nowapp-app-icons">
					<div class="col-1-4">
						<img src="<? print $imagePath ?>work-nowapp-branding-icon-ale.png" alt="Football Now app icon">
					</div>
					<div class="col-1-4">
						<img src="<? print $imagePath ?>work-nowapp-branding-icon-nrl.png" alt="League Now app icon">
					</div>
					<div class="col-1-4">
						<img src="<? print $imagePath ?>work-nowapp-branding-icon-afl.png" alt="Footy Now app icon">
					</div>
					<div class="col-1-4">
						<img src="<? print $imagePath ?>work-nowapp-branding-icon-sru.png" alt="Rugby Now app icon">
					</div>
				</div>
			</section> <!-- #nowapp-brand -->

<?
}		// End of printNowAppBrand()
?>