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

  <?php 
  $full_image = get_field('full_section_image');
  $half_image_1 = get_field('half_section_one_image');
  $half_image_2 = get_field('half_section_two_image');

  $full_title = get_field('full_section_title');
  $full_text = get_field('full_section_title');

  $half_title_1 = get_field('half_section_one_title');
  $half_text_1 = get_field('half_section_one_text');

  $half_title_2 = get_field('half_section_two_title');
  $half_text_2 = get_field('half_section_two_text');
  ?>

  <?php if ($full_title && $full_text): ?>
    <?php if ($full_image) : ?>
      <div class="section section--full section--primary section--image text--center" style="background-image: url(<?php echo $full_image ?>);">
        <div class="section__overlay"></div>
      <?php else: ?>
        <div class="section section--full section--primary text--center">
        <?php endif; ?>
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
    <?php endif; ?>

    <div class="row">
      <?php if ($half_title_1 && $half_text_1): ?>
        <div class="col grid_6_of_12">

          <?php if ($half_image_1) : ?>
            <div class="section section--half section--secondary section--image text--center" style="background-image: url(<?php echo $half_image_1 ?>);">
              <div class="section__overlay"></div>
            <?php else: ?>
              <div class="section section--half section--secondary text--center">
              <?php endif; ?>
              <div class="section__content">
                <h2 class="section__title text--uppercase">
                  <?php echo $half_title_1; ?>
                </h2>
                <!-- 20px -->
                <div class="section__text">
                  <?php echo $half_text_1; ?>
                </div>
              </div><!-- .section_content --> 
            </div><!-- .section --> 
          </div><!-- .col.grid_6_of_12 --> 
        <?php endif; ?>

        <?php if ($half_title_2 && $half_text_2): ?>
        <div class="col grid_6_of_12">

          <?php if ($half_image_2) : ?>
            <div class="section section--half section--secondary section--image text--center" style="background-image: url(<?php echo $half_image_2 ?>);">
              <div class="section__overlay"></div>
            <?php else: ?>
              <div class="section section--half section--secondary text--center">
              <?php endif; ?>
              <div class="section__content">
                <h2 class="section__title text--uppercase">
                  <?php echo $half_title_2; ?>
                </h2>
                <!-- 20px -->
                <div class="section__text">
                  <?php echo $half_text_2; ?>
                </div>
              </div><!-- .section_content --> 
            </div><!-- .section --> 
          </div><!-- .col.grid_6_of_12 --> 
        <?php endif; ?>
      </div><!-- .row -->

    <?php get_footer(); ?>
