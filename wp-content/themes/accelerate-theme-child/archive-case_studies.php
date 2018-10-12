<?php
/**
 * The template for displaying Case Studies landing page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.1
 */

get_header();  ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
        $services = get_field('services');
        $client = get_field('client');
        $site_link = get_field('site_link');
        $image_1 = get_field('image_1');
      ?>
      
        <?php $size = 'full'; // (thumbnail, medium, large, full or custom size) ?>

        <article class="case-study">
          <aside class="case-study-sidebar">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <h4><span class="tag-line"><?php echo $services; ?></span></h4>
          <p><?php the_excerpt(); ?></p>
          <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project &rsaquo;</a></p>
          </aside>

          <div class="case-study-img-section">
          
            <figure class="case-study-img"><a href="<?php the_permalink(); ?>">
            <?php if( $image_1 ) {
              echo wp_get_attachment_image( $image_1, $size );
            } ?>
            </a></figure>
              
          </div>
          
        </article>


				
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
