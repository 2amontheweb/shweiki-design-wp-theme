<?php
/**
 * Template Name: Blog Page
 */

get_header(); ?>

  <section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
    <h1 class="page-title">Blog</h1>
  </section>


  <!-- BLOG CONTENT
  ================================================== -->
  <div class="container">
    <div class="row" id="primary">

      <main id="content" class="col-sm-8" role="main">

        <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'page'); ?>

            <?php
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            ?>

          <?php endwhile; // End of the loop. ?>

        <?php else : ?>

          <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>
      </main><!-- #content -->


      <!-- SIDEBAR
      ================================================== -->
      <div class="col-sm-4">

        <?php get_sidebar(); ?>


      </div>
    </div><!-- #primary -->
  </div><!-- .container -->


<?php get_footer(); ?>
