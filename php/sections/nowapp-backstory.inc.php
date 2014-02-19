<?
//
//---------------------------------
//	NOW APP BACK STORY
//---------------------------------
//
function printNowAppBackStory($imagePath) {

?>

			<section class="bg-light bg-left-fade" id="nowapp-backstory">
				<div class="container">
					<div class="grid">

						<div class="col-1-2 col-offset-1-12 text-left pull-right">
							<h1>
								Back story
							</h1>

							<p>
								ESPN Australia have a suite of four live score apps on iPhone and Android. They were previously written in HTML, CSS & JavaScript and housed in a native app shell.
							</p>
							<p>
								The content in the apps was good but the interface and UX let it down. In 2013, we decided to build native apps and were able to explore UI functionality not possible using web technology.
							</p>
						</div>

						<div class="col-1-4 col-offset-1-12 text-right">
							<img src="<? print $imagePath ?>work-nowapp-backstory-webapp.png" alt="HTML + CSS + JS = Web App">
						</div>
					</div>
				</div><!-- .container -->
			</section> <!-- nowapp-backstory -->

<?
}		// End of printNowAppBackStory()
?>