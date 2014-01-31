<!DOCTYPE html>
<html>
	<head>
		<title>
			Responsive Menu
		</title>


		<?
			// PHP includes
			include("php/nav.inc.php");
		?>


		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css">


		<!-- JavaScript -->
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/html5shiv.js"></script>
		<script src="js/javascript.js"></script>

		<!-- Meta Tags -->
		<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1.0">

	</head>



	<body class="body-bg-dark">
		<header class="site-header">
			<a href="javascript:void(0);" class="btn-mobile-menu">
				<i class="icon icon-menu"></i>
			</a>

			<div class="logo">
				Glenn McComb
			</div>


			<?
				// Navigation called by PHP
				$currentNav = "home";
				printNav($currentNav);
			?>
		</header>

		<!-- This <a> covers content when the mobile menu is un-hidden. -->
		<a href="javascript:void(0);" class="mobile-container-cover">
		</a>


		<section class="bg-dark" id="homepage">
			<div class="container container-main-content">

				<h1>
					Designer & front-end dev
				</h1>
				<p class="lead">
					Melbourne, Australia
				</p>

			</div><!-- /.container /.container-main-content -->
		</section>


		<section class="bg-light">
			<div class="container container-main-content">
				<h1 id="testOutput">
					Test Output
				</h1>
				<p class="lead">
					Recent work
				</p>

				<p>
					Sketching is a crucial part of my work flow. I use the Behance Dot Grid Book. Sketching helps me quickly iterate UI / UX concept without the distractions of PS. 
				</p>
				<!--
				<p>
					In the Scores sketch, I tried stacking teams and scores above one another rather than centre-aligning them on the same row. This proved to increase ease of reading.
				</p>
				<p>
					I added round number indicators which were later removed only to be added back in. I removed venue for each match but later re-integrated it because it was deemed vital information.
				</p>
			-->

				<hr />

				<!--
				<h2>
					Other stuff
				</h2>
				<p class="lead">
					Smaller title?
				</p>
			-->
			</div>
		</section>


		<section class="bg-dark">
			<div class="container container-main-content">
				<h1 id="testOutput">
					Test Output
				</h1>
				<p class="lead">
					Recent work
				</p>

				<p>
					Sketching is a crucial part of my work flow. I use the Behance Dot Grid Book. Sketching helps me quickly iterate UI / UX concept without the distractions of PS. 
				</p>
				<p>
					In the Scores sketch, I tried stacking teams and scores above one another rather than centre-aligning them on the same row. This proved to increase ease of reading.
				</p>
				<p>
					I added round number indicators which were later removed only to be added back in. I removed venue for each match but later re-integrated it because it was deemed vital information.
				</p>

				<hr />

				<h2>
					Other stuff
				</h2>
				<p class="lead">
					Smaller title?
				</p>
			</div>
		</section>


		<section class="bg-light">
			<div class="container container-main-content">
				<h1 id="testOutput">
					Test Output
				</h1>
				<p class="lead">
					Recent work
				</p>

				<p>
					Sketching is a crucial part of my work flow. I use the Behance Dot Grid Book. Sketching helps me quickly iterate UI / UX concept without the distractions of PS. 
				</p>
			</div>
		</section>


	</body>
</html>











