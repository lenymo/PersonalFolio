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



	<body>
		<header class="site-header">
			
			<a href="javascript:void(0);" class="btn-mobile-menu">
				<i class="icon icon-menu"></i>
			</a>

			<div class="logo">
				Glenn McComb
			</div>


			<?
				// Navigation called by PHP
				$currentNav = "work";
				printNav($currentNav);
			?>

		</header>


		<a href="javascript:void(0);" class="mobile-container-cover">
		</a>

		<section class="bg-light">
			<div class="container container-main-content">

				<img src="img/me.png" width="150" height="150" />

				<h1>
					Glenn McComb
				</h1>
				<p class="lead">
					Designer & front-end dev
				</p>

				<hr>


				<h1>
					ESPN Now Apps
				</h1>
				<p class="lead">
					Live scores in your pocket
				</p>
				<h2>
					Back story
				</h2>
				<p>
					If you are here to see my work, skip to the Sketching section.
				</p>
				<p>
					ESPN Australia have a suite of four live score apps for AFL, NRL, Super Rugby and A-League for both iPhone and Android. For years they were written in HTML / CSS / JS and housed in a native app shell. The result was a functional but poor user experience, and while the approach allowed us to get an early foothold in the mobile market, we soon lost ground to competitors who built superior native apps. So we decided to build native apps. 
				</p>
				<p>
					Our internal team lacked the necessary skills so I worked on a brief and we met with various dev houses in Melbourne, eventually settling on WeMakeApps who have been an absolute pleasure to work with. The brief was to natively re-build our existing apps with very similar content. The content of our was high quality but the interface let it down. Therefore, this project presented an opportunity to explore gestures and UI functions not possible using traditional web technology.
				</p>

				<hr>

				<h2>
					Sketching
				</h2>

				<p>
					My first port of call was to re-imagine the UI on my sketch pad. I use the Behance Creative Outfitters Dot Grid Book because it provides a low-noise visual grid which is perfect for UI sketches. 
				</p>
				<p>
					On the scores page I opted to stack teams and scores rather than having them centre-aligned on the same row. This was done to enhance readability and to stay consistent with ESPN’s global presentation style.
				</p>
			</div><!-- /.container /.container-main-content -->
		</section>
	</body>
</html>











