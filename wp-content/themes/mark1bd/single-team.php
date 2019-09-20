<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
?>

	<div role="main" class="main">

		<section class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="http://localhost/mark1technology/">Home</a></li>
							<li class="active">About Us</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1>About Me</h1>
					</div>
				</div>
			</div>
		</section>

		<div class="container">
			<div class="row">

				<?php while ( have_posts() ) : the_post(); ?>

				<div class="col-md-4">
					<div>
						<div>
							<span class="img-thumbnail">
								<?php the_post_thumbnail( $size = 'full', $attr = '' ) ?> 
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-8">

					<h2 class="mb-none"><?php the_title(); ?></strong></h2>
					<h4 class="heading-primary"><?php echo get_post_meta(get_the_id(),'designation',true); ?></h4>

					<hr class="solid">

					<p><?php the_content(); ?></p>

				</div>

				<?php endwhile; ?>

			</div>
			<div class="row">
				<div class="col-md-12">
					<hr>
				</div>
			</div>

			<section class="parallax section section-parallax section-center" data-stellar-background-ratio="0.5" style="background-image: url(img/parallax-transparent.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div id="owl-example" class="owl-carousel">
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-6 testimonial-with-quotes mb-none">
												<blockquote>
													<p>Joe Doe is the smartest guy I ever met, he provides great tech service for each template and allows me to become more knowledgeable as a designer.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-6 testimonial-with-quotes mb-none">
												<blockquote>
													<p>He provides great tech service for each template and allows me to become more knowledgeable as a designer.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
		
		</div>
		</div>
	</div>



<?php get_footer(); ?>
