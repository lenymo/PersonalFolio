<?
//
//---------------------------------
//	NOW APP CARDS
//---------------------------------
//
function printNowAppCards($imagePath) {

?>

			<section class="bg-light" id="nowapp-cards">
				<div class="container">
					<div class="grid">
						<div class="col-1-2 centred">
							<h1>
								Designing with cards
							</h1>

							<p>
								The online world is currently being re-imagined with 'cards' as a primary visual  metaphor. 
							</p>
							<p>
								The power of cards lies in their ability to visually associate related chunks of content, while at the same time differentiating them from other similar groupings of content.
							</p>
						</div>
					</div>

					<div class="grid grid-pad">
						<div class="col-1-3">
							<h5>
								Tweets
							</h5>
							<img src="<? print $imagePath ?>work-nowapp-cards-twitter.png" alt="Twitter mockup">
						</div>

						<div class="col-1-3">
							<h5>
								Matches
							</h5>
							<img src="<? print $imagePath ?>work-nowapp-cards-scores.png" alt="Scores mockup">
						</div>

						<div class="col-1-3">
							<h5>
								Articles
							</h5>
							<img src="<? print $imagePath ?>work-nowapp-cards-news.png" alt="News mockup">
						</div>
					</div>
					<div class="grid">
						<div class="col-1-2 centred">
							<p>
								Prominent companies which use cards to enhance their UI include Google, Twitter, Pinterest, Spotify and Facebook. Paul Adams further describes trend in <a href="http://insideintercom.io/why-cards-are-the-future-of-the-web/" title="Why cards are the future of the web, by Paul Adams." target="_blank">this influential article</a>.
							</p>
						</div>
					</div>
				</div><!-- .container -->
			</section><!-- #nowapp-cards -->

<?
}		// End of printNowAppCards()
?>