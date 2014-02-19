<?
function printWorkIntro($imagePath) {

?>

			<!--
			==============================
				WORK INTRO
			==============================
			-->
			<section class="bg-dark" id="work-intro">
				<div class="container">

					<div class="grid">
						<div class="col-1-2 col-offset-1-12 text-left work-intro-title">
							<img src="<? print $imagePath ?>logo-espn-2x.png" class="logo-espn-img" alt="ESPN logo">
							<h1>
								Live Score Apps
							</h1>
							<p>
								A ground-up native rebuild of ESPN Australia's live score apps.
							</p>
							<a href="nowapp.php" class="btn" title="View the full case study">
								View case study
							</a>
						</div>

						<div class="col-5-12 work-intro-nowapp">
							<a href="nowapp.php" title="View the full case study">
								<img src="<? print $imagePath ?>work-intro-nowapp.png" alt="ESPN's Footy Now iPhone app">
							</a>
						</div>
					</div>
				</div><!-- .container -->
			</section><!-- #work-intro -->

<?
}		// End of printWorkIntro()
?>