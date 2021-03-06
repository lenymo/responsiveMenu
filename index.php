<!DOCTYPE html>
<html>
	<head>
		<?
			// PHP global includes.
			include("php/global.inc.php");

			// Call include files.
			printCSS();
			printMetaTags();

			// Defines which nav the current page falls under.
			$currentNav = "home";
		?>

		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5shiv.js"></script>
			<script type="text/javascript" src="js/respond.min.js"></script>
		<![endif]-->

		<title>
			Glenn McComb - Web designer and front-end developer
		</title>

	</head>



	<body class="body-bg-dark body-home">
		<?
			// Site Header, called by PHP. Pass this function the name of the current page.
			printSiteHeader($currentNav);
		?>


		<div class="wrap">



			
			<?
				// Home page includes.
				printHomeIntro($imagePath);

				// Work links.
				printWorkFitbugg($imagePath);
				printWorkNissco($imagePath);
				printWorkNowApp($imagePath);
			?>
			

			<?
				// Dribbble.
				$dribbbleBG = "bg-dark";
				printDribbble($dribbbleBG);

				// Instagram.
				printInstagram();
			?>

			<!--
			<section class="bg-light">
				<div class="container">
					<h1 id="testOutput">
						Heading One
					</h1>
					<p class="lead">
						Paragraph lead
					</p>

					<p>
						Sketching is a crucial part of my work flow. I use the Behance Dot Grid Book. Sketching helps me quickly iterate UI / UX concept without the distractions of PS. 
					</p>

					<hr />

					<p>
						In the Scores sketch, I tried stacking teams and scores above one another rather than centre-aligning them on the same row. This proved to increase ease of reading.
					</p>
				</div>
			</section>

			<section class="bg-dark">
				<div class="container">
					<h1 id="testOutput">
						Heading One
					</h1>
					<p class="lead">
						Paragraph lead
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
						Heading Two
					</h2>
					<p class="lead">
						Paragraph lead
					</p>
				</div>
			</section>


			<section class="bg-light">
				<div class="container">
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
			-->


			<?
				// Outputs the footer from PHP.
				printFooter();
			?>
		</div> <!-- .wrap -->




		<?
			// Outputs all javascript.
			printJavascript();
		?>
	</body>
</html>











