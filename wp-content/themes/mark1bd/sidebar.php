<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package understrap
 */


?>

<div class="col-md-4 widget-area" id="secondary" role="complementary">

	<?php dynamic_sidebar( 'right-sidebar' ); ?>

	<div class="tabs mb-xlg">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Latest post</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="popularPosts">
						<ul class="simple-post-list">
							<?php 
		               
		                        $post_query = new WP_Query(array(
		                            'post_type' => 'post',
		                            'posts_per_page' => 5,
		                            'order' => 'DESC',
		                        ));
		                    ?>

							<?php if ( $post_query->have_posts() ) : ?>

							<?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
							<li>
								<div class="post-image">
									<div class="img-thumbnail">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail( $size = 'thumbnail', $attr = '' ) ?>
										</a>
									</div>
								</div>
								<div class="post-info">
									<a href="<?php the_permalink(); ?>">
										<?php 
											$excerpt = get_the_excerpt();
											$excerpt = substr( $excerpt , 0, 30); 
											echo $excerpt." "."[...]";
										?>
									</a>
									<div class="post-meta">
										<?php the_time('F j, Y'); ?>
									</div>
								</div>
							</li>

							<?php endwhile; ?>								 
							<?php endif; ?>
						</ul>
					</div>
				
				</div>
			</div>
		

</div><!-- #secondary -->
	<!--  <div class="col-md-3">
		<aside class="sidebar">
		
			<form>
				<div class="input-group input-group-lg">
					<input class="form-control" placeholder="Search..." name="s" id="s" type="text">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>
		
			<hr>
		
			<h4 class="heading-primary">Categories</h4>
			<ul class="nav nav-list mb-xlg">
				<li><a href="#">Design (2)</a></li>
				<li class="active">
					<a href="#">Photos (4)</a>
					<ul>
						<li><a href="#">Animals</a></li>
						<li class="active"><a href="#">Business</a></li>
						<li><a href="#">Sports</a></li>
						<li><a href="#">People</a></li>
					</ul>
				</li>
				<li><a href="#">Videos (3)</a></li>
				<li><a href="#">Lifestyle (2)</a></li>
				<li><a href="#">Technology (1)</a></li>
			</ul>
		
			<div class="tabs mb-xlg">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
					<li><a href="#recentPosts" data-toggle="tab">Recent</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="popularPosts">
						<ul class="simple-post-list">
							<li>
								<div class="post-image">
									<div class="img-thumbnail">
										<a href="blog-post.html">
											<img src="img/blog/blog-thumb-1.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="post-info">
									<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
									<div class="post-meta">
										 Jan 10, 2016
									</div>
								</div>
							</li>
							<li>
								<div class="post-image">
									<div class="img-thumbnail">
										<a href="blog-post.html">
											<img src="img/blog/blog-thumb-2.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="post-info">
									<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
									<div class="post-meta">
										 Jan 10, 2016
									</div>
								</div>
							</li>
							<li>
								<div class="post-image">
									<div class="img-thumbnail">
										<a href="blog-post.html">
											<img src="img/blog/blog-thumb-3.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="post-info">
									<a href="blog-post.html">Odiosters Nullam Vitae</a>
									<div class="post-meta">
										 Jan 10, 2016
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="tab-pane" id="recentPosts">
						<ul class="simple-post-list">
							<li>
								<div class="post-image">
									<div class="img-thumbnail">
										<a href="blog-post.html">
											<img src="img/blog/blog-thumb-2.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="post-info">
									<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
									<div class="post-meta">
										 Jan 10, 2016
									</div>
								</div>
							</li>
							<li>
								<div class="post-image">
									<div class="img-thumbnail">
										<a href="blog-post.html">
											<img src="img/blog/blog-thumb-3.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="post-info">
									<a href="blog-post.html">Odiosters Nullam Vitae</a>
									<div class="post-meta">
										 Jan 10, 2016
									</div>
								</div>
							</li>
							<li>
								<div class="post-image">
									<div class="img-thumbnail">
										<a href="blog-post.html">
											<img src="img/blog/blog-thumb-1.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="post-info">
									<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
									<div class="post-meta">
										 Jan 10, 2016
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		
			<hr>
		
			<h4 class="heading-primary">About Us</h4>
			<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
		
		</aside>
	</div> -->