<?php
/**
 * Template Name: Sections
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package forestcooperage
 */

get_header(); ?>

<section class="coverbg text-white">
   <div class="coverbg__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home-bg.jpg" alt="bg">
   </div>
   <div class="container">
      <div class="row justify-content-center align-items-center padd__lg min-vh-100">
         <div class="col-lg-8 col-md-10 text-center">
            <h1>Nature inspires our craft.</h1>
            <h4>Forest Cooperage began as a project of passion in the pacific Northwest;</h4>
            <p>...the birthplace of some of the oldest cedar trees on earth. For centuries, nature has nurtured
               these magnificent forest giants here on Vancouver Island. In a timeless cycle of sustainability, a
               very few of them come to the skilled hands of our Forest Cooperage craftsmen where they are shown
               the respect they deserve.</p>
            <ul class="ctalist">
               <li><a class="button button-light" href="#">Our Products</a></li>
            </ul>
         </div>
      </div>
   </div>
</section>

<section class="sideimage padd__lg">
   <div class="sideimage__img right">
      <img src="<?php echo get_template_directory_uri(); ?>/images/side-1.png" alt="bg">
   </div>
   <div class="container">
      <div class="row">
         <div class="col-lg-7 text-center text-lg-start">
            <h2>Every hot tub we make is special. So is every customer.</h2>
            <p>With their order, Forest Cooperage clients open a conversation with our owner and the craftsmen
               working on their project, to ensure sound advice and assurance that specific needs are met. It's
               part of our dedication to enriching the lives of our customers by bringing them into intimate
               contact with nature.</p>
            <ul class="ctalist">
               <li><a class="button button-success" href="#">Our Promise</a></li>
            </ul>
         </div>
      </div>
   </div>
</section>

<section class="coverbg text-white padd__lg">
   <div class="coverbg__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/door-bg.jpg" alt="bg">
   </div>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 text-center">
            <h2>All kinds of perfect.</h2>
            <p>Our round barrel cedar hot tubs, saunas and Japanese soaking tubs are products of passion. </p>
         </div>
      </div>
   </div>
</section>

<section class="sideimage padd__lg">
   <div class="sideimage__img left">
      <img src="<?php echo get_template_directory_uri(); ?>/images/hot-tub.png" alt="bg">
   </div>
   <div class="container">
      <div class="row justify-content-lg-end">
         <div class="col-lg-7 text-center text-lg-start">
            <h2>We go way back.</h2>
            <p>We crafted our first cedar hot tub nearly a quarter-century ago. Since then, we've shipped over 1,000
               Forest Cooperage products to customers around the globe. Every one reflects a commitment to quality
               that begins with the materials we use and the methods we apply.</p>
            <ul class="ctalist">
               <li><a class="button" href="#">Our Roots</a></li>
               <li><a class="button button-light" href="#">Our Values</a></li>
            </ul>
         </div>
      </div>
   </div>
</section>

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
    if (have_rows('layouts')) {
      while (have_rows('layouts')) {
        the_row(); ?>
<?php
      }
    } else {
      //get_template_part('template-parts/content', 'page');
    }
  }
}
get_footer();