<?
//
//---------------------------------
//	APT ABOUT
//---------------------------------
//
function printAptAbout($imagePath) {

?>

			<section class="bg-dark" id="apt-about">
				<div class="container">
					<div class="grid">
						<div class="col-5-6 col-offset-1-12 text-left">
							<h1>
								About The School
							</h1>
						</div>
						<div class="col-1-2 col-offset-1-12 text-left">
							<p>
								Brent Ottley is one of Melbourne's most renowned concert piano technicians with a wealth of professional experience and globally recognised qualifications. 
							</p>
							<p>
								When he recently retired from piano tuning, he founded the Australasian School of Piano Technology in association with Yamaha Australia. He now provides 8 students per year with personalised tuition and hands-on training. 
							</p>
							<p>
								Brent's old website was a basic digital business card from his tuning days and it no longer represented the professional academic image of the school. On top of this, Google Analytics showed that 20-25% of visitors were browsing the site on a mobile phone.
							</p>
						</div>

						<div class="col-1-3">
							<img src="<? print $imagePath; ?>work-apt-photo-brent.jpg" alt="Brent Ottley">
							<small>
								Brent Ottley
							</small>
						</div>
					</div><!-- .grid -->
				</div><!-- .container -->
			</section><!-- #apt-about -->

<?
}		// End of printAptAbout()
?>