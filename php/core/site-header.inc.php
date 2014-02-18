<?
function printSiteHeader($currentNav) {
?>

		<header class="site-header">
			<?
				// Hamburger menu.
				printMobileMenu();
			?>

			<!-- My personal mark. -->
			<a href="index.php" class="logo" title="Go home">
				Glenn McComb
			</a>


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