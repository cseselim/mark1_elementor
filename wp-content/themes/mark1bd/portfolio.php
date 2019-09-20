
<?php 
	/*
	Template Name: portfolio
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
						<li class="active">Project</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1>Project</h1>
				</div>
			</div>
		</div>
	</section>

	<div class="container">

		<h2>Meet the <strong>Clients</strong></h2>

		 <div class="button-group filter-button-group">
		  <button data-filter="*" class="active">show all</button>
		  <?php 
                $categories= get_terms('project-category');
                foreach ($categories as $category) { ?>
                    <button class="button" data-filter=".<?php echo  $category->slug; ?>"><?php echo $category->name; ?>
                    </button>

            <?php }?>
		</div>

		<hr>
		
		<div class="grid sort-destination row" data-sort-id="team">
			  <?php 
							// the query
				$the_query = new WP_Query(['post_type'=>'project']);?>

				<?php if ( $the_query->have_posts() ) : ?>

				 <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>

				 	<?php 
                        $css_class = "";
                        $categories= get_the_terms(get_the_id(), 'project-category' );
                        if(is_array($categories) && count($categories)>0)
                		foreach ($categories as $category) {
                			$css_class.=  ' ' . $category->slug;
                		}
                        
         			?>

		
				<div class="col-md-3 col-sm-6 col-xs-12 element-item brands <?php echo $css_class; $css_class=''; ?>">
						<div class="portfolio-item">
							<a href="<?php echo the_permalink(); ?>">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<?php the_post_thumbnail( $size = 'full', $attr = '' ) ?> 
										<span class="thumb-info-title">
											<span class="thumb-info-inner"><?php the_title(); ?></span>
											<!-- <span class="thumb-info-type"><?php the_category( ', ' ); ?></span> -->
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>

				 <?php endwhile; ?>					 
					    <?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div>
		
	</div>

</div>

<?php 
	get_footer();
 ?>