<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jazz_Townsville
 */

?>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/0a31d1e274.js"></script>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="float-container">
	  		<div class="float-child">
	    		<div class="footerTitle">
						<p>Jazz Townsville</p>
					</div>
	  		</div>
	  	<div class="float-child">
	    	<div class="footerExplore"><p id = "footerHeading">Explore<p></div>
					<div class="footerNav">
						<ul id = "exploreUl">
							<li><a href="http://localhost/jazztownsville/">Home</a></li>
							<li><a href="photos.php">Photos</a></li>
							<li><a href="bands">Bands</a></li>
							<li><a href="festivals.php">Festivals</a></li>
							<li><a href="about.php">About</a></li>
						</ul>
					</div>
	  	</div>
			<div class="float-child">
	    	<div class="footerVisit"><p id = "footerHeading">Visit</p></div>
				<p class="address">Chico Rio 247 Flinders Street</p>
		  </div>
			<div class="float-child">
	    	<div class="footerMedia"><p id = "footerHeading">Media<p></div>
					<div class="row " style="text-align: center">
							<a href="https://facebook.com/events/s/jazz-club-opening-night-feat-3/2878385435515845/?ti=icl">
									<i class="fab fa-facebook-square logo" style="text-align: right;";></i>
							</a>
							<a href="mailto:townsvillejazz@icloud.com">
									<i class="fas fa-envelope-square logo" style="text-align: left;"></i>
							</a>
					</div>
	  	</div>
		</div>
		<div class ="Copyright">
			<p class=>Last updated  19 March 2020 © 2006</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
