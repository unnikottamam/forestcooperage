<?php
/**
 * Template Name: Sections
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package forestcooperage
 */
?>
<section class="coverbg text-white">
    <div class="coverbg__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home-bg.jpg" alt="bg">
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center py-5 min-vh-100">
            <div class="col-lg-8 col-md-10 text-center">
                <h1>Nature inspires our craft.</h1>
                <h4>Forest Cooperage began as a project of passion in the pacific Northwest;</h4>
                <p>...the birthplace of some of the oldest cedar trees on earth. For centuries, nature has nurtured
                    these magnificent forest giants here on Vancouver Island. In a timeless cycle of sustainability, a
                    very few of them come to the skilled hands of our Forest Cooperage craftsmen where they are shown
                    the respect they deserve.</p>
                <ul class="ctalist">
                    <li><a class="btn btn-light" href="#">Our Products</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
get_header();
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