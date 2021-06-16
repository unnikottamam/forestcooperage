<?php
/**
 * Product Image Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'product-image-slider-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}
$className = 'sidegallery prodslider';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}

if (have_rows('gallery')) { ?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr(
  $className
); ?> padd__lg">
    <div class="container">
        <div data-aos="fade-up" class="sidegallery__slider">
            <?php while (have_rows('gallery')) {
              the_row(); ?>
            <div class="sidegallery__slide">
                <div class="row align-items-start justify-content-between">
                    <div class="col-lg-6 prodslider__img order-lg-2">
                        <?php if (get_sub_field('image')) {
                          echo '<p><em>' .
                            wp_get_attachment_caption(
                              get_sub_field('image')['id']
                            ) .
                            '</em></p>';
                          echo wp_get_attachment_image(
                            get_sub_field('image')['id'],
                            'full'
                          );
                        } ?>
                    </div>
                    <div class="col-lg-6 sidegallery__cont text-lg-start text-center">
                        <?php
                        the_sub_field('contents');
                        if (have_rows('buttons')) {
                          echo '<ul class="ctalist">';
                          while (have_rows('buttons')) {
                            the_row();
                            if (get_sub_field('link')) {

                              $link = get_sub_field('link');
                              $link_url = $link['url'];
                              $link_title = $link['title'];
                              $link_target = $link['target']
                                ? $link['target']
                                : '_self';
                              ?>
                        <li data-aos="fade-up">
                            <a href="<?php echo esc_url(
                              $link_url
                            ); ?>" target="<?php echo esc_attr(
  $link_target
); ?>" class="btton btton-<?php the_sub_field('type'); ?>"><?php echo esc_html(
  $link_title
); ?></a>
                        </li>
                        <?php
                            }
                          }
                          echo '</ul>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            } ?>
        </div>
    </div>
</section>
<?php }