
<?php 
	/* Template Name: clients */
	get_header();
?>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Clients</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Clients</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<h2>Meet the <strong>Clients</strong></h2>

					 <div class="button-group filter-button-group">
					  <button data-filter="*" class="active">show all</button>
					  <?php 
                            $categories= get_terms('client-category');
                            foreach ($categories as $category) { ?>
                                <button class="button" data-filter=".<?php echo  $category->slug; ?>"><?php echo $category->name; ?>
                                </button>

                        <?php }?>
					</div>

					<hr>
					
					<div class="grid sort-destination row" data-sort-id="team">
						  <?php 
										// the query
							$the_query = new WP_Query(['post_type'=>'client']);?>

							<?php if ( $the_query->have_posts() ) : ?>
			
							 <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>

							 	<?php 
                                    $css_class = "";
                                    $categories= get_the_terms(get_the_id(), 'client-category' );
                                    if(is_array($categories) && count($categories)>0)
		                    		foreach ($categories as $category) {
		                    			$css_class.=  ' ' . $category->slug;
		                    		}
                                    
		             			?>

							<div class="col-md-3 col-sm-6 col-xs-12 element-item <?php echo $css_class; $css_class=''; ?> ">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
									<span class="thumb-info-wrapper">
										<a href="<?php echo get_post_meta(get_the_id(),'client',true); ?>" target="_blank">
											<?php the_post_thumbnail( $size = 'full', $attr = '' ) ?> 
											<span class="thumb-info-title">
												<span class="thumb-info-inner"><?php the_title(); ?></span>
												<!-- <span class="thumb-info-type"><?php echo get_post_meta(get_the_id(),'designation',true); ?></span> -->
											</span>
										</a>
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