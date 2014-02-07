<?
function printSiteHeader($currentNav) {
?>

		<header class="site-header">
			<?
				// Hamburger menu.
				printMobileMenu();
			?>

			<!-- My personal mark. -->
			<div class="logo">
				Glenn McComb
			</div>


			<?
				// Navigation called by PHP
				printNav($currentNav);
			?>
		</header>

		<?
			// Prints the mobile menu cover 
			printMobileMenuCover()
		?>

<?
}		// End of printSiteHeader()
?>