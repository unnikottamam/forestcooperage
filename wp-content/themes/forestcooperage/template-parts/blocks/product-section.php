<?php
/**
 * Product Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'products-area-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}
$className = 'productsarea';
$textalign = get_field('text_align') ? get_field('text_align') : 'center';
$className .= ' text-' . $textalign;
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr(
  $className
); ?> coverbg padd__lg text-<?php the_field('color'); ?>">
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
        <div class="row justify-content-center productlist__row">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <?php the_field('contents'); ?>
                <div class="productlist__item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fc-sauna.png" alt="product">
                    <div class="productlist__cont">
                        <p>Sauna Product Description. Lorem ipsum dolor sit
                            consectetur adipiscing elit, sed do eiusmod
                            incididunt ut labore et dolore magna aliqua. </p>
                        <a href="#">
                            View Product
                            <svg xmlns="http://www.w3.org/2000/svg viewBox=" 0 0 16 16">
                                <path
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                    <h2>Sauna</h2>
                </div>
                <div class="productlist__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fc-tub.png" alt="product">
                    <div class="productlist__cont">
                        <p>Sauna Product Description. Lorem ipsum dolor sit
                            consectetur adipiscing elit, sed do eiusmod
                            incididunt ut labore et dolore magna aliqua. </p>
                        <a href="#">
                            View Product
                            <svg xmlns="http://www.w3.org/2000/svg viewBox=" 0 0 16 16">
                                <path
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                    <h2>Hot Tub</h2>
                </div>
                <div class="productlist__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fc-cistern.png" alt="product">
                    <div class="productlist__cont">
                        <p>Sauna Product Description. Lorem ipsum dolor sit
                            consectetur adipiscing elit, sed do eiusmod
                            incididunt ut labore et dolore magna aliqua. </p>
                        <a href="#">
                            View Product
                            <svg xmlns="http://www.w3.org/2000/svg viewBox=" 0 0 16 16">
                                <path
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                    <h2>Cistern</h2>
                </div>
                <div class="productlist__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/fc-tub-2.png" alt="product">
                    <div class="productlist__cont">
                        <p>Sauna Product Description. Lorem ipsum dolor sit
                            consectetur adipiscing elit, sed do eiusmod
                            incididunt ut labore et dolore magna aliqua. </p>
                        <a href="#">
                            View Product
                            <svg xmlns="http://www.w3.org/2000/svg viewBox=" 0 0 16 16">
                                <path
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                    <h2>Soaker Tub</h2>
                </div>
            </div>
        </div>
    </div>
</section>