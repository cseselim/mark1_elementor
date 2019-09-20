<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

/*$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );*/
?>

<?php /*get_template_part( 'sidebar-templates/sidebar', 'footerfull' );*/ ?>



<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="footer-ribbon">
				<span>Get in Touch</span>
			</div>
			<!-- <div class="col-md-3">
				<div class="newsletter">
					<h4>Newsletter</h4>
					<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>

					<div class="alert alert-danger hidden" id="newsletterError"></div>

					<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" novalidate="novalidate">
						<div class="input-group">
							<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit">Go!</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3">
				<h4>Latest Tweets</h4>
				<div id="tweet" class="twitter" data-plugin-tweets="" data-plugin-options="{&quot;username&quot;: &quot;&quot;, &quot;count&quot;: 2}">
					<p>Please wait...</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact-details">
					<h4>Contact Us</h4>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
						<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
						<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div> -->
			<?php dynamic_sidebar( 'footerfull' ); ?>
		</div>
	</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-2">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" class="img-responsive" src="http://mark1bd.com/wp-content/uploads/2018/09/MARK-1-Technologywhait_-main-scrol.png">
								</a>
							</div>
							<div class="col-sm-12 col-md-6 ">
								<p class="f-middle-p">© Copyright <?php echo date("Y"); ?> | <a href="https://www.mark1soft.com/">MARK 1 Software Limited</a> |  All Rights Reserved </p>
							</div>
							<div class="col-sm-12 col-md-4 ">
								<nav id="sub-menu" class="f-middle">
									<?php wp_nav_menu(
										array(
											'theme_location'  => 'footer-menu',
										)
									); ?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<script>
				window.onscroll = function() {myFunction()};

				var navbar = document.getElementById("nav1");
				console.log(navbar);
				var sticky = navbar.offsetTop;

				function myFunction() {
				  if (window.pageYOffset >= sticky) {
				      
				    jQuery('.navbar img').removeAttr('srcset');
				    jQuery('.navbar img').removeAttr('sizes');
				    navbar.classList.add("sticky")
				    jQuery('.navbar img').removeAttr('src');
				    console.log("logo change");
				    jQuery('.navbar img').attr('src', 'http://localhost/mark1_elementor/wp-content/uploads/2018/09/MARK-1-Technologywhait_-main-scrol.png');
                    jQuery('.nav-link').addClass('scroll_navbar');
                    jQuery('.scroll_navbar').removeClass('nav-link');
                    
				  } else {
				    navbar.classList.remove("sticky");
				     jQuery('.navbar img').removeAttr('src');
				    jQuery('.navbar img').attr('src', 'http://localhost/mark1_elementor/wp-content/uploads/2019/01/Technology-logo-for-web-2.png');
				    // jQuery('.navbar img').attr('src', 'http://mark1bd.com/wp-content/uploads/2018/09/MARK-1-Technologywhait_-main-scrol.png');
                    jQuery('.scroll_navbar').addClass('nav-link');
                    jQuery('.nav-link').removerClass('scroll_navbar');
				  }
				}


			</script>

<?php wp_footer(); ?>

</body>

</html>

