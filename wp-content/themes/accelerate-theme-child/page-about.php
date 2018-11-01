<?php /* Template Name: About Page */ ?>
<?php
/**
 *
 * @package WordPress
 * @subpackage Accelerate Marketing child theme
 * @since Accelerate Marketing 2.1
 */

get_header(); ?>

	<div class="site-content">
		<div class="main-content" role="main">
      <h3><?php echo get_field('intro_title') ?></h3>
      <p><?php echo get_field('intro_paragraph') ?></p>
      
      <!-- query the about blurb post types  -->
			<?php query_posts('post_type=about_blurbs'); ?>
        <?php while ( have_posts() ) : the_post(); 
              $icon = get_field('icon');
              $size = 'medium';
              $blurb_title = get_field('title');
              $blurb_paragraph = get_field('paragraph');?>
              
          <div class="about_blurb">
            <?php if( $icon ) {
              echo wp_get_attachment_image( $icon, $size );
            } ?>
            <h3><?php echo $blurb_title; ?></h3>
            <p><?php echo $blurb_paragraph; ?></p>
          </div>
        <?php endwhile; ?> 
        <?php wp_reset_query(); ?>
    
    </div><!-- .main-content -->


    <div class="about-footer">
      <h2 class="about-ft-tag"><?php echo get_field('bottom_tag_line') ?></h1>
      <a class="button about-ft-button" href="<?php echo  get_permalink(get_page_by_title('Contact Us')); ?>">Contact Us</a>
    </div>
	</div><!-- #primary -->

<?php get_footer(); ?>
