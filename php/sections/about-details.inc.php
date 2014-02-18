<?
//
//---------------------------------
//	ABOUT DETAILS
//---------------------------------
//
function printAboutDetails($imagePath) {

?>

			<section class="bg-light" id="about-details">
				<div class="container">
					<div class="grid grid-pad">
						<div class="col-5-12 about-details-selfie">
							<img src="<? print $imagePath ?>about-intro-me.png">
							<br />
						</div>

						<div class="col-7-12">
							<h1>
								Digital Designer
							</h1>
							<p class="lead">
								Melbourne, Australia
							</p>
							<p>
								I am a digital design professional who specialises in web and mobile design and front-end development.
							</p>
						</div>
					</div>

					<div class="grid">
						<div class="col-2-3 centred text-center">
							<a href="twitter.com/lenymo" class="icon-social icon-social-twitter" title="Follow me on Twitter" target="_blank">
								Twitter
							</a>
							<a href="http://www.linkedin.com/in/glennmccomb" class="icon-social icon-social-linkedin" title="Connect with my on LinkedIn" target="_blank">
								LinkedIn
							</a>
							<a href="http://dribbble.com/lenymo" class="icon-social icon-social-dribbble" title="Follow me on Dribbble" target="_blank">
								Dribbble
							</a>
							<a href="http://instagram.com/lenymo" class="icon-social icon-social-instagram" title="Follow me on Instagram" target="_blank">
								Instagram
							</a>
							<a href="http://flickr.com/lenymo" class="icon-social icon-social-flickr" title="Check out my photos of Flickr" target="_blank">
								Flickr
							</a>
							<a href="http://lenymo.tumblr.com" class="icon-social icon-social-tumblr" title="Follow me on Tumblr" target="_blank">
								Tumblr
							</a>
							<a href="http://last.fm/user/elgyn2" class="icon-social icon-social-lastfm" title="Add me on Last.fm" target="_blank">
								Last.fm
							</a>
						</div>
					</div>


					<!--
					<hr />

					<div class="grid grid-pad">
						<p class="lead text-center">
							I am a digital design professional who specialises in web and mobile design and front-end development.
						</p>
					<div>
					-->
				</div><!-- .container -->
			</section><!-- #about-details -->

<?
}		// End of printAboutDetails()
?>