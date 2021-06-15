<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package forestcooperage
 */

$testi = get_field('footer_testimonials', 'options');
if ($testi) {
  shuffle($testi); ?>
<div class="footer__testi bg-success text-white text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 col-11">
                <h3><?php echo $testi[0]['title']; ?></h3>
                <p><?php echo $testi[0]['description']; ?></p>
                <div class="footer__testiimg">
                    <?php echo wp_get_attachment_image(
                      $testi[0]['image']['id'],
                      'thumbnail'
                    ); ?>
                    <h4><?php echo $testi[0]['name']; ?></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__testiside d-none d-lg-block"></div>
</div>
<?php
}
?>
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
<div class="instasec__cont">
    <div class="container">
        <div class="row">
            <div class="col-6 text-end">
                <a href="#">@forestcooperage</a>
            </div>
            <div class="col-6">
                <a href="#">#forestcooperage</a>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="footer text-white">
    <div class="container text-center text-md-start">
        <div class="row justify-content-center">
            <div class="col-12 footer__widget text-center">
                <a href="<?php echo home_url(); ?>" class="footer__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="logo">
                </a>
            </div>
            <div class="col-lg-8 col-md-10 text-center footer__widget">
                <?php the_field('footer_widget_1', 'options'); ?>
            </div>
            <div class="col-12 footer__widget">
                <div class="footer__form">
                    <?php echo do_shortcode(
                      '[contact-form-7 id="248" title="Footer form"]'
                    ); ?>
                </div>
            </div>
            <div class="col-md-4">
                <?php the_field('footer_widget_2', 'options'); ?>
            </div>
            <div class="col-md-4 footer__widget">
                <?php the_field('footer_widget_3', 'options'); ?>
            </div>
            <div class="col-md-4 footer__widget">
                <?php the_field('footer_widget_4', 'options'); ?>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>Copyright <?php echo date(
                  'Y'
                ); ?> Forest Cooperage Inc <span>|</span> All content is own by Forest Cooperage and may not
                    be
                    reproduced beyond <span>|</span> <a target="_blank" href="https://foecreative.com/">Crafted by
                        FOE</a></p>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>