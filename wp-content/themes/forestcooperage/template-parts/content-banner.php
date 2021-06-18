<?php
/**
 * Template part for displaying common banner
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package forestcooperage
 */

$bgimage = get_field('common_banner', 'options')['id'];
if (
  is_cart() ||
  is_checkout() ||
  is_product() ||
  is_account_page() ||
  is_wc_endpoint_url()
) {
  if (has_post_thumbnail()) {
    $bgimage = get_post_thumbnail_id();
  }
}
?>
<section class="coverbg banner text-white text-center">
    <div class="coverbg__img hasbg">
        <?php if ($bgimage) {
          echo wp_get_attachment_image($bgimage, 'full');
        } ?>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center padd__lg">
            <div data-aos="fade-up" class="col-lg-8 col-md-10 text-center">
                <h1>
                    <?php if (is_404()) {
                      echo 'Not Found';
                    } elseif (is_search()) {
                      echo 'Search Results';
                    } else {
                      the_title();
                    } ?>
                </h1>
            </div>
        </div>
    </div>
</section>