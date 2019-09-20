
<?php 
	/* Template Name: team */
	get_header();
?>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Team</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Team</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<h2>Meet the <strong>Team</strong></h2>

					 <div class="button-group filter-button-group">
					  <button data-filter="*" class="active">show all</button>
					  <?php 
                            $categories= get_terms('team-category');
                            foreach ($categories as $category) { ?>
                                <button class="button" data-filter=".<?php echo  $category->slug; ?>"><?php echo $category->name; ?>
                                </button>

                        <?php }?>
					</div>

					<hr>
					
					<div class="grid sort-destination row" data-sort-id="team">
						  <?php 
										// the query
							$the_query = new WP_Query(['post_type'=>'team']);?>

							<?php if ( $the_query->have_posts() ) : ?>
			
							 <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>

							 	<?php 
                                    $css_class = "";
                                    $categories= get_the_terms(get_the_id(), 'team-category' );
                                    if(is_array($categories) && count($categories)>0)
		                    		foreach ($categories as $category) {
		                    			$css_class.=  ' ' . $category->slug;
		                    		}
                                    
		             			?>

							<div class="col-md-3 col-sm-6 col-xs-12 element-item <?php echo $css_class; $css_class=''; ?> ">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
									<span class="thumb-info-wrapper">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail( $size = 'full', $attr = '' ) ?> 
											<span class="thumb-info-title">
												<span class="thumb-info-inner"><?php the_title(); ?></span>
												<span class="thumb-info-type"><?php echo get_post_meta(get_the_id(),'designation',true); ?></span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">
											<?php 
												$excerpt = get_the_excerpt();
												$excerpt = substr( $excerpt , 0, 140); 
												echo $excerpt." "."[...]";
											?>
										</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="<?php echo get_post_meta(get_the_id(),'facebook',true); ?>"><i class="fa fa-facebook"></i></a>
											<a href="<?php echo get_post_meta(get_the_id(),'twitter',true); ?>"><i class="fa fa-twitter"></i></a>
											<a href="<?php echo get_post_meta(get_the_id(),'linkedin',true); ?>"><i class="fa fa-linkedin"></i></a>
										</span>
									</span>
								</span>
							</div>

							 <?php endwhile; ?>					 
								    <?php wp_reset_postdata(); ?>
							<?php endif; ?>

						</div>
					

				</div>

			</div>



<?php get_footer(); ?>