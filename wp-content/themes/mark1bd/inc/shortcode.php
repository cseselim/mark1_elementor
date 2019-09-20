<?php 
    /***
    *blog page shortcode
    ***/

function recent_posts_function() {
   ?>
    <?php 
		 $post_query = new WP_Query(
            array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    

                ));
            ?>

		<?php if ( $post_query->have_posts() ) : ?>

		<?php while ( $post_query->have_posts() ) : $post_query->the_post();
	?>

    <div class="blog col-sm-12 col-md-4">
        <div class="date">
            <p>13</p>
            <p class="month">jun</p>    
        </div>
        
        <div class="blog-h">
            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
            <p>
            	<?php 
					$excerpt = get_the_excerpt();
					$excerpt = substr( $excerpt , 0, 100); 
					echo $excerpt." "."[...]";
				?>
            </p>
            <a class="b-read" href="<?php the_permalink(); ?>">read more</a>
        </div>
    </div>

     <?php endwhile; ?>					 
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

<?php
   return;
}

function register_shortcodes(){
   add_shortcode('recent-posts', 'recent_posts_function');
}

add_action( 'init', 'register_shortcodes');


/***
*portfolio shortcode
***/
function project_posts_function() {
   ?>
    <?php 
         $post_query = new WP_Query(
            array(
                    'post_type' => 'project',
                ));
            ?>

        <?php if ( $post_query->have_posts() ) : ?>
        <div id="owl-example-p" class="owl-carousel">
        <?php while ( $post_query->have_posts() ) : $post_query->the_post();
    ?>

    <div class=" project-carosul-item "> 
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $size = 'large', $attr = '' ) ?></a> 
    </div>
 
     <?php endwhile; ?>
         </div>                  
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

<?php
   return;
}
function register_project_shortcodes(){
   add_shortcode('project-posts', 'project_posts_function');
}

add_action( 'init', 'register_project_shortcodes');

/***
*client carousal shortcode
***/

function client_owl_function() {
   ?>
    <?php 
         $post_query = new WP_Query(
            array(
                    'post_type' => 'client',
                ));
            ?>

        <?php if ( $post_query->have_posts() ) : ?>
        <section id="client_carosul">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="owl-example" class="owl-carousel">
        <?php while ( $post_query->have_posts() ) : $post_query->the_post();
    ?>
    
        <div>
            <div class="col-md-12">
                <div class="c-thumnail">
                    <?php the_post_thumbnail( $size = 'medium', $attr = '' ) ?>
                </div>
                <div class="testimonial testimonial-style-6 testimonial-with-quotes mb-none">
                    <blockquote>
                        <p><?php the_content(); ?></p>
                    </blockquote>
                    <div class="testimonial-author">
                        <p><strong><?php the_title(); ?></strong><!-- <span>CEO & Founder - Okler</span> --></p>
                    </div>
                </div>
            </div>
        </div>
 
     <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>             
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

<?php
   return;
}
function register_client_shortcodes(){
   add_shortcode('client-owl', 'client_owl_function');
}

add_action( 'init', 'register_client_shortcodes');

            