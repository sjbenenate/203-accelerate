<?php
/**
 * The template for displaying custom post type Case Studies
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
        $image_2 = get_field('image_2');
        $image_3 = get_field('image_3');
      ?>
      
        <?php $size = 'full'; // (thumbnail, medium, large, full or custom size) ?>

        <article class="case-study">
          <aside class="case-study-sidebar">
          <h2><?php the_title() ?></h2>
          <h4><span class="tag-line"><?php echo $services; ?></span></h4>
          <h4><span>Client: <?php echo $client; ?></span></h4>
          <p><?php the_content(); ?></p>
          <p class="read-more-link"><a href="<?php echo $site_link; ?>">Visit Live Site &rsaquo;</a></p>
          </aside>

          <div class="case-study-img-section">
          
            <figure class="case-study-img">
            <?php if( $image_1 ) {
              echo wp_get_attachment_image( $image_1, $size );
            } ?>
            </figure>
            
            <figure class="case-study-img">
            <?php if( $image_2 ) {
              echo wp_get_attachment_image( $image_2, $size );
            } ?>
            </figure>

            <figure class="case-study-img">
            <?php if( $image_3 ) {
              echo wp_get_attachment_image( $image_3, $size );
            } ?>
            </figure>
              
          </div>
          
        </article>


				
			<?php endwhile; // end of the loop. ?>
      
		</div><!-- .main-content -->
    
	</div><!-- #primary -->

  <nav id="navigation" class="container">
    <div class="left"><a href="<?php echo get_post_type_archive_link('case_studies'); ?>">&larr; <span>Back to Work</span></a></div>
  </nav>
   
<?php get_footer(); ?>
