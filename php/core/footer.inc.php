<?
function printFooter() {
?>
			<!--
			==============================
				FOOTER
			==============================
			-->
			<section class="bg-dark" id="footer">
				<div class="container">
					<div class="grid grid-pad">
						<div class="col-1-2 pull-right">
							<a href="http://instagram.com/lenymo" class="icon-social icon-social-instagram" title="Follow me on Instagram" target="_blank">
								Instagram
							</a>
							<a href="http://dribbble.com/lenymo" class="icon-social icon-social-dribbble" title="Follow me on Dribbble" target="_blank">
								Dribbble
							</a>
							<a href="http://www.linkedin.com/in/glennmccomb" class="icon-social icon-social-linkedin" title="Connect with my on LinkedIn" target="_blank">
								LinkedIn
							</a>
							<a href="http://twitter.com/lenymo" class="icon-social icon-social-twitter" title="Follow me on Twitter" target="_blank">
								Twitter
							</a>
						</div>

						<div class="col-1-2">
							<nav>
								<ul>
									<li>
										<a href="index.php">
											Home
										</a>
									</li>
									<li>
										<a href="work.php">
											Work
										</a>
									</li>
									<!--
									<li>
										<a href="skills.php">
											Skills
										</a>
									</li>
									-->
									<li>
										<a href="about.php">
											About
										</a>
									</li>
									<li>
										<a href="contact.php">
											Contact
										</a>
									</li>
								</ul>
							</nav>

							<small>
								&copy; <? print date("Y"); ?>, Glenn McComb.
							</small>
						</div><!-- .col-1-2 -->
					</div><!-- .grid -->
				</div><!-- .container -->
			</section><!-- #footer -->

<?
}
?>