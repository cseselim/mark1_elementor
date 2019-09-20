<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!--<div class="hfeed site" id="page">-->
	<!--	<div class="container">-->
	<!--		<div class="row">-->
	<!--			<div class="col-md-7"></div>-->
	<!--			<div class="col-md-2 pr-0 text-right">-->
	<!--				<div class="call_icon">-->
	<!--						<i class="fa fa-phone"></i>-->
	<!--						 : +88 017-16-798704  -->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-md-3 text-right">-->
	<!--				<form action="" method="get" class="searchform ">-->
	<!--					<div class="searchform_fields">-->
	<!--						<span class="text">-->
	<!--							<input name="s" type="text" value="" placeholder="Search…" autocomplete="off">-->
	<!--							<span class="button-wrap">-->
	<!--							<button class="btn btn-special" title="Search" type="submit">-->
	<!--								<i class="fa fa-search"></i>-->
	<!--							</button>-->
	<!--						</span>-->
	<!--						</span> -->
	<!--					</div>-->
	<!--				</form>-->
					
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="nav1" class="navbar navbar-expand-md navbar-dark bg-primary">

		<?php if ( 'container' == $container ) : ?>
			<div class="container" >
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>



			<?php if ( 'container' == $container ) : ?>
				<div class="col-md-2 pl-0 pr-0">
				<ul class="header_icon">
					<li class="social-icon-facebook">
						<a href="https://web.facebook.com/mark1tech/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
					</li>
					<li class="">
						<a href="https://twitter.com/LtdMark1" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
					</li>
					
					<li class="social-icons-linkedin">
						<a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>
					</li>
					
					<li class="social-icons-email">
						<a href="https://mark1bd.com:2096/" target="_blank" title="Webmail"><i class="fa fa-envelope"></i></a>
					</li>
				</ul>
				</div>
				
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->


	</div><!-- #wrapper-navbar end -->
