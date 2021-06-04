<?php
/**
 * Template Name: Contact Us
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package forestcooperage
 */

get_header(); ?>

<section class="coverbg banner text-white">
    <div class="coverbg__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/contact-bg.jpg" alt="bg">
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center padd__lg min-vh-100">
            <div class="col-lg-8 col-md-10 text-center">
                <h1>Our shop is wide open.</h1>
                <h4>Forest Cooperage began as a project of passion in the pacific Northwest;</h4>
                <p>...the birthplace of some of the oldest cedar trees on earth. For centuries, nature has nurtured
                    these magnificent forest giants here on Vancouver Island. In a timeless cycle of sustainability, a
                    very few of them come to the skilled hands of our Forest Cooperage craftsmen where they are shown
                    the respect they deserve.</p>
            </div>
        </div>
    </div>
</section>

<section class="contactsec padd__lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-6 text-center text-lg-start">
                <h2>With open arms. We welcome all types of questions.</h2>
                <p>Each one of our products is a hands-on, meticulously crafted and totally unique tribute to the
                    towering trees they are fashioned from. Ask us about our process and what it takes to go from a
                    natural tree to perched upon your own terrace.</p>
            </div>
        </div>
        <div class="row justify-content-between text-center text-lg-start">
            <div class="col-lg-3 contactsec__left">
                <ul class="ctalist d-lg-flex flex-column">
                    <li><a class="button button-success d-lg-grid px-lg-0" href="#">Email us</a></li>
                    <li><a class="button button-primary d-lg-grid px-lg-0" href="#">Call us</a></li>
                    <li><a class="button button-black d-lg-grid px-lg-0" href="#">Visit us</a></li>
                </ul>
            </div>
            <div class="col-lg-8 col-xl-7 contactsec__right">
                <div class="text-lg-end text-center">
                    <p><em>Send us a message, we’re on standby.</em></p>
                </div>
                <div class="contactsec__form text-white">
                    <form>
                        <input type="text" placeholder="Full name" class="form-control">
                        <input type="text" placeholder="Email address" class="form-control">
                        <input type="text" placeholder="Phone number" class="form-control">
                        <textarea placeholder="Message" class="form-control"></textarea>
                        <button class="button button-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contactmap">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10597.610804424452!2d-123.7782581!3d48.3912092!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdef85e799757c73a!2sForest%20Cooperage!5e0!3m2!1sen!2sca!4v1622788320799!5m2!1sen!2sca"
        allowfullscreen="" loading="lazy"></iframe>
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
                    <li><a class="button button-white" href="#">Our Values</a></li>
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