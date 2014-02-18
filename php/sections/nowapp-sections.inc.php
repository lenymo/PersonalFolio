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
							<img src="<? print $imagePath ?>work-nowapp-sections-scores.png">
							<h6>
								Scores
							</h6>
						</div>
						<div class="col-1-6">
							<img src="<? print $imagePath ?>work-nowapp-sections-standings.png">
							<h6>
								Standings
							</h6>
						</div>
						<div class="col-1-6">
							<img src="<? print $imagePath ?>work-nowapp-sections-news.png">
							<h6>
								News
							</h6>
						</div>
						<div class="col-1-6">
							<img src="<? print $imagePath ?>work-nowapp-sections-twitter.png">
							<h6>
								Twitter
							</h6>
						</div>
						<div class="col-1-6">
							<img src="<? print $imagePath ?>work-nowapp-sections-tipping.png">
							<h6>
								Tipping
							</h6>
						</div>
						<div class="col-1-6">
							<img src="<? print $imagePath ?>work-nowapp-sections-settings.png">
							<h6>
								Settings
							</h6>
						</div>
					</div>

					<div class="grid">
						<div class="col-5-12 col-offset-1-12 text-left">
							<h2>
								Video demo
							</h2>
							<p>
								To help communicate the proposed functionality of the app, I produced a Flash-based walkthrough of the scores and menu screens.
							</p>
							<p>
								This was shared with our dev team, internal stake-holders and the third party developers we worked with.
							</p>

							<!--
							<small>
								If the HTML5 video doesn't work, <a href="http://vimeo.com/85989022" title="Watch the app video demo on Vimeo" target="_blank">check out the video on Vimeo</a>.
							</small>
							-->
						</div>

						<div class="col-1-3 col-offset-1-12">
							<video controls poster="video/nowapp.png">
								<source src="video/nowapp.webm" type="video/webm">
								<source src="video/nowapp.mp4" type="video/mp4">

								<object type="application/x-shockwave-flash" data="video/nowapp.swf" width="640" height="960"> 
							    <param name="movie" value="video/nowapp.swf" />
							    <param name="quality" value="high" />
							    <embed src="video/nowapp.swf" quality="high" />
								</object>

								<small>
									If the HTML5 video doesn't work, <a href="http://vimeo.com/85989022" title="Watch the app video demo on Vimeo" target="_blank">check out the video on Vimeo</a>.
								</small>
							</video>
						</div>
					</div>
				</div><!-- .container -->
			</section> <!-- #nowapp-sections -->

<?
}		// End of printNowAppSections()
?>