<?php /* Template Name: About Page */ ?>
<?php
/**
 *
 * @package WordPress
 * @subpackage Accelerate Marketing child theme
 * @since Accelerate Marketing 2.1
 */

get_header(); ?>

<div class="about-head">
  <p><?php echo get_field('about_head_paragraph'); ?></p>
</div>

	<div class="site-content">
		<div class="main-content" role="main">
      <div class="about-intro">
        <h3><?php echo get_field('intro_title') ?></h3>
        <p><?php echo get_field('intro_paragraph') ?></p>
      </div>
      
      <!-- About page article blurbs, did not use custom post 
      types here for ease of updating in a single page location 
      in control dashboard -->
      <div class="about-article-wrapper">
        <article class="about-article">
          <div class="about-article-aside right">
            <h2><?php echo get_field('section_title_1'); ?></h2>
            <p><?php echo get_field('section_paragraph_1'); ?></p>
          </div>
          <figure class="about-icon left">
            <?php $icon = get_field('section_icon_1'); 
            if( $icon ) {
              echo wp_get_attachment_image( $icon, $size );
            } ?>
          </figure>
        </article>
        

        <article class="about-article">
          <div class="about-article-aside left">
            <h2><?php echo get_field('section_title_2'); ?></h2>
            <p><?php echo get_field('section_paragraph_2'); ?></p>
          </div>
          <figure class="about-icon right">
            <?php $icon = get_field('section_icon_2'); 
            if( $icon ) {
              echo wp_get_attachment_image( $icon, $size );
            } ?>
          </figure>
        </article>
        
        <article class="about-article">
          <div class="about-article-aside right">
            <h2><?php echo get_field('section_title_3'); ?></h2>
            <p><?php echo get_field('section_paragraph_3'); ?></p>
          </div>
          <figure class="about-icon left">
            <?php $icon = get_field('section_icon_3'); 
            if( $icon ) {
              echo wp_get_attachment_image( $icon, $size );
            } ?>
          </figure>
        </article>
        
        <article class="about-article">
          <div class="about-article-aside left">
            <h2><?php echo get_field('section_title_4'); ?></h2>
            <p><?php echo get_field('section_paragraph_4'); ?></p>
          </div>
          <figure class="about-icon right">
            <?php $icon = get_field('section_icon_4'); 
            if( $icon ) {
              echo wp_get_attachment_image( $icon, $size );
            } ?>
          </figure>
        </article>
      </div><!-- about article wrapper -->
    </div><!-- .main-content -->


    <div class="about-footer">
      <h2 class="about-ft-tag"><?php echo get_field('bottom_tag_line') ?></h1>
      <a class="button about-ft-button" href="<?php echo  get_permalink(get_page_by_title('Contact Us')); ?>">Contact Us</a>
    </div>
	</div><!-- #primary -->

<?php get_footer(); ?>
