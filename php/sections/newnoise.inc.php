<?
function printNewNoise($imagePath) {

?>

			<!--
			==============================
				NEW NOISE
			==============================
			-->
			<section class="bg-dark" id="newnoise">
				<div class="container">
					<div class="grid">
						<div class="col-5-6 centred newnoise-screenshot">
							<img src="<? print $imagePath ?>work-newnoise-screenshot.png" alt="New Noise screenshot">
						</div>
					</div>

					<hr>

					<div class="grid">
						<div class="col-1-2 centred">
							<h1>
								New Noise
							</h1>
							<p>
								In June 2010 I undertook a freelance project to build a website for New Noise recording studio on Mt Dandenong in Melbourne's outer east.
							</p>

							<p>
								The website has since been taken down but the above screenshot shows the original design.
							</p>

							<p>
								Below are photos I took for the project.
							</p>
						</div>
					</div>
				</div><!-- .container -->

				<div class="grid newnoise-photos">
					<img src="<? print $imagePath ?>work-newnoise-photo-1.jpg" alt="New Noise recording space.">

					<img src="<? print $imagePath ?>work-newnoise-photo-2.jpg" alt="New Noise recording space.">

					<img src="<? print $imagePath ?>work-newnoise-photo-3.jpg" alt="New Noise recording space.">

					<img src="<? print $imagePath ?>work-newnoise-photo-4.jpg" alt="New Noise recording space.">

					<img src="<? print $imagePath ?>work-newnoise-photo-5.jpg" alt="New Noise recording space.">
				</div>
				
			</section><!-- #newnoise -->

<?
}		// End of printNewNoise()
?>