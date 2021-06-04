<?php
/**
 * Template Name: Reviews
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package forestcooperage
 */

get_header(); ?>

<section class="coverbg banner text-white">
    <div class="coverbg__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/fc-reviews-hero.jpg" alt="bg">
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center padd__lg min-vh-100">
            <div class="col-lg-8 col-md-10 text-center">
                <h1>Reviews</h1>
                <p>See what our customers are saying about our products.</p>
                <ul class="ctalist">
                    <li><a class="button button-light" href="#">View Reviews</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="reviewsec padd__lg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="reviewsec__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/review-1.png" alt="review">
                    <div class="reviewsec__cont">
                        <h3>Thanks for the great product</h3>
                        <h4>Barry Shaw</h4>
                        <p>Last week we had full moon, red wine, puccini playing the sound of the surf and the smell of
                            cedar all adding to the experience. What can I say but WOW!</p>
                    </div>
                </div>
                <div class="reviewsec__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/review-2.png" alt="review">
                    <div class="reviewsec__cont">
                        <h3>Very Happy Customers</h3>
                        <h4>The Richters, Victoria BC</h4>
                        <p>Thanks to Doug’s craftsmanship, our new Hot Tub is the focal point of our yard. Nothing beats
                            the smell, feel and look of wood! Thanks for all your attention to detail.</p>
                    </div>
                </div>
                <div class="reviewsec__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/review-3.png" alt="review">
                    <div class="reviewsec__cont">
                        <h3>Fabulous Hot Tub</h3>
                        <h4>Danita, Angus, Charlie and Laney Stewart - Metchosin, BC</h4>
                        <p>I wanted to say thank you for our wonderful new hot tub. The first night we used it, the sky
                            was clear and we could see all of the stars. The only sound was the crackling of the wood
                            stove and the wind in the trees. Your tub fits perfectly into our landscape and it looks
                            like it was made for the spot we put it on. It took about 2 hours to heat up the first
                            night, but the next night we only made a small fire and it heated up in about 15 minutes. It
                            was still at 98 degrees when we opened it up the next night! Not only is it a fabulous hot
                            tub, but it is a great conversation piece as well.</p>
                    </div>
                </div>
                <div class="text-center">
                    <ul class="ctalist">
                        <li><a class="button button-success" href="#">Load More</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padd__lgb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-6 text-center">
                <h2>We want to know <br>what you think.</h2>
                <p>With their order, Forest Cooperage clients open a conversation with our owner and the craftsmen
                    working on their project, to ensure sound advice...</p>
                <ul class="ctalist">
                    <li><a class="button button-black" href="#">Leave A Review</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="instasec">
    <div class="instasec__img">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/insta-1.jpg" alt="instagram">
        </a>
    </div>
    <div class="instasec__img">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/insta-1.jpg" alt="instagram">
        </a>
    </div>
    <div class="instasec__img">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/insta-1.jpg" alt="instagram">
        </a>
    </div>
    <div class="instasec__img">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/insta-1.jpg" alt="instagram">
        </a>
    </div>
</div>

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