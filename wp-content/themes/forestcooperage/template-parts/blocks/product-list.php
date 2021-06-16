<?php
/**
 * Product List Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'product-lists-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}
$className = 'productlists';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr(
  $className
); ?> coverbg text-<?php the_field('color'); ?>">
    <div class="coverbg__img <?php echo get_field('bg_image')
      ? 'hasbg'
      : ''; ?>" <?php echo get_field('bg_color')
  ? 'style="background-color: ' . get_field('bg_color') . ';"'
  : ''; ?>>
        <?php if (get_field('bg_image')) {
          echo wp_get_attachment_image(get_field('bg_image')['id'], 'full');
        } ?>
    </div>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div data-aos="fade-up" class="col-md-3 col-6 productlists__item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sauna.svg" alt="product">
                    sauna
                </a>
            </div>
            <div data-aos="fade-up" class="col-md-3 col-6 productlists__item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hot-tub.svg" alt="product">
                    hot tub
                </a>
            </div>
            <div data-aos="fade-up" class="col-md-3 col-6 productlists__item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cistern.svg" alt="product">
                    cistern
                </a>
            </div>
            <div data-aos="fade-up" class="col-md-3 col-6 productlists__item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/soaker-tub.svg" alt="product">
                    soaker tub
                </a>
            </div>
        </div>
    </div>
</section>