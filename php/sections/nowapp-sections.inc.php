<?
//
//---------------------------------
//	NOW APP SECTIONS
//---------------------------------
//
function printNowAppSections($imagePath) {

?>

			<section class="bg-light" id="nowapp-sections">
				<div class="container">
					<div class="grid">
						<div class="col-1-2 centred">
							<h1>
								Sections
							</h1>
							<p>
								In our initial launch there were six sections.
							</p>
						</div>
					</div>
					<div class="grid grid-pad nowapp-section-icons">
						<div class="col-1-6">
							<img src="<? print $imagePath ?>work-nowapp-sections-scores.png" alt="Scores icon">
							<h6>
								Scores
							</h6>
						</div>
						<div class="col-1-6">
							<img src="<? print $imagePath ?>work-nowapp-sections-standings.png" alt="Standings icon">
							<h6>
								Standings
							</h6>
						</div>
						<div class="col-1-6">
							<img src="<? print $imagePath ?>work-nowapp-sections-news.png" alt="News icon">
							<h6>
								News
							</h6>
						</div>
						<div class="col-1-6">
							<img src="<? print $imagePath ?>work-nowapp-sections-twitter.png" alt="Twitter icon">
							<h6>
								Twitter
							</h6>
						</div>
						<div class="col-1-6">
							<img src="<? print $imagePath ?>work-nowapp-sections-tipping.png" alt="Tipping icon">
							<h6>
								Tipping
							</h6>
						</div>
						<div class="col-1-6">
							<img src="<? print $imagePath ?>work-nowapp-sections-settings.png" alt="Settings icon">
							<h6>
								Settings
							</h6>
						</div>
					</div>
				</div><!-- .container -->
			</section> <!-- #nowapp-sections -->

<?
}		// End of printNowAppSections()
?>