<?
//
//---------------------------------
//	NISSCO ABOUT
//---------------------------------
//
function nisscoAbout($imagePath) {

?>

			<section class="bg-dark" id="nissco-about">
				<div class="container">
					<div class="grid">
						<div class="col-2-3 col-offset-1-6 text-left">
							<h1>
								About the project
							</h1>

							<p>
								Nissco 1600 Workshop specialise in servicing and preparing high performance vehicles for motorsport competition. They were looking for a complete overhaul of their existing website with an emphasis on their motorsport business.
							</p>

							<p>
								At the same time, they wanted to encourage customers to bring in their daily-drivers for a standard service and promote their new and reconditioned spare parts. There was also the possibility of designing a new logo and re-imagine the Nissco brand.
							</p>

							<p>
								The new website needed to take visual cues from motorsport while leveraging modern web technologies. Importantly, Nissco wanted to be able to update the site themselves and post photos and brief stories from rally events which their customer's vehicles were involved in. 
							</p>
						</div><!-- .col-2-3 -->
					</div><!-- .grid -->


					<hr>
					

					<div class="grid">
						<div class="col-2-3 col-offset-1-6 text-left">
							<h1>
								Logo
							</h1>

							<p>
								Nissco's logo is a mainstay on their customer's cars but it was starting to look dated. If it could be enhanced or even re-designed it would add modern look and feel. The yellow, red and blue colours were important to maintain brand continuity and ideally the horizontal bars could feature as well.
							</p>
						</div>
					</div><!-- .grid -->

					<div class="grid logo-alternatives">
						<div class="col-1-3 col-offset-1-6">
							<img src="<? print $imagePath; ?>work-nissco-logo-v1.png" alt="Nissco logo mockup v1">
						</div>

						<div class="col-1-3">
							<img src="<? print $imagePath; ?>work-nissco-logo-v2.png" alt="Nissco logo mockup v2">
						</div>
					</div><!-- .grid -->

					<div class="grid">
						<div class="col-2-3 col-offset-1-6 text-left">
							<p>
								Each of the above proposals eventually went unused in favour of a simplification of the existing logo.
							</p>
						</div><!-- .col-2-3 -->
					</div>

					<div class="grid logo-updates">
						<div class="col-1-3 col-offset-1-6">
							<img src="<? print $imagePath; ?>work-nissco-logo-original.png" alt="Original Nissco logo">
						</div>

						<div class="col-1-3">
							<img src="<? print $imagePath; ?>work-nissco-logo-updated.png" alt="Updated Nissco logo">
						</div>
					</div><!-- .grid -->


					<hr>


					<div class="grid">
						<div class="col-2-3 col-offset-1-6 text-left">
							<h1>
								Responsive
							</h1>

							<p>
								All pages of the website are designed to work on any device from mobile phone to cinema display television.
							</p>
						</div>
					</div><!-- .grid -->
				</div><!-- .contianer -->

				<div class="grid">
					<div class="col-5-6 col-offset-1-12">
						<img src="<? print $imagePath; ?>work-nissco-responsive-news.png" alt="Nissco news article at responsive breakpoints">
					</div>
					<div class="col-5-6 col-offset-1-12">
						<img src="<? print $imagePath; ?>work-nissco-responsive-part.png" alt="Nissco part article at responsive breakpoints">
					</div>
				</div>
			</section><!-- #nissco-about -->

<?
}		// End of nisscoAbout()
?>