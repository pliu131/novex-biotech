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
  <?php 
  $image_one = get_field('half_section_one_image');
  $image_two = get_field('half_section_two_image');
  $image_three = get_field('full_section_image');
  ?>

  <div class="site-content">
    <div class="row">
      <!-- opacity layer #061832 80%? check blend modes -->
      <div class="col grid_6_of_12">
        <div class="section section--secondary">
          <div class="section__content">
            <div class="section__text">
              <h2 class="section__title">
                Growth Factor-9
                <?php //the_field('half_section_one_title') ?>
              </h2>
              <!-- 20px -->
              <div class="section__description">
                <?php //the_field('half_section_one_text'); ?>
                <p>The first and only oral compound shown to increase the body’s natural growth hormone levels by 682%, GF9 is a dietary supplement that raises the naturally occurring hGH levels in the body. Get the benefits of increased hGH levels - burn fat, build muscle, increase energy, regain stamina and vigor - without the cost or controversy associated with synthetic injections.
                </p>

                <a href="#" class="button button--primary">Buy Now</a>
              </div>
            </div><!-- .section__text -->

            <div class="section__images">
              <div class="section__image">
                <img src="<?php echo get_template_directory_uri() ?>/images/gf9-home-left.png" alt="">
              </div>
            </div><!-- .section__image -->

          </div><!-- .section__content -->

        </div><!-- .section --> 


        <div class="section section--secondary">
          <div class="section__content">
            <div class="section__text">
              <h2 class="section__title">
                TestroVax
                <?php #the_field('half_section_two_title') ?>
              </h2>
              <!-- 20px -->
              <div class="section__description">
                <p>The active complex in this breakthrough testosterone boosting compound has been shown to increase natural testosterone levels by 42% in only 12 days! That means in fewer than two weeks, you can see intensified libido, increased muscle and strength, and improved energy and drive by naturally boosting your testosterone with TestroVax. </p>

                <a href="#" class="button button--primary">Buy Now</a>
                <?php #the_field('half_section_two_text'); ?>
              </div>
            </div>

            <div class="section__images">
              <div class="section__image">
                <img src="<?php echo get_template_directory_uri() ?>/images/testrovax-home-left.png" alt="">
              </div>
            </div><!-- .section__image -->
          </div><!-- .section_content --> 
        </div><!-- .section -->
      </div><!-- .col --> 


      <div class="col grid_6_of_12">
        <div class="section section--primary section--large">
          <div class="section__content">
            <h2 class="section__title">
              Growth Factor-9 and TestroVax, Enhancing Results
              <?php //the_field('full_section_title') ?>
            </h2>

            <div class="section__images">
              <img src="<?php echo get_template_directory_uri() ?>/images/gf9-home-left.png" alt="">

              <img src="<?php echo get_template_directory_uri() ?>/images/testrovax-home-left.png" alt="">
            </div>

            <div class="section__description">
              <p>The scientifically formulated compounds in Growth Factor-9 and TestroVax have been clinically tested and perfected after more than a decade of research and clinical trials with real people. The results show that with these two products working together, you can boost your strength, stamina and libido by balancing your body’s natural hGH and testosterone levels.</p>
              <p>These are hands down the premiere solutions for performance enhancement from the boardroom, to the bedroom, to the weight room.</p>

              <p>Never settle for second-place products. With Growth Factor-9 and TestroVax on board, you can turn back the clock, get your edge back, and feel like yourself again. </p>          
              <?php //the_field('full_section_text'); ?>

              <a href="#" class="button button--primary">Buy Together and Save</a>
            </div><!-- .section__description --> 
          </div><!-- .section__content --> 
        </div><!-- .section -->
      </div><!-- .col --> 
    </div><!-- .row -->
  </div><!-- .site-content -->

  <div class="section section--full section--image" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/about-image.png)">
    <div class="section__content">
      <div class="row">
        <div class="col grid_6_of_12">
          <h2 class="section__title">
            About Us
          </h2>
          <p>Novex Biotech has two decades of experience in the business of designing custom formulations specifically to address the real-life needs of our consumers. The resulting innovative products are available at high-end retailers across the nation and worldwide.</p>
          <p>Because of our reputation for excellence in products and services, we have built strong business relationships with some of the leading pharmaceutical and nutritional development companies in the world. Our collaboration with industry leaders in contract preclinical research and development provides us with access to cutting-edge discoveries at the forefront of our industry.</p>
          <p>These collaborations enable us to develop and bring to market proprietary formulations and one-of-a-kind products under the strictest standards.</p>
          <p>We never take shortcuts, so it’s no surprise our products are some of the best-selling, most sought-after formulations on the market today.</p>
        </div>
        <div class="col grid_6_of_12">
        <div class="quote">
          <p class="quote__content">“At Novex Biotech, the premise of everything we do revolves around research. We approach our two primary goals — optimizing performance and improving fitness — by focusing on common physiological issues we can affect to create real and lasting benefits for our customers. That’s why our real-life tested, research-driven products are the single most trusted source of body-optimizing solutions with unsurpassed results.”</p>

          <p class="quote__author">-Dr. Amy Heaton, Lead Scientist</p>
        </div>
          
                  
        </div>
      </div>
    </div>
  </div>

  <!-- background #39424b, -->
</div> <!-- /#primary.site-content -->

<?php get_footer(); ?>
