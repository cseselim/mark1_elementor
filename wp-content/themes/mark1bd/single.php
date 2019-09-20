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
									<li class="active">Single</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<?php if ('post' == get_post_type()) { ?>
										<h1>Post View</h1>
									<?php } else { ?>
											<h1>Project View</h1>										
									<?php  } ?>
								
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
				
					</div>

					<div class="row">
						<?php if ( have_posts() ) : ?>

							<?php while ( have_posts() ) : the_post(); ?>

						<div class="col-md-6">

							<div class="">
								<div>
									<span class="img-thumbnail">
										<?php the_post_thumbnail( $size = 'full', $attr = '' ) ?>
									</span>
								</div>
							</div>

						</div>

						<div class="col-md-6">

							<div class="portfolio-info">
								<div class="row">
									<div class="col-md-12">
										<ul>
											<li>
												<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>
												<?php
												    $post_views_count = get_post_meta( get_the_ID(), 'post_views_count', true );
												    // Check if the custom field has a value.
												    if ( ! empty( $post_views_count ) ) {
												        echo $post_views_count;
												    }
												?></a>
											</li>
											<li>
												<i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?>
											</li>
											<!-- <li>
												<i class="fa fa-tags"></i><?php the_category(); ?>
											</li> -->
										</ul>
									</div>
								</div>
							</div>

							<h5 class="mt-sm"><?php the_title(); ?></h5>
							<p class="mt-xlg"><?php the_content(); ?></p>

							<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a> <span class="arrow hlb appear-animation" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>

							<ul class="portfolio-details">
								<li>
									<?php if ('post' == get_post_type()) { ?>
										<h5 class="mt-sm mb-xs">Skills</h5>
										<ul class="list list-inline list-icons">
											<li><i class="fa fa-check-circle"></i><?php the_tags(); ?></li><br>
										</ul>
									<?php } ?>
									
								</li>
								<li>
									<?php if ('post' != get_post_type()) { ?>
										<h5 class="mt-sm mb-xs">Client</h5>
									<p><?php echo get_post_meta(get_the_id(),'project',true); ?></p>
									<?php } ?>
									
								</li>
							</ul>

						</div>
						<?php endwhile; ?>								 
						<?php endif; ?>
					</div>

				</div>

			</div>

<?php get_footer(); ?>
