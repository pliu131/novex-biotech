<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

<div id="primary" role="main">

  <div class="site-content">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="row">
        <div class="col grid_12_of_12">
          <div class="section section--text">
            <div class="section__content">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </div>

  <!-- #3c3c3b blend mode-->
  <div class="section section--full section--primary text--center">
    <div class="site-content">
      <div class="row">
        <div class="col grid_12_of_12">

          <div class="section__content">
            <h2 class="section__title text--uppercase">
              <?php the_field('full_section_title') ?>
            </h2>
            <!-- 20px -->
            <div class="section__text">
              <?php the_field('full_section_text'); ?>
            </div>
          </div><!-- .section_content --> 
        </div><!-- .section --> 
      </div>
    </div>
  </div>

    <div class="row">
      <!-- opacity layer #061832 80%? check blend modes -->
      <div class="col grid_6_of_12">
        <div class="section section--half section--secondary text--center">
          <div class="section__content">
            <h2 class="section__title text--uppercase">
              <?php the_field('half_section_one_title') ?>
            </h2>
            <!-- 20px -->
            <div class="section__text">
              <?php the_field('half_section_one_text'); ?>
            </div>
          </div><!-- .section_content --> 
        </div><!-- .section --> 
      </div><!-- .col.grid_6_of_12 --> 

      <div class="col grid_6_of_12">
        <div class="section section--secondary section--half">
          <div class="section__content text--center">
            <h2 class="section__title text--uppercase">
              <?php the_field('half_section_two_title') ?>
            </h2>
            <!-- 20px -->
            <div class="section__text">
              <?php the_field('half_section_two_text'); ?>
            </div>
          </div><!-- .section_content --> 
        </div><!-- .section -->
      </div><!-- .col --> 
    </div><!-- .row -->

  <div class="row">
    <div class="col grid_12_of_12">
      <div class="section section--primary section--full">
        <div class="section__content">
          <h2 class="section__title text--center">Contact Us</h2>
          <?php dynamic_sidebar( 'Contact Form' ); ?>
        </div>
      </div>
    </div>
  </div>

  <!-- background #39424b, -->
</div> <!-- /#primary.site-content -->

<?php get_footer(); ?>
