<?php 
/*
Template Name: blog
*/
get_header();
 ?>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Blog</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Blog</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-8">
							<div class="blog-posts">

								<?php 
			                        $currentpage = get_query_var('paged');

			                        $post_query = new WP_Query(array(
			                            'post_type' => 'post',
			                            'posts_per_page' => 3,
			                            'paged' => $currentpage

			                        ));
			                    ?>

									<?php if ( $post_query->have_posts() ) : ?>

										 <?php while ( $post_query->have_posts() ) : $post_query->the_post();?>
			
								<article class="post post-medium">
									<div class="row">

										<div class="col-md-5">
											<div class="post-image">
												<div class="">
													<div>
														<div class="img-thumbnail">
															<?php the_post_thumbnail( $size = 'full', $attr = '' ) ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-7">

											<div class="post-content">

												<h2><a href="<?php the_permalink(); ?>"><span class="thumb-info-inner"><?php the_title(); ?></span></a></h2>
												<p>
													<?php 
														$excerpt = get_the_excerpt();
														$excerpt = substr( $excerpt , 0, 300); 
														echo $excerpt." "."[...]";
													?>
												</p>

											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="post-meta">
												<span><i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?> </span>
												<span><i class="fa fa-user"></i> By <a href="#"><?php the_author(); ?></a> </span>
												<a href="<?php the_permalink(); ?>" class="btn btn-xs btn-primary pull-right b-link-button">Read more...</a>
											</div>
										</div>
									</div>
								</article>

								<?php endwhile; ?>
									<div class="row">
										<div class=" col-md-12 pagination" align="center">
					                        <?php 
					                        echo paginate_links(array(
					                            'total' => $post_query->max_num_pages
					                        ));
					                        ?>    
					                    </div>
									</div>					 
								<?php endif; ?>
							
									
								

							</div>
						</div>
						
						<?php
							if (is_page('page_id'=='21')) {
							 	get_sidebar();
							 } 
						 ?>
						
					</div>

				</div>

			</div>

 <?php get_footer(); ?>