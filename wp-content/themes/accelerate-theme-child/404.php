<?php
/**
 * The template for displaying 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

      <div class="page-404-wrap">
        <figure class="page-404-icon">
          <?php
            $img_src = get_stylesheet_directory_uri() . '/img/404-img.png';
          ?>
          <img src="<?php echo $img_src ?>"/>
        </figure>
        <div id="#page-404" class="aside-404">
          <h2>Whoops, Took a Wrong Turn…</h2>
          <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
          <p>Feel free to take a look around our <a href="<?php echo get_post_type_archive_link('post'); ?>"><span class="page-link">blog</span></a> or some of our featured <a href="<?php echo get_post_type_archive_link('case_studies'); ?>"><span class="page-link">work</span></a>.</p>
        </div>
      </div>

		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
