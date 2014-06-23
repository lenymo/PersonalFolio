<?
//
//---------------------------------
//	FITBUGG BRAND
//---------------------------------
//
function printFitbuggBrand($imagePath) {

?>

			<section class="bg-light" id="fitbugg-brand">
				<div class="container">
					<div class="grid">
						<div class="col-1-4 col-offset-1-12">
							<img src="<? print $imagePath; ?>work-fitbugg-brand-logo.jpg" alt="FitBugg Logo">
						</div>
						<div class="col-1-2 col-offset-1-12 text-left">
							<h1>
								The FitBugg Brand
							</h1>
							<p>
								In the early going my working colour was a grassy-green which would map to the outdoor park location of many PT sessions. Over time this began to look dull, and in experimenting with the icon we settled on a vibrant blue. 
							</p>
						</div>
					</div><!-- .grid -->


					<hr>


					<div class="grid">
						<div class="col-2-3 centred fitbugg-brand-typography">
							<h2>
								Typography
							</h2>
							<p>
								I wanted the typography to match the fun style of the icon. I mocked up various options but ultimately decided on <a href="http://www.myfonts.com/fonts/exljbris/museo-sans-rounded/" target="_blank" title="Museo Sans Rounded">Museo Sans Rounded</a> because it felt both solid and strong while maintaining the rounded style of the stick-figure.
							</p>

							<div class="grid no-padding">
								<div class="col-1-2">
									<img src="<? print $imagePath; ?>work-fitbugg-brand-proxima.jpg" alt="Proxima Nova Soft">
								</div>
								<div class="col-1-2">
									<img src="<? print $imagePath; ?>work-fitbugg-brand-museo.jpg" alt="Museo Sans Rounded">
								</div>
							</div>
						</div>
					</div><!-- .grid -->


					<hr>


					<div class="grid">
						<div class="col-2-3 centred fitbugg-brand-colours">
							<h2>
								Colours
							</h2>
							<p>
								A colour palette was developed and used throughout the app. This included the blues shown below, along with a suite of blue-tinted grays and success and fail colours.
							</p>
							<img src="<? print $imagePath; ?>work-fitbugg-brand-colours.png" alt="FitBugg Colours">
						</div>
					</div><!-- .grid -->
				</div><!-- .container -->
			</section><!-- #fitbugg-brand -->

<?
}		// End of printFitbuggBrand()
?>