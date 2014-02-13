<?
function printNav($currentNav) {

	$navHome = "";
	$navWork = "";
	$navSkills = "";
	$navAbout = "";
	$navContact = "";

	$currentNavClass = " class=\"current\"";

	if ($currentNav == "home") {
		$navHome = $currentNavClass;
	} elseif ($currentNav == "work") {
		$navWork = $currentNavClass;
	} elseif ($currentNav == "skills") {
		$navSkills = $currentNavClass;
	} elseif ($currentNav == "about") {
		$navAbout = $currentNavClass;
	} elseif ($currentNav == "contact") {
		$navContact = $currentNavClass;
	}
?>

			<nav class="main-menu">
				<ul>
					<li<? print $navHome; ?>>
						<a href="index.php" title="Go home.">
							<i class="icon icon-home"></i>
							<span>Home</span>
						</a>
					</li>

					<li<? print $navWork; ?>>
						<a href="work.php" title="Check out my work.">
							<i class="icon icon-work"></i>
							<span>Work</span>
						</a>
					</li>

					<!--
					<li<? print $navSkills; ?>>
						<a href="javascript:void(0);">
							<i class="icon icon-skills"></i>
							<span>Skills</span>
						</a>
					</li>
					-->

					<li<? print $navAbout; ?>>
						<a href="about.php" title="Learn more about me.">
							<i class="icon icon-about"></i>
							<span>About</span>
						</a>
					</li>

					<li<? print $navContact; ?>>
						<a href="contact.php" title="Contact me.">
							<i class="icon icon-contact"></i>
							<span>Contact</span>
						</a>
					</li>
				</ul>
			</nav>

<?
}		// End of printNav()
?>