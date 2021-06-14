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
                <h2>Nature. Forever.</h2>
                <p>Our dedication to conserving wild lands and wildlife while protecting forest workers and their
                    communities drives everything we do.Subscribe to our newsletter for company information, processes
                    and new product releases.</p>
            </div>
            <div class="col-12 footer__widget">
                <div class="footer__form">
                    <form>
                        <div class="row align-items-end">
                            <div class="col-md-8 col-xl-9 pb-2 pb-md-0">
                                <div class="row">
                                    <div class="col-md-6 px-lg-1">
                                        <input type="text" placeholder="Full name" class="form-control">
                                    </div>
                                    <div class="col-md-6 px-lg-1">
                                        <input type="email" placeholder="Email address" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-3 px-lg-1">
                                <button class="btn btn-block btn-light w-100">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="footer__menu">
                    <li><a href="#">01 Products</a></li>
                    <li><a href="#">02 Heating</a></li>
                    <li><a href="#">03 Pricing</a></li>
                    <li><a href="#">04 FAQs </a></li>
                </ul>
            </div>
            <div class="col-md-4 footer__widget">
                <ul class="footer__menu">
                    <li><a href="#">05 Resources</a></li>
                    <li><a href="#">06 Blog</a></li>
                    <li><a href="#">07 Reviews</a></li>
                    <li><a href="#">08 Company</a></li>
                </ul>
            </div>
            <div class="col-md-4 footer__widget">
                <ul>
                    <li><strong>Forest Cooperage Inc.</strong></li>
                    <li>
                        2810 Ramsden Rd, Sooke BC Canada<br>
                        Phone: <a href="tel:1-877-557-1961">1-877-557-1961</a><br>
                        Email: <a href="mailto:sales@forestcooperage.com">sales@forestcooperage.com</a>
                    </li>
                    <li>
                        <a href="#">Instagram @forestcooperage</a><br>
                        <a href="#">Facebook @forestcooperage</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>Copyright 2020 Forest Cooperage Inc <span>|</span> All content is own by Forest Cooperage and may not
                    be
                    reproduced beyond <span>|</span> <a target="_blank" href="#">Crafted by FOE</a></p>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>