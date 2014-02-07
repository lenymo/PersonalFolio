<?
function printMobileMenu() {
?>

			<!-- Hamburger menu icon. -->
			<a class="btn-mobile-menu" href="javascript:void(0);">
				<i class="icon icon-menu"></i>
				<span>Menu</span>
			</a>

<?
}		// End of printMobileMenu()
?>



<?
function printMobileMenuCover() {
// Called from site-header.inc.php.
?>

		<!-- Appears once the mobile menu is shown, and covers all other page content. -->
		<a class="mobile-container-cover" href="javascript:void(0);">
		</a>

<?
}		// End of printMobileMenuCover()
?>